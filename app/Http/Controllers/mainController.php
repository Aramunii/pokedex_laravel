<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class mainController extends Controller
{
    public function home()
    {
        if (!auth()->check()) {
            return redirect()->route('showLogin');
        }

        return view('home');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request = $request->all();

        $credentials =
        [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(auth()->attempt($credentials, true)) {

            if(auth()->user()->Team)
            {
                return redirect()->route('showMap');
            }

            return redirect()->route('start');
        } else {
            return Redirect::to('login')->with("message", "Usuário ou senha inválido!")->with('type', "error");
        }
    }

    public function showRegister()
    {
        return view('register');
    }

    public function  postRegister(Request $request)
    {
        $request = $request->all();

        $user = User::where('email', $request['email'])->first();

        if($user)
        {
            return Redirect::to('cadastrar')->with("message", "Usuário já possui cadastro!")->with('type', "error");
        }

        $data = [
            'user' => $request['user'] ,
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ];

        $user = User::create($data);

        if($user){
            return Redirect::to('login')->with("message", "Usuario cadastrado com sucesso!")->with('type', "success");
        }


    }

    public function postLogout()
    {
        auth()->logout();

        return redirect()->route('showLogin');
    }


}
