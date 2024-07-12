<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\Texts;
use App\Models\Galeris;
use App\Models\Homes;
use App\Models\Layanans;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function HomeIndex()
    {
        $homes = Homes::with(['images','texts'])->get();
        return view('admin.pages.components.Home.index', compact('homes'));
    }

    public function HomeCreate()
    {
        $images = Images::all();
        $texts = Texts::all();
        return view('admin.pages.components.Home.create', compact('images', 'texts'));
    }

    public function HomeStore(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
            'id_image' => 'required|exists:images,id',
            'id_text' => 'required|exists:texts,id',
        ]);

        Homes::create($validated);

        return redirect()->route('home.index');
    }

    public function HomeEdit($id)
    {
        $home = Homes::findOrFail($id);
        $images = Images::all();
        $texts = Texts::all();
        return view('admin.pages.components.Home.edit', compact('home', 'images', 'texts'));
    }

    public function HomeUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
            'id_image' => 'required|exists:images,id',
            'id_text' => 'required|exists:texts,id',
        ]);

        $home = Homes::findOrFail($id);
        $home->update($validated);

        return redirect()->route('home.index');
    }

    public function HomeView($id)
    {
        $home = Homes::with('images', 'texts')->findOrFail($id);
        return view('admin.pages.components.Home.view', compact('home'));
    }

    public function HomeDelete($id)
    {
        $home = Homes::findOrFail($id);
        $home->delete();
        return redirect()->route('home.index');
    }
}
