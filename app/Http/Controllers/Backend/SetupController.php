<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SetupController extends Controller
{
    public function generalInformation()
    {
        $settings = Setting::findOrFail(1);
        return view('backend.website_setup.general_information', [
            'settings' => $settings,
        ]);
    }

    public function updateGeneralInformation(Request $request)
    {
        $settings = Setting::findOrFail(1);

        $settings->website_name = $request->website_name;
        $settings->motto = $request->motto;
        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->address = $request->address;

        if ($settings->save()) {
            session()->flash('success', 'Information updated succesfully!');
        } else {
            session()->flash('warning', 'Error updating information!');
        }



        return redirect()->back();
    }

    public function metaInformation()
    {
        $meta = Meta::findOrFail(1);

        $meta->save();

        return view('backend.website_setup.meta_information', [
            'meta' => $meta,
        ]);
    }

    public function updateMetaInformation(Request $request)
    {
        $meta = Meta::findOrFail(1);

        $meta->meta_title = $request->meta_title;
        $meta->meta_description = $request->meta_description;
        $meta->keywords = $request->keywords;

        if ($request->hasFile('meta_image')) {

            if (File::exists(public_path('daynamic_files/' . $meta->meta_image))) {
                // dd('File does exists.');
                File::delete(public_path('daynamic_files/' . $meta->meta_image));
            } else {
                // dd('File does not exists.');
            }

            $file = $request->file('meta_image');
            $extention = $file->getClientOriginalExtension();

            //naming file
            $filename = time() . '.' . $extention;
            $file->move('daynamic_files/', $filename);

            $meta->meta_image = $filename;
        }

        if ($meta->save()) {
            session()->flash('success', 'Information updated succesfully!');
        } else {
            session()->flash('warning', 'Error updating information!');
        }



        return redirect()->back();
    }
}
