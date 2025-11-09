<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\categarey;
use App\Models\subcategarey;
use Illuminate\Http\Request;

class SubcategareyController  extends Controller
{
    public function index()
    {

        $subcategareys = subcategarey::with('category')->get();


        return view('dashboard.subcategarey.index',compact('subcategareys'));
    }
    public function create()
    {
        $categareys = categarey::all();
        return view('dashboard.subcategarey.create',compact('categareys'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categareys,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable',
            'status' => 'nullable|boolean',
            'showonhome' => 'nullable|boolean',

        ]);


        subcategarey::create($request->all());

        return redirect()->route('subcategarey.index');

}
public function edit($id)
{
    $subcategarey = subcategarey::findOrFail($id);
    $categareys = categarey::all();
    return view('dashboard.subcategarey.edit', compact('subcategarey', 'categareys'));
}

    public function update(Request $request, $id)
    {
        $request->validate([

            'category_id' => 'required|exists:categareys,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable',
            'status' => 'nullable|boolean',
            'showonhome' => 'nullable|boolean',

        ]);

        $subcategarey = subcategarey::findOrFail($id);

        $subcategarey->update($request->all());

        return redirect()->route('subcategarey.edit')->with('success', 'subcategarey updated successfully!');
    }

    public function destroy($id)
    {
        $subcategarey = subcategarey::findOrFail($id);


        $subcategarey->delete();

        return redirect()->route('subcategareys.index')->with('success', 'subcategarey deleted successfully!');
    }
}
