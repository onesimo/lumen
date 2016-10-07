<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PessoaTableSeeder extends Seeder
{
	public function run()
	{
		factory(\App\Entities\Pessoa::class, 30)->create();
	}
}