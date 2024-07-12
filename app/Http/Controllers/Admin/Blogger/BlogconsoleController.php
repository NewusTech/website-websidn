<?php

namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use App\Models\Blogconsole;
use Illuminate\Http\Request;

class BlogconsoleController extends Controller
{
    public function Blogconsoleindex()
    {
        $blogconsoles = Blogconsole::all();
        return view('admin.blog.console.index', compact('blogconsoles'));
    }

    public function Blogconsolecreate()
    {
        return view('admin.blog.console.create');
    }

    public function Blogconsolestore(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string',
        ]);

        Blogconsole::create($validated);

        return redirect()->route('blogconsole.index')->with('success', 'Blog console created successfully');
    }

    public function Blogconsoleedit($id)
    {
        $blogconsole = Blogconsole::findOrFail($id);
        return view('admin.blog.console.edit', compact('blogconsole'));
    }

    public function Blogconsoleupdate(Request $request, $id)
    {
        $validated = $request->validate([
            'code' => 'required|string',
        ]);

        $blogconsole = Blogconsole::findOrFail($id);
        $blogconsole->update($validated);

        return redirect()->route('blogconsole.index')->with('success', 'Blog console updated successfully');
    }

    public function Blogconsoleshow($id)
    {
        $blogconsole = Blogconsole::findOrFail($id);
        return view('admin.blog.console.view', compact('blogconsole'));
    }

    public function Blogconsoledestroy($id)
    {
        $blogconsole = Blogconsole::findOrFail($id);
        $blogconsole->delete();
        return redirect()->route('blogconsole.index')->with('success', 'Blog console deleted successfully');
    }
}
