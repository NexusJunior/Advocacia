<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    function menu(){		
		return view("templates.menu", ["mensagem" => "Bem Vindo"]);	
	}
}
