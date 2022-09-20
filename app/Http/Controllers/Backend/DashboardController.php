<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $blogs = Blog::all();
        $files = Upload::all();
        return view('backend.dashboard', [
            'pages' => $pages,
            'blogs' => $blogs,
            'files' => $files,
        ]);
    }

    public function clear()
    {
        //Clear Cache facade value:
        Artisan::call('cache:clear');
        //Reoptimized class loader:
        Artisan::call('optimize');
        //Route cache:
        Artisan::call('route:cache');
        //Clear Route cache:
        Artisan::call('route:clear');
        //Clear View cache:
        Artisan::call('view:clear');
        //Clear Config cache:
        Artisan::call('config:cache');

        session()->flash('success', 'Cache cleared succesfully!');

        return redirect()->back();
    }
}
