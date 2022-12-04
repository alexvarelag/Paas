<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        session_start();
        
        if($_SESSION != null){
            return view('leading');
        }
        return view('login');
    }

    public function validateUser(Request $request)
    {

        $message = "¡Error de datos!";
        $email = request('email');
        $password = request('password');

        //Tomar los datos delabase de datos
        $dataUser = Register::all()
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->toArray();

        session_start();

        if ($dataUser) {
            $request->session()->put('key', $dataUser);

            $_SESSION['Hola'] = 'Hola';

            return view('leading');
        } else {

            return redirect('/')->with('status', $message);
        }
    }
}
