<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TelefoneTableSeeder extends Seeder
{
	public function run()
	{
		factory(\App\Entities\Telefone::class, 80)->create();

	}
}