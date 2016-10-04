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

	public function pessoa()
	{
		return $this->belongsTo(Pessoa::class);
	}

	public function getNumeroAttribute()
	{
		return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
	}


}