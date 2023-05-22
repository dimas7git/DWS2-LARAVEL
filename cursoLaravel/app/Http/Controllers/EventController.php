<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Dimas";
        $idade = 19;
        $nomes = ["Mateus", "Maria", "João", "saulo"];
        $arr = [1,2,3,4,5];
        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'arr' => $arr, 'nomes' => $nomes]);
    }

    public function create(){
        return view('events.create');
    }
}
