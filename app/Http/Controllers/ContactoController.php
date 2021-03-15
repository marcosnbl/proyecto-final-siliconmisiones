<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()  
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required'
        ]);

        $correo = new ContactoMailable($request->all());
    
        Mail::to('matias.aquino.gerega@gmail.com')->send($correo);

        return redirect()->route('home')->with('info','Mensaje enviado');
    }
}
