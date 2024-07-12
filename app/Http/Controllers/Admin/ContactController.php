<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactIndex()
    {
        $contacts = Contacts::all();
        return view('admin.pages.contact.index', compact('contacts'));
    }

    public function ContactCreate()
    {
        return view('admin.pages.contact.create');
    }

    public function ContactStore(Request $request)
    {
        $validated = $request->validate([
            'whatsapp' => 'required|string|max:255',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'tiktok' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'map' => 'required|string|max:255',
        ]);

        Contacts::create($validated);

        return redirect()->route('contact.index');
    }

    public function ContactEdit($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('admin.pages.contact.edit', compact('contact'));
    }

    public function ContactUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'whatsapp' => 'required|string|max:255',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'tiktok' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'map' => 'required|string|max:255',
        ]);

        $contact = Contacts::findOrFail($id);
        $contact->update($validated);

        return redirect()->route('contact.index');
    }

    public function ContactView($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('admin.pages.contact.view', compact('contact'));
    }

    public function ContactDelete($id)
{
    try {
        $contact = Contacts::findOrFail($id);
        $contact->delete();
        
        return redirect()->route('contact.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('contact.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}
}
