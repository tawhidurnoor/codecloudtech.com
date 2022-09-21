<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SlugController extends Controller
{
    public function checkBlogSlug(Request $request)
    {
        $blog_counter = Blog::where('slug', $request->slug);

        if (isset($request->id)) {
            $blog_counter = $blog_counter->where('id', '!=', $request->id);
        }

        $blog_counter = $blog_counter->count();

        if ($blog_counter == 0) {
            return "OK";
        } else {
            return "NOK";
        }
    }
}
