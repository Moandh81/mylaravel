<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{



    public function index() {
        return view('welcome');

    }


    public function getContact() {

        return view('contact');
    }


    public function postContact(Request $request) {

        //dd($request) ;
        //echo $request->nom."<br>" ;
        //echo $request->email."<br>" ;


        //Méthode alternative pour request
        //echo request('nom');
        //echo request('email');

        return view('confirmation',  ['nom' => $request->nom , 'email' => $request->email]);


        // méthode alternative pour le retour de la vue
        //$nom = $request->nom;
        //$email = $request->email ;
        //return view('confirmation',  compact('nom', 'email'));



    }
}
