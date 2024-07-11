<?php
namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Blogtags;
use App\Models\Blogkategoris;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function Blogindex()
    {
        $blogs = Blogs::with('tags')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function Blogcreate()
    {
        $kategoris = Blogkategoris::all();
        $tags = Blogtags::all();
        return view('admin.blog.create', compact('kategoris', 'tags'));
    }

    public function Blogstore(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
            'deskripsi_singkat' => 'required',
            'keyword' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'date' => 'required|date',
            'image' => 'nullable|image',
            'nama_penulis' => 'required',
            'tags' => 'required|array',
        ]);

        $validated['slug'] = Str::slug($validated['judul']);
        $path = $request->file('image')->store('websidn/blogs', 's3');
        
        $blog = Blogs::create([
            'judul'=> $validated['judul'],
            'slug'=> $validated['slug'],
            'id_kategori'=> $validated['id_kategori'],
            'deskripsi_singkat'=> $validated['deskripsi_singkat'],
            'keyword'=> $validated['keyword'],
            'deskripsi'=> $validated['deskripsi'],
            'status'=> $validated['status'],
            'date'=> $validated['date'],
            'nama_penulis'=> $validated['nama_penulis'],
            'image' => $path,
        ]);
        $blog->tags()->attach($request->tags);
        

        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    public function Blogedit($id)
    {
        $blog = Blogs::with('tags')->findOrFail($id);
        $kategoris = Blogkategoris::all();
        $tags = Blogtags::all();
        return view('admin.blog.edit', compact('blog', 'kategoris', 'tags'));
    }

    public function Blogupdate(Request $request, $id)
{
    $validated = $request->validate([
        'judul' => 'sometimes|required',
        'id_kategori' => 'sometimes|required',
        'deskripsi_singkat' => 'sometimes|required',
        'keyword' => 'sometimes|required',
        'deskripsi' => 'sometimes|required',
        'status' => 'sometimes|required',
        'date' => 'sometimes|required|date',
        'image' => 'nullable|image',
        'nama_penulis' => 'sometimes|required',
        'tags' => 'sometimes|required|array',
    ]);

    $blog = Blogs::findOrFail($id);

    if (isset($validated['judul'])) {
        $validated['slug'] = Str::slug($validated['judul']);
    }

    if ($request->file('image')) {
        $path = $request->file('image')->store('websidn/blogs', 's3');
        $validated['image'] = $path;
    }

    $blog->update($validated);

    if (isset($validated['tags'])) {
        $blog->tags()->sync($validated['tags']);
    }

    return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
}

    public function Blogshow($id)
    {
        $blog = Blogs::with('tags')->findOrFail($id);
        return view('admin.blog.view', compact('blog'));
    }

    public function Blogdestroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->tags()->detach();
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
