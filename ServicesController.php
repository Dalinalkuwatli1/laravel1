<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = services::all();
        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'string|required',
            'description' => 'nullable|string',
            'image' => 'image|nullable',
            'status' => 'required',
        ]);
 if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->store('Works', 'imgs');
        }


        Services::create($validatedData);
        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    public function edit($id)
    {
        $services = services::findOrFail($id);
        return view('dashboard.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'string|required',
            'description' => 'nullable|string',
            'image' => 'image|nullable',
            'status' => 'required',
        ]);

        $services = services::findOrFail($id);
 if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->store('Works', 'imgs');
        }

        $services->update($validatedData);
        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function delete($id)
    {
        $services = Services::findOrFail($id);

        if ($services->image && file_exists(storage_path('app/public/' . $services->image))) {
            unlink(storage_path('app/public/' . $services->image));
        }

        $services->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
}
