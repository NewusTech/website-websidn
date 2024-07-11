<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutIndex()
    {
        $abouts = Abouts::all();
        return view('admin.pages.about.index', compact('abouts'));
    }

    public function AboutCreate()
    {
        return view('admin.pages.about.create');
    }

    public function AboutStore(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'text' => 'required|string',
            'video' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('websidn/uploads', 's3');
            $validated['gambar'] = $imagePath;
        }

        Abouts::create($validated);

        return redirect()->route('about.index')->with('success', 'About item created successfully');
    }

    public function AboutEdit($id)
    {
        $about = Abouts::findOrFail($id);
        return view('admin.pages.about.edit', compact('about'));
    }

    public function AboutUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'text' => 'required|string',
            'video' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $about = Abouts::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('websidn/uploads', 's3');
            $validated['gambar'] = $imagePath;
        }

        $about->update($validated);

        return redirect()->route('about.index')->with('success', 'About item updated successfully');
    }

    public function AboutView($id)
    {
        $about = Abouts::findOrFail($id);
        return view('admin.pages.about.view', compact('about'));
    }

    public function AboutDelete($id)
    {
        $about = Abouts::findOrFail($id);
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About item deleted successfully');
    }
}
