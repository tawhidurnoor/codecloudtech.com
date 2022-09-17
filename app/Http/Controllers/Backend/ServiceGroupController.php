<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServiceGroup;
use Illuminate\Http\Request;

class ServiceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_group = ServiceGroup::all();
        return view('backend.service_group.index', [
            'service_group' => $service_group,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service_group = new ServiceGroup();
        $service_group->name = $request->name;
        $service_group->service_type = $request->service_type;

        if ($service_group->save()) {
            session()->flash('success', 'Service group succesfully!');
        } else {
            session()->flash('warning', 'Error creating service group!');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceGroup  $serviceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceGroup $serviceGroup)
    {
        return $serviceGroup;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceGroup  $serviceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceGroup $serviceGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceGroup  $serviceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceGroup $serviceGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceGroup  $serviceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceGroup $serviceGroup)
    {
        //
    }
}
