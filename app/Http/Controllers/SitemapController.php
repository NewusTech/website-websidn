<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class SitemapController extends Controller
{
    public function index()
    {

        $routes = collect(Route::getRoutes())->filter(function ($route) {
            $excludedRoutes = ['log-viewer', '_debugbar', '_ignition', 'register', 'forgot-password', 'reset-password', 'terms-of-service', 'privacy-policy', 'link', 'sitemap', 'login', 'logout', 'two-factor-challenge'];
            foreach ($excludedRoutes as $excluded) {
                if (str_contains($route->uri(), $excluded)) {
                    return false;
                }
            }
            return true;
        })->map(function ($route) {
            return [
                'loc' => url($route->uri()),
                'lastmod' => now()->toAtomString(),
            ];
        });
        
        $data = $routes->toArray();

        $blogs = Blogs::all(); 
        
        $xml = View::make('sitemap', compact('data', 'blogs'))->render();

        return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
    }
    
}
