<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.service.index', [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->keywords = $request->keywords;
        $service->slug = Str::slug($request->title, '-');

        if ($request->hasFile('icon')) {

            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();

            //naming file
            $filename = time() . '.' . $extention;
            $file->move('uploads/images/', $filename);

            $service->icon = $filename;
        }

        $service->short_description = $request->short_description;
        $service->description = $request->description;

        if ($service->save()) {
            session()->flash('success', 'Service created succesfully!');
        } else {
            session()->flash('warning', 'Error creating service!');
        }

        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.service.edit', [
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->title = $request->title;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->keywords = $request->keywords;

        if ($request->hasFile('icon')) {

            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();

            //naming file
            $filename = time() . '.' . $extention;
            $file->move('uploads/images/', $filename);

            File::delete(public_path('uploads/images/' . $service->icon));

            $service->icon = $filename;
        }

        $service->short_description = $request->short_description;
        $service->description = $request->description;

        if ($service->save()) {
            session()->flash('success', 'Service updated succesfully!');
        } else {
            session()->flash('warning', 'Error updating service!');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        File::delete(public_path('uploads/images/' . $service->icon));

        if ($service->delete()) {
            session()->flash('success', 'Service deleted succesfully!');
        } else {
            session()->flash('warning', 'Error deleting service!');
        }

        return redirect()->back();
    }
}
