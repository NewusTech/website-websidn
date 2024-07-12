<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Corosels;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class CoroselController extends Controller
{
    public function CoroselIndex()
    {
        $corosels = Corosels::all();
        return view('admin.pages.corosel.index', compact('corosels'));
    }

    public function CoroselCreate()
    {
        return view('admin.pages.corosel.create');
    }

    public function CoroselStore(Request $request)
    {
        $validated = $request->validate([
            'resolusi' => 'required|string|max:255',
            'path' => 'required|image',
        ]);

        $path = $request->file('path')->store('websidn/corosels', 's3');

        Corosels::create([
            'resolusi' => $validated['resolusi'],
            'path' => $path,
        ]);

        return redirect()->route('corosel.index');
    }

    public function CoroselEdit($id)
    {
        $corosel = Corosels::findOrFail($id);
        return view('admin.pages.corosel.edit', compact('corosel'));
    }

    public function CoroselUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'resolusi' => 'required|string|max:255',
            'path' => 'image',
        ]);

        $corosel = Corosels::findOrFail($id);
        $path = $corosel->path;

        if ($request->hasFile('path')) {
            $path = $request->file('path')->store('websidn/corosels', 's3');
        }

        $corosel->update([
            'resolusi' => $validated['resolusi'],
            'path' => $path,
        ]);

        return redirect()->route('corosel.index');
    }

    public function CoroselView($id)
    {
        $corosel = Corosels::findOrFail($id);
        return view('admin.pages.corosel.view', compact('corosel'));
    }

    public function CoroselDelete($id)
    {
    try {
        $corosel = Corosels::findOrFail($id);
        $corosel->delete();
        
        return redirect()->route('corosel.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('corosel.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
    }
}
