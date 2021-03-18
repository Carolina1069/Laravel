<?php

namespace App\Http\Controllers;

use App\Mail\mensajerecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class messController extends Controller
{

    /*public function store (Request $request)
    {

            //return request('nombre');
            //return request('email');
            //return request('subject');
            //return request('contenido');
            //return $request;
    }*/
    public function store ()
    {

        $msg= request()->validate( [

            'nombre' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'contenido' => 'required'

        ]


        );
         Mail::to('bc_guevaral@unicah.edu')->queue(new mensajerecibido($msg));

         return new mensajerecibido($msg);

         return 'Mensaje enviado';

    }


}
