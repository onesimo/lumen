<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
	public function index($letra = 'A')
	{
		$pessoas = Pessoa::where('apelido','like',$letra.'%')->get();
		//$letras = $this->getLetras();
		return view('agenda',compact('pessoas'));
	}

	public function busca(Request $request)
	{
		$busca = $request->busca;
		$pessoas = [];
		if(!empty($busca)) {
			$pessoas = Pessoa::where('nome','like', "%{$busca}%")->orWhere('apelido','like',"%{$busca}%")->get();
		}
		//$letras = $this->getLetras();
		return view('agenda', compact('pessoas','letras'));
	}

}
