<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Files;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function FileIndex()
    {
        $files = Files::all();
        return view('admin.pages.file.index', compact('files'));
    }

    public function FileCreate()
    {
        return view('admin.pages.file.create');
    }

    public function FileStore(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
            'path' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
        ]);

        if ($request->hasFile('path')) {
            $filePath = $request->file('path')->store('websidn/uploads/files', 's3');
            $validated['path'] = $filePath;
        }

        Files::create($validated);

        return redirect()->route('file.index')->with('success', 'File created successfully');
    }

    public function FileEdit($id)
    {
        $file = Files::findOrFail($id);
        return view('admin.pages.file.edit', compact('file'));
    }

    public function FileUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
            'path' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
        ]);

        $file = Files::findOrFail($id);

        if ($request->hasFile('path')) {
            $filePath = $request->file('path')->store('websidn/uploads/files', 's3');
            $validated['path'] = $filePath;
        }

        $file->update($validated);

        return redirect()->route('file.index')->with('success', 'File updated successfully');
    }

    public function FileView($id)
    {
        $file = Files::findOrFail($id);
        return view('admin.pages.file.view', compact('file'));
    }

    public function FileDelete($id)
    {
        $file = Files::findOrFail($id);
        $file->delete();
        return redirect()->route('file.index')->with('success', 'File deleted successfully');
    }
}
