<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Texts;
use App\Models\Abouts;
use App\Models\Galeris;
use App\Models\Homes;
use App\Models\Layanans;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function GaleriIndex()
    {
        $galeris = Galeris::with(['images','texts'])->get();
        return view('admin.pages.galeri.index', compact('galeris'));
    }

    public function GaleriCreate()
    {
        $images = Images::all();
        $texts = Texts::all();
        return view('admin.pages.galeri.create', compact('images', 'texts'));
    }

    public function GaleriStore(Request $request)
    {
        $validated = $request->validate([
            'id_image' => 'required|exists:images,id',
            'id_text' => 'required|exists:texts,id',
        ]);

        Galeris::create($validated);

        return redirect()->route('galeri.index');
    }

    public function GaleriEdit($id)
    {
        $galeri = Galeris::findOrFail($id);
        $images = Images::all();
        $texts = Texts::all();
        return view('admin.pages.galeri.edit', compact('galeri', 'images', 'texts'));
    }

    public function GaleriUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'id_image' => 'required|exists:images,id',
            'id_text' => 'required|exists:texts,id',
        ]);

        $galeri = Galeris::findOrFail($id);
        $galeri->update($validated);

        return redirect()->route('galeri.index');
    }

    public function GaleriView($id)
    {
        $galeri = Galeris::with('images', 'texts')->findOrFail($id);
        return view('admin.pages.galeri.view', compact('galeri'));
    }

    public function GaleriDelete($id)
{
    try {
        $galeri = Galeris::findOrFail($id);
        $galeri->delete();
        
        return redirect()->route('galeri.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('galeri.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}
}
