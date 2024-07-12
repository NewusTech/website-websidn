<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonis;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TestimoniController extends Controller
{
    public function TestimoniIndex()
    {
        $testimonis = Testimonis::all();
        return view('admin.pages.testimoni.index', compact('testimonis'));
    }

    public function TestimoniCreate()
    {
        return view('admin.pages.testimoni.create');
    }

    public function TestimoniStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('websidn/testimonis', 's3');

        Testimonis::create([
            'name' => $validated['name'],
            'job' => $validated['job'],
            'description' => $validated['description'],
            'image' => $path,
        ]);

        return redirect()->route('testimoni.index');
    }

    public function TestimoniEdit($id)
    {
        $testimoni = Testimonis::findOrFail($id);
        return view('admin.pages.testimoni.edit', compact('testimoni'));
    }

    public function TestimoniUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image',
        ]);

        $testimoni = Testimonis::findOrFail($id);
        $path = $testimoni->image;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('websidn/testimonis', 's3');
        }

        $testimoni->update([
            'name' => $validated['name'],
            'job' => $validated['job'],
            'description' => $validated['description'],
            'image' => $path,
        ]);

        return redirect()->route('testimoni.index');
    }

    public function TestimoniView($id)
    {
        $testimoni = Testimonis::findOrFail($id);
        return view('admin.pages.testimoni.view', compact('testimoni'));
    }

    public function TestimoniDelete($id)
{
    try {
        $testimoni = Testimonis::findOrFail($id);
        $testimoni->delete();
        
        return redirect()->route('testimoni.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('testimoni.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}
}
