<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\contactus;
use App\Models\product;
use App\Models\setting;
use App\Models\Work;
use Illuminate\Http\Request;

class sitendexController extends Controller
{
    //
    public function index (){


        $Settings = setting::first();
 $Products = product::latest()->get();
         $Works = Work::latest()->get();

        return view('site.layouts.home',compact('Settings','Works','Products'));
    }

      public function showproducts (){

        $Settings = setting::first();
         $Products = product::latest()->get();
        return view('site.Pages.Headers',compact('Settings','Products'));
    }

         public function showcontactUs (){

        $Settings = setting::first();

        return view('site.Pages.contactUs',compact('Settings'));
    }


         public function showaboutUs (){

        $Settings = setting::first();

        return view('site.Pages.aboutUs',compact('Settings'));
    }

          public function showFaq (){

        $Settings = setting::first();

        return view('site.Pages.Faq',compact('Settings'));
    }


      public function cartshow (){

        $Settings = setting::first();

        return view('site.Pages.cartshow',compact('Settings'));
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
    return redirect()->back()->with('success', 'Message sent successfully!');
}

    public function headershow (){


        return view('site.Pages.Headers');
    }



public function showeveningdresses1()
{
    $Settings = Setting::first();

    return view('site.Pages.eveningdresses1', compact('Settings'));
}

public function showeveningdresses2()
{
    $Settings = Setting::first();

    return view('site.Pages.eveningdresses2', compact('Settings'));
}

public function showaboutme (){

        $Settings = setting::first();

        return view('site.Pages.aboutme',compact('Settings'));
    }

   public function flowerbouquets()
{
    $Settings = setting::first();
    return view('site.Pages.flowerbouquets', compact('Settings'));
}

    public function crown (){

        $Settings = setting::first();

        return view('site.Pages.crown',compact('Settings'));
    }


  public function cap() {
    $Settings = setting::first();
    return view('site.Pages.cap', compact('Settings'));
}



    public function highheel (){

        $Settings = setting::first();

        return view('site.Pages.highheel',compact('Settings'));
    }

}
