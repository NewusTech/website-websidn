<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\Abouts;
use App\Models\Galeris;
use App\Models\Homes;
use App\Models\Layanans;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function ImageIndex()
    {
        $images = Images::all();
        $userName = Auth::user()->name;
        return view('admin.pages.image.index', compact('images','userName'));
    }

    public function ImageCreate()
    {
        return view('admin.pages.image.create');
    }

    public function ImageStore(Request $request)
    {

        $validated = $request->validate([
            'resolusi' => 'required',
            'path' => 'required|image',
        ]);
        $path = $request->file('path')->store('websidn/images', 's3');

        Images::create([
            'resolusi' => $validated['resolusi'],
            // 'resolusi' => $resolusi,
            'path' => $path,
        ]);

        return redirect()->route('image.index')->with('success', 'Image successfully.');
    }

    public function ImageEdit($id)
    {
        $image = Images::findOrFail($id);
        return view('admin.pages.image.edit', compact('image'));
    }

    public function ImageUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'resolusi' => 'required',
            'path' => 'image',
        ]);

        $image = Images::findOrFail($id);
        $path = $image->path;

        if ($request->hasFile('path')) {
            $path = $request->file('path')->store('websidn/images', 's3');
        }

        $image->update([
            'resolusi' => $validated['resolusi'],
            'path' => $path,
        ]);

        return redirect()->route('image.index')->with('success', 'Image uploaded successfully.');
    }

    public function ImageView($id)
    {
        $image = Images::findOrFail($id);
        return view('admin.pages.image.view', compact('image'));
    }

    public function ImageDelete($id)
    {
        $image = Images::findOrFail($id);

        $relationships = ['home', 'galeri']; // Tambahkan semua nama relasi di sini

        foreach ($relationships as $relationship) {
            if ($image->$relationship()->exists()) {
            
                // Jika ada relasi yang ditemukan, tampilkan pesan error
                return redirect()->route('image.index')->withErrors('Gagal menghapus. Data terkait dengan entri di tabel lain.');
            }
        }
         $image->delete();

         return redirect()->route('image.index')->with('success', 'Data berhasil dihapus.');
    }
}
