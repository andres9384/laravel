<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoologicoController extends Controller
{
    public function index(){
        return view("zoologico.index");
    }
    
    public function create(){
        return view("zoologico.create");
    }

    public function show($animal){

        //tambien se puede pasar una variable con compact = compact("animal")
        return view("zoologico.show",["animal"=>$animal]);
    }
}
