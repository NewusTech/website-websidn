<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function InsertPage()
    {
        return view('admin.pages.components.Layanan.insertfile');
    }
}
