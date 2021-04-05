<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Wesley";
        $idade = 18;
        $arr =[10, 20, 30, 40, 50];
        $nomes = ['Zé', 'João', 'Wesley', 'Outro Zé'];
    
        return view('welcome', 
        ['nome' => $nome, 
        'idade' => $idade,
        'array' => $arr,
        'nomes' => $nomes
        ]);
    }
}
