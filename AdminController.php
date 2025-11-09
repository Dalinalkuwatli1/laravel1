<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {

        $admins = Admin::all();


        return view('dashboard.admins.index',compact('admins'));
    }
    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'image|nullable',
            'status' => 'required',
            'password' => 'required|min:10',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('Admin','public');
        }


        $validatedData['password'] = bcrypt($request->password);

       admin::create($validatedData);

        return redirect()->route('admins.index');
    }

    public function edit($id)
    {
        $admin = admin::findOrFail($id);
        return view('dashboard.admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $validatedData =  $request->validate([
            'name' => 'string|required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'image|nullable',
            'status' => 'required',
            'password' => 'required|min:10',
        ]);

        $admin = admin::findOrFail($id);


        if ($request->hasFile('image')) {
            if ($admin->image && file_exists(storage_path('app/public/' . $admin->image))) {
                unlink(storage_path('app/public/' . $admin->image));
            }
            $validatedData['image'] = $request->file('image')->store('Admin','public');
        } else {
            $imagePath = $admin->image;
        }
         $validatedData['password'] = bcrypt($request->password);

        $admin->update($validatedData);

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully!');
    }

    public function destroy($id)
    {
        $admin = admin::findOrFail($id);

        if ($admin->image && file_exists(storage_path('app/public/' . $admin->image))) {
            unlink(storage_path('app/public/' . $admin->image));
        }

        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully!');
    }
}
