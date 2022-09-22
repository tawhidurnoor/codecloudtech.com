<?php

namespace App\Http\Controllers;

use App\Models\HardwareProduct;
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
        $services = Service::limit(6)->get();
        return view('frontend.index', [
            'services' => $services,
        ]);
    }

    public function hardwareProducts()
    {
        $hardware_products = HardwareProduct::all();
        return view('frontend.hardware_products', [
            'hardware_products' => $hardware_products
        ]);
    }

    public function slugDetails($slug)
    {
        $page = Page::where('slug', $slug)->get();
        $hardware_product = HardwareProduct::where('slug', $slug)->get();
        if (count($page) > 0) {
            $page = $page->first();
            return view('frontend.page', [
                'page' => $page,
            ]);
        } else if (count($hardware_product) > 0) {
            $hardware_product = $hardware_product->first();
            return view('frontend.page', [
                'page' => $hardware_product,
            ]);
        } else {
            $service = Service::where('slug', $slug)->firstOrFail();
            return view('frontend.service.details', [
                'service' => $service,
            ]);
        }
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
