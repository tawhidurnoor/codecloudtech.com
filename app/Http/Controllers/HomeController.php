<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();
        return view('index', [
            'services' => $services,
        ]);
    }

    public function serviceDetails($service_slug)
    {
        $service = Service::where('slug', $service_slug)->firstOrFail();
        return view('frontend.service.details', [
            'service' => $service,
        ]);
    }
}
