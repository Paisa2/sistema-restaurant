<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionsController extends Controller
{
    //
    public function create(){
        return view('auth.login');
    }

    public function store(){

        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o la contraseña es incorrecta'
            ]);
        }else{
            return redirect()->route('auth.user');
            // if( auth()->user()->role == 'admin'){
            //     return redirect()->route('admin.index');
            // }else{
            //     return redirect()->route('user.index');
            // }
        }
    }
    
    public function destroy(){
        auth()->logout();
        // return "quieres cerrar sesion";
        return redirect()->to('/');
    }
}
