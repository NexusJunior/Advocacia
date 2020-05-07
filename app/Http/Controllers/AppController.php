<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AppController extends Controller
{
    function menu(){	
		return view("templates.menu", ["mensagem" => "Bem Vindo"]);		
	}

	function logout(){	
		Auth::logout();
		return redirect()->route('login');
	}

}
