<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Help extends Controller
{
    public function ayuda(){
        return view("help");
    }
    public function ayudaddt(){
        return view("ayudadtt");
    }
    public function ayudaescuela(){
        return view("ayudaescuela");
    }
    public function ayudabiblioteca(){
        return view("ayudabiblioteca");
    }
}
