<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $usuario = User::where('USUARIO_ID' ,Auth::user()->USUARIO_ID)->first();


        return view('user.index')->with(['usuario'=> $usuario]);
    }


    public function show(Request $request){
        $usuario = User::where('USUARIO_ID' ,Auth::user()->USUARIO_ID)->first();

        if($usuario){
        $usuario = $usuario->update([
            'USUARIO_NOME'=> $request->name,
            'USUARIO_EMAIL'=> $request->email,
            'USUARIO_SENHA'=>  Hash::make($request->password)
        ]);
    }

    return redirect()->route('dashboard');

    }
}
