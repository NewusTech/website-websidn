<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonis;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $testimonis = Testimonis::all();
        return view('admin.components.testimonis.index', compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.components.testimonis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string|max:255',
        ]);

        Testimonis::create($request->all());

        return redirect()->route('admin.components.testimonis.index')
            ->with('success', 'Testimoni created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $testimoni = Testimonis::findOrFail($id);
        return view('admin.components.testimonis.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $testimoni = Testimonis::findOrFail($id);
        return view('admin.components.testimonis.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request,
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string|max:255',
        ]);

        $testimoni = Testimonis::findOrFail($id);
        $testimoni->update($request->all());

        return redirect()->route('admin.components.testimonis.index')
            ->with('success', 'Testimoni updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $testimoni = Testimonis::findOrFail($id);
        $testimoni->delete();

        return redirect()->route('admin.components.testimonis.index')
            ->with('success', 'Testimoni deleted successfully.');
    }

    // Additional method for specific testimoni page
    public function TestimoniPage(): View
    {
        return view('admin.pages.components.Home.testimoni');
    }
}
