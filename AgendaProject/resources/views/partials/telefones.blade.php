<p><a href="#" class="label label-primary"> Novo Telefone </a></p>
<table class="table table->hover">
	@foreach ($pessoa->telefones as $telefone)
		<tr>
			<td>{{ $telefone->descricao }}</td>
			<td>{{ $telefone->numero }} </td>
			<td>
				<a href="{{route('telefone.delete',['id'=> $telefone->id])}}" class="text-danger"> remove</a>
			</td>
		</tr>
	@endforeach
</table>