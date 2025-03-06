<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class JaderController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    public function competenze(){
        return view('competenze');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function sendmail(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => [ 'integer'],
            'web' => ['url'],
            'message' => ['required', 'string', 'min:10', 'max:500'],
        ]);
        $mail = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'web'=> $request->web,
            'message'=> $request->message,
        ];
        Mail::to($mail['email'])->send(new ContactMail($mail));
        return redirect('/contact')->with('success','Email inviata correttamente');
    }
}
