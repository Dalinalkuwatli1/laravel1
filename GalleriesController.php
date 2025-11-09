<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = galleries::all();
        return view('dashboard.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('dashboard.galleries.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'string|required',
            'description' => 'string|nullable',
            'image' => 'image|required',
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->storeAs('galleries',
                time() . '.' . $request->file('image')->extension());
        }

        galleries::create($validatedData);

        return redirect()->route('galleries.index')->with('success', 'galleries added successfully!');
    }

    public function edit($id)
    {
        $galleries = galleries::findOrFail($id);
        return view('dashboard.galleries.edit', compact('galleries'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'string|required',
            'description' => 'string|nullable',
            'image' => 'image|nullable',
            'status' => 'required',
        ]);

        $galleries = galleries::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($galleries->image && file_exists(storage_path('app/public/' . $galleries->image))) {
                unlink(storage_path('app/public/' . $galleries->image));
            }
            $validatedData['image'] = 'imgs/' . $request->file('image')->storeAs('galleries',
                time() . '.' . $request->file('image')->extension());
        }

        $galleries->update($validatedData);

        return redirect()->route('galleries.index')->with('success', 'galleries updated successfully!');
    }

    public function delete($id)
    {
        $galleries = galleries::findOrFail($id);

        if ($galleries->image && file_exists(storage_path('app/public/' . $galleries->image))) {
            unlink(storage_path('app/public/' . $galleries->image));
        }

        $galleries->delete();

        return redirect()->route('galleries.index')->with('success', 'galleries deleted successfully!');
    }
}
