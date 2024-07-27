<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carths;

class CarthController extends Controller
{
    public function CarthIndex()
    {
        $carths = Carths::all();
        return view('admin.pages.carth.index', compact('carths'));
    }

    public function CarthCreate()
    {
        return view('admin.pages.carth.create');
    }

    public function CarthStore(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|string',
            'judul' => 'required|string|max:255',
            'link' => 'required|string',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('websidn/carths', 's3');

        Carths::create([
            'kategori' => $validated['kategori'],
            'judul' => $validated['judul'],
            'link' => $validated['link'],
            'image' => $path,
        ]);

        return redirect()->route('carth.index');
    }

    public function CarthEdit($id)
    {
        $carth = Carths::findOrFail($id);
        return view('admin.pages.carth.edit', compact('carth'));
    }

    public function CarthUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|string',
            'judul' => 'required|string|max:255',
            'link' => 'required|string',
            'image' => 'image',
        ]);

        $carth = Carths::findOrFail($id);
        $path = $carth->image;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('websidn/carths', 's3');
        }

        $carth->update([
            'kategori' => $validated['kategori'],
            'judul' => $validated['judul'],
            'link' => $validated['link'],
            'image' => $path,
        ]);

        return redirect()->route('carth.index');
    }

    public function CarthView($id)
    {
        $carth = Carths::findOrFail($id);
        return view('admin.pages.carth.view', compact('carth'));
    }

    public function CarthDelete($id)
    {
        try {
            $carth = Carths::findOrFail($id);
            $carth->delete();
            
            return redirect()->route('carth.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('carth.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
