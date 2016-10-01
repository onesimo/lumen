<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class telefone extends Model
{
	protected $table = 'telefones';
	protected $fillable = [
		'descricao',
		'codpais',
		'ddd',
		'prefixo',
		'sufixo'
	];
}