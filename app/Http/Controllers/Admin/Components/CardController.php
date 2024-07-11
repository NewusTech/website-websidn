<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function CardPageView()
    {
        return view('admin.pages.components.Home.Card.view');
    }
    public function CardPageEdit()
    {
        return view('admin.pages.components.Home.Card.edit');
    }
}
