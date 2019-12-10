<?php

namespace App\Http\Controllers;
use App\Contato;
use App\Emails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;
use Mail;

class RegisterController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function add_contato(Request $data)
    {
        $info = array('nome' => $data['name'], 'email' => $data['email'], 'mensagem' => $data['message'], 'tel' => $data['tel']);
        $emails = ['contato@gotechconsultoria.com', 'jairo.jr@gotechconsultoria.com'];
        Mail::send('mail.gotech', $info, function($config) use($data, $emails) {
            $config->from('contato@gotechconsultoria.com', 'Contato');
            $config->subject('Novo contato de '. $data['name']);
            $config->to($emails);
            $config->cc('ariel.souza@gotechconsultoria.com');
        });
        
        Contato::create([
            'name' => $data['name'],
            'email' => $data['email'], 
            'tel' => $data['tel'],
            'status' => 'Aberto',
            'message' => $data['message'],
        ]);
        $titulo = 'Nossos serviços';
        flash('Sua mensagem foi enviada com sucesso!')->success();
        return view('pages.contatos')->with('titulo', $titulo);
    }

    public function add_email(Request $data)
    {
        Emails::create([
            'email' => $data['email']
        ]);
        $titulo = 'Desenvolvedora de Sistemas';
        flash('Seu email foi adicionado com sucesso a nossa lista!')->success();
        return view('pages.home')->with('titulo', $titulo);
    }
}