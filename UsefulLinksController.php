<?php

namespace App\Http\Controllers;
use App\Models\usefullink;
use Illuminate\Http\Request;

class UsefulLinksController extends Controller
{
    public function index()
    {
        $usefullinks= usefullink::all();

        return view('dashboard.usefullink.index', compact('usefullinks'));
    }

    public function create()
    {
        return view('dashboard.usefullink.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'url' => 'nullable'
        ]);

        usefullink::create($validatedData);

        return redirect()->route('usefullink.index');
    }

    public function edit($id)
    {
        $usefullink = usefullink::findOrFail($id);
        return view('dashboard.usefullink.edit', compact('usefullink'));
    }

    public function update(Request $request, $id)
    {


         $validatedData =  $request->validate([
             'title' => 'nullable',
            'url' => 'nullable'
        ]);

          $usefullinkss = usefullink::findOrFail($id);

            $usefullinkss->update($validatedData);

        return redirect()->route('usefullink.index')->with('success', 'User updated successfully!');
    }


    public function delete($id)
    {
        $usefullink = usefullink::findOrFail($id);


        $usefullink->delete();

        return redirect()->route('usefullink.index')->with('success', 'User deleted successfully!');
    }
}


