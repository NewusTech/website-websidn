<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Texts;
use App\Models\Abouts;
use App\Models\Galeris;
use App\Models\Homes;
use App\Models\Layanans;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TextController extends Controller
{
    public function index(): View
    {
        $texts = Texts::all();
        return view('admin.components.texts.index', compact('texts'));
    }

    public function create(): View
    {
        return view('admin.components.texts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'subheading' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        Texts::create($request->all());

        return redirect()->route('admin.components.texts.index')
            ->with('success', 'Text created successfully.');
    }

    public function show(int $id): View
    {
        $text = Texts::findOrFail($id);
        return view('admin.components.texts.show', compact('text'));
    }

    public function edit(int $id): View
    {
        $text = Texts::findOrFail($id);
        return view('admin.components.texts.edit', compact('text'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'subheading' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        $text = Texts::findOrFail($id);
        $text->update($request->all());

        return redirect()->route('admin.components.texts.index')
            ->with('success', 'Text updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $text = Texts::findOrFail($id);
        $text->delete();

        return redirect()->route('admin.components.texts.index')
            ->with('success', 'Text deleted successfully.');
    }

    public function TextPage(): View
    {
        return view('admin.pages.components.Home.text');
    }

    public function TextPageView()
    {
        return view('admin.pages.components.Home.Text.view');
    }
    public function TextPageEdit()
    {
        return view('admin.pages.components.Home.Text.edit');
    }

    public function TextPageLayanan(): View
    {
        return view('admin.pages.components.Layanan.text');
    }

    public function TextPageGaleri(): View
    {
        return view('admin.pages.components.Galeri.text');
    }

    public function TextPageAbout(): View
    {
        return view('admin.pages.components.Tentang_kami.text');
    }
}

