<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

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

        $settings->save();

        session()->flash('success', 'Information updated succesfully!');
        return redirect()->back();
    }
}
