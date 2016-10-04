<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;

class PessoaController extends Controller
{	
	public function create()
	{
		return view('pessoa.create');
	}
	
	public function delete($id)
	{
		$pessoa = Pessoa::find($id);

		return view('pessoa.delete', compact('pessoa'));
	}

	public function destroy($id)
	{
		Pessoa::destroy($id);
		
		return redirect()->route('agenda.index');
	}
	

}
