<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $contacts = Contacts::all();
        return view('admin.components.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.components.contacts.create');
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
            'whatsapp' => 'required|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'map' => 'nullable|string|max:255',
        ]);

        Contacts::create($request->all());

        return redirect()->route('admin.components.contacts.index')
            ->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $contact = Contacts::findOrFail($id);
        return view('admin.components.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $contact = Contacts::findOrFail($id);
        return view('admin.components.contacts.edit', compact('contact'));
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
            'whatsapp' => 'required|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'map' => 'nullable|string|max:255',
        ]);

        $contact = Contacts::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('admin.components.contacts.index')
            ->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $contact = Contacts::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.components.contacts.index')
            ->with('success', 'Contact deleted successfully.');
    }

    // Additional method for specific contact page
    public function ContactPage(): View
    {
        return view('admin.pages.components.Hubungi_Kami.hubungi');
    }
}

