<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoroselController extends Controller
{
    public function CoroselPageView()
    {
        return view('admin.pages.components.Home.Corosel.view');
    }
    public function CoroselPageEdit()
    {
        return view('admin.pages.components.Home.Corosel.edit');
    }
}
