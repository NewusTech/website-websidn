<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cards;

class CardController extends Controller
{
    public function CardIndex()
    {
        $cards = Cards::all();
        return view('admin.pages.card.index', compact('cards'));
    }

    public function CardCreate()
    {
        return view('admin.pages.card.create');
    }

    public function CardStore(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|string',
            'judul' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('websidn/cards', 's3');

        Cards::create([
            'kategori' => $validated['kategori'],
            'judul' => $validated['judul'],
            'detail' => $validated['detail'],
            'image' => $path,
        ]);

        return redirect()->route('card.index');
    }

    public function CardEdit($id)
    {
        $card = Cards::findOrFail($id);
        return view('admin.pages.card.edit', compact('card'));
    }

    public function CardUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|string',
            'judul' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'image',
        ]);

        $card = Cards::findOrFail($id);
        $path = $card->image;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('websidn/cards', 's3');
        }

        $card->update([
            'kategori' => $validated['kategori'],
            'judul' => $validated['judul'],
            'detail' => $validated['detail'],
            'image' => $path,
        ]);

        return redirect()->route('card.index');
    }

    public function CardView($id)
    {
        $card = Cards::findOrFail($id);
        return view('admin.pages.card.view', compact('card'));
    }

    public function CardDelete($id)
{
    try {
        $card = Cards::findOrFail($id);
        $card->delete();
        
        return redirect()->route('card.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('card.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}
}
