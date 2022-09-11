<?php

namespace App\Http\Controllers;

use App\Models\Page;
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

    public function slugDetails($slug)
    {
        $page = Page::where('slug', $slug)->get();
        if (count($page) > 0) {
            $page = $page->first();
            return view('frontend.page', [
                'page' => $page,
            ]);
        } else {
            $service = Service::where('slug', $slug)->firstOrFail();
            return view('frontend.service.details', [
                'service' => $service,
            ]);
        }
    }
}
