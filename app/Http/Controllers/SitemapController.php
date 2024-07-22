<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Blogtags;
use App\Models\Blogkategoris;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $blog = Blogs::latest()->get();
        $blogkategori = Blogkategoris::latest()->get();

        return response()->view('sitemap', compact('blog', 'blogkategori'))->header(
            'Content-Type','text/xml');
    }
    
}
