<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Categoria;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{


    public function store(Request $request)
    {

        $dadosEmail = array(
            'nome' => request('name'),
            'email' => request('email'),
            'mensagem' => request('message')
        );

        $emailsTo = ['rodrigobernardino03@gmail.com',  request('email')];

        Mail::send('email.contato', $dadosEmail, function ($message) use ($emailsTo) {
            $message->from('geral@my365.pt', 'Rodrigo');
            $message->subject('Contacto Site');
            $message->to($emailsTo);
        });



       //return request('email');

       return redirect('/#contact')->with('message', 'Email Enviado!');
    }

}
