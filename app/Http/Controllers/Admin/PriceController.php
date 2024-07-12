<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prices;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function PriceIndex()
    {
        $prices = Prices::all();
        return view('admin.pages.price.index', compact('prices'));
    }

    public function PriceCreate()
    {
        return view('admin.pages.price.create');
    }

    public function PriceStore(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'item1' => 'nullable|string|max:255',
            'item2' => 'nullable|string|max:255',
            'item3' => 'nullable|string|max:255',
            'item4' => 'nullable|string|max:255',
            'item5' => 'nullable|string|max:255',
            'image' => 'required|image',
        ]);

        $image = $request->file('image')->store('websidn/prices', 's3');

        Prices::create([
            'judul' => $validated['judul'],
            'item1' => $validated['item1'],
            'item2' => $validated['item2'],
            'item3' => $validated['item3'],
            'item4' => $validated['item4'],
            'item5' => $validated['item5'],
            'image' => $image,
        ]);

        return redirect()->route('price.index');
    }

    public function PriceEdit($id)
    {
        $price = Prices::findOrFail($id);
        return view('admin.pages.price.edit', compact('price'));
    }

    public function PriceUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'item1' => 'nullable|string|max:255',
            'item2' => 'nullable|string|max:255',
            'item3' => 'nullable|string|max:255',
            'item4' => 'nullable|string|max:255',
            'item5' => 'nullable|string|max:255',
            'image' => 'required|image',
        ]);

        $price = Prices::findOrFail($id);
        $path = $price->path;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('websidn/prices', 's3');
        }

        $price->update([
            'judul' => $validated['judul'],
            'item1' => $validated['item1'],
            'item2' => $validated['item2'],
            'item3' => $validated['item3'],
            'item4' => $validated['item4'],
            'item5' => $validated['item5'],
            'image' => $image,
        ]);

        return redirect()->route('price.index');
    }

    public function PriceView($id)
    {
        $price = Prices::findOrFail($id);
        return view('admin.pages.price.view', compact('price'));
    }

    public function PriceDelete($id)
{
    try {
        $price = Prices::findOrFail($id);
        $price->delete();
        
        return redirect()->route('price.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('price.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}
}
