<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HardwareProduct;
use Illuminate\Http\Request;

class HardwareProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardware_products = HardwareProduct::all();
        return view('backend.hardware_products.index', [
            'hardware_products' => $hardware_products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hardware_products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hardwareProduct = new HardwareProduct();
        $hardwareProduct->title = $request->title;
        $hardwareProduct->price = $request->price;
        $hardwareProduct->content = $request->content;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_original_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $file_size = $file->getSize();

            //naming file
            $filename = time() . '.' . $file_extension;
            $file->move('uploads/images/', $filename);


            $hardwareProduct->image = $filename;
        }

        $hardwareProduct->slug = $request->slug;

        if ($hardwareProduct->save()) {
            session()->flash('success', 'Product added succesfully!');
        } else {
            session()->flash('warning', 'Error adding page!');
        }

        return redirect()->route('admin.hardware.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HardwareProduct  $hardwareProduct
     * @return \Illuminate\Http\Response
     */
    public function show(HardwareProduct $hardwareProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HardwareProduct  $hardwareProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(HardwareProduct $hardwareProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HardwareProduct  $hardwareProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HardwareProduct $hardwareProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HardwareProduct  $hardwareProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(HardwareProduct $hardwareProduct)
    {
        //
    }
}
