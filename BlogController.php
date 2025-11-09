<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'content' => 'nullable',
            'status' => 'nullable|string',
            'image' => 'nullable',
            'author' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('blog_images', 'public');

        }

        Blog::create($validatedData);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'content' => 'string',
            'status' => 'nullable|string',
            'image' => 'nullable',
            'author' => 'nullable',
        ]);
        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $validatedData['image'] = $request->file('image')->store('blog_images', 'public');
        }

        $blog->update($validatedData);

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully!');
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully!');
    }
}
