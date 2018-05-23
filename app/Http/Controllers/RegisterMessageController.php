<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RegisterMessageController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = Message::create($request->all());
        Mail::send('front.emails.register', ["mensaje" => $mensaje], function($message) use($mensaje) {
		    	$message->from("david.gutierrez.tovar@gmail.com");
		    	$message->to("david.tovar@grupoontwice.com.mx")->subject("Begrand - Nuevo Registro");
			});

        return $mensaje->nombre;
    }
}
