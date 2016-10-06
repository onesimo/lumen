<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{	
	public function create()
	{	
		$errors = [];
		return view('pessoa.create',compact('errors'));
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(),[
			'nome' => 'required|min:3|max:255|unique:pessoas',
			'apelido'=> 'required|min:2|max:50',
			'sexo' => 'required'
		]);

		if($validator->fails()){

			$errors = $validator->errors()->all();
			return view('pessoa.create', compact('errors'));

		}

		$pessoa = Pessoa::create($request->all());

		$letra = strtoupper(substr($pessoa->apelido, 0,1));

		return redirect()->route('agenda.letra', ['letra' => $letra]);

	}
	public function edit($id)
	{	
		$errors = [];
		$pessoa = Pessoa::find($id);
		return view('pessoa.edit',compact('pessoa','errors'));
	}

	public function update(Request $request, $id)
	{	
		$errors = [];

		$pessoa = Pessoa::find($id);
		$validator = Validator::make($request->all(),[
			'nome' => 'required|min:3|max:255|unique:pessoas,nome,'.$pessoa->id,
			'apelido'=> 'required|min:2|max:50',
			'sexo' => 'required'
		]);

		if($validator->fails()){

			$errors = $validator->errors()->all();
			return view('pessoa.create', compact('errors'));

		}

		
		$pessoa->fill($request->all())->save();

		$letra = strtoupper(substr($pessoa->apelido, 0,1));

		return redirect()->route('agenda.letra', ['letra' => $letra]);
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
