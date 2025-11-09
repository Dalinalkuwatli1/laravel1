<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\contactus;
use Illuminate\Http\Request;

class ContactusController  extends Controller
{
    public function index()
    {

        $contactus = contactus::get();

      //  dd($contactus);
        return view('dashboard.contactus.index', ['contactus'=>$contactus]);
    }

    public function destroy($id)
    {
        $contactus = contactus::findOrFail($id);

        if ($contactus->image && file_exists(storage_path('app/public/' . $contactus->image))) {
            unlink(storage_path('app/public/'. $contactus->image));
        }

        $contactus->delete();

        return redirect()->route('contactus.index')->with('success', 'contactus deleted successfully!');
    }



    public function store(Request $request)
{

  $validatedData =  $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ]);
    contactus::create($validatedData);
    return redirect()->route('home.index')->with('success', 'Message sent successfully!');
}


}
