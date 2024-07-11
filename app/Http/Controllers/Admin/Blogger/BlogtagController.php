<?php

namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use App\Models\Blogtags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogtagController extends Controller
{
    public function Blogtagindex()
    {
        $blogtags = Blogtags::all();
        return view('admin.blog.tag.index', compact('blogtags'));
    }

    public function Blogtagcreate()
    {
        return view('admin.blog.tag.create');
    }

    public function Blogtagstore(Request $request)
    {
        $request->validate([
            'tags' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogtags,slug',
        ]);

        $slug = $request->input('slug') ?: Str::slug($request->input('tags'));

        Blogtags::create([
            'tags' => $request->input('tags'),
            'slug' => $slug,
        ]);

        return redirect()->route('blogtag.index')->with('success', 'Blog tag created successfully.');
    }

    public function Blogtagedit($id)
    {
        $blogtag = Blogtags::findOrFail($id);
        return view('admin.blog.tag.edit', compact('blogtag'));
    }

    public function Blogtagupdate(Request $request, $id)
    {
        $request->validate([
            'tags' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogtags,slug,' . $id,
        ]);

        $blogtag = Blogtags::findOrFail($id);
        $slug = $request->input('slug') ?: Str::slug($request->input('tags'));

        $blogtag->update([
            'tags' => $request->input('tags'),
            'slug' => $slug,
        ]);

        return redirect()->route('blogtag.index')->with('success', 'Blog tag updated successfully.');
    }

    public function Blogtagshow($id)
    {
        $blogtag = Blogtags::findOrFail($id);
        return view('admin.blog.tag.view', compact('blogtag'));
    }
    
    public function Blogtagdestroy($id)
    {
        $blogtag = Blogtags::findOrFail($id);
        $blogtag->delete();

        return redirect()->route('blogtag.index')->with('success', 'Blog tag deleted successfully.');
    }
}
