<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMail ;

use Mail;

class MailController extends Controller
{
    public function getEmail() {
        return view('mail');
    }

    public function postEmail(Request $request) {
        $data=$request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'message' => "required"
        ]) ;


        Mail::to('test@test.com')->send(new ContactMail($data));

        //dd($data);


    }
}
