<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	 
         $this->call('PessoaTableSeeder');
         $this->call('TelefoneTableSeeder');
         
    }
}
/*
class PessoaTableSeeder extends Seeder
{
	public function run()
	{
		factory(\App\Entities\Pessoa::class, 30)->create();
	}
}

class TelefoneTableSeeder extends Seeder
{
	public function run()
	{
		factory(\App\Entities\Telefone::class, 80)->create();

	}
}

*/