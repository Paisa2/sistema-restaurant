<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    //middleware y roles manejo de roles
    public function index(){
        return view('usuario.index');
    }
}