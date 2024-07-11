<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Texts;

class TextController extends Controller
{

    public function TextIndex()
    {
        $texts = Texts::all();
        return view('admin.pages.text.index', compact('texts'));
    }

    public function TextCreate()
    {
        return view('admin.pages.text.create');
    }

    public function TextStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'paragraph' => 'required|string',
        ]);

        Texts::create($validated);

        return redirect()->route('text.index');
    }

    public function TextEdit($id)
    {
        $text = Texts::findOrFail($id);
        return view('admin.pages.text.edit', compact('text'));
    }

    public function TextUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'paragraph' => 'required|string',
        ]);

        $text = Texts::findOrFail($id);
        $text->update($validated);

        return redirect()->route('text.index');
    }

    public function TextView($id)
    {
        $text = Texts::findOrFail($id);
        return view('admin.pages.text.view', compact('text'));
    }

    public function TextDelete($id)
    {
        $text = Texts::findOrFail($id);

        $relationships = ['home', 'galeri']; // Tambahkan semua nama relasi di sini

        foreach ($relationships as $relationship) {
            if ($text->$relationship()->exists()) {
            
                // Jika ada relasi yang ditemukan, tampilkan pesan error
                return redirect()->route('home.index')->withErrors('Gagal menghapus. Data terkait dengan entri di tabel lain.');
            }
        }
         $text->delete();

         return redirect()->route('home.index')->with('success', 'Data berhasil dihapus.');
    }

    // public function TextPage(): View
    // {
    //     return view('admin.pages.components.Home.text');
    // }

    // public function TextPageView()
    // {
    //     return view('admin.pages.components.Home.Text.view');
    // }
    // public function TextPageEdit()
    // {
    //     return view('admin.pages.components.Home.Text.edit');
    // }

    // public function TextPageLayanan(): View
    // {
    //     return view('admin.pages.components.Layanan.text');
    // }

    // public function TextPageGaleri(): View
    // {
    //     return view('admin.pages.components.Galeri.text');
    // }

    // public function TextPageAbout(): View
    // {
    //     return view('admin.pages.components.Tentang_kami.text');
    // }
}
