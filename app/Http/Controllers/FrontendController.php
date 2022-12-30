<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home',[
            'homes'=>Home::where('status',1)->get(),
            'abouts'=>About::where('status',1)->get(),
            'services'=>Service::where('status',1)->get(),
        ]);
    }
    public function Contact(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back();
    }
}
