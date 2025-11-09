<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{

    public function index()
    {
        $works = Work::all();
        return view('dashboard.works.index', compact('works'));
    }

       public function create()
    {
        return view('dashboard.works.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'email' => 'required|string',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|max:2048',
            'status' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->store('Works', 'imgs');
        }


        Work::create($validatedData);

        return redirect()->route('works.index')->with('success', 'Work added successfully!');
    }


    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('dashboard.works.edit', compact('work'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'email' => 'required|string',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|max:2048',
            'status' => 'required',
        ]);

        $work = Work::findOrFail($id);


         if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->store('Works', 'imgs');
        }


        $work->update($validatedData);

        return redirect()->route('works.index')->with('success', 'Work updated successfully!');
    }


    public function delete($id)
    {
        $work = Work::findOrFail($id);

        if ($work->image && file_exists(storage_path('app/public/' . $work->image))) {
            unlink(storage_path('app/public/' . $work->image));
        }

        $work->delete();

        return redirect()->route('works.index')->with('success', 'Work deleted successfully!');
    }
}
