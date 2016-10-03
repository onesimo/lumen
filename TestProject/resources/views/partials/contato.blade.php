<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $pessoa->apelido }}
    <span class="pull-right">
      <a href="#" class="btn btn-success btn-xs"
      data-toggle="tooltip" data-placement="top" title="Editar">editar</a>
      <a href="#" class="btn btn-danger btn-xs" 
      data-toggle="tooltip" data-placement="top" title="Apagar">deletar</a>
    </span>
    </h3>
  </div>
  <div class="panel-body">
    <h3>{{$pessoa->nome}}</h3>
    <table class="table table->hover">
    	@foreach ($pessoa->telefones as $telefone)
    		<tr>
    			<td>{{ $telefone->descricao }}</td>
    			<td>{{ $telefone->numero }} </td>
    			<td>
    				<a href="#" class="text-danger"> remove</a>
    			</td>
    		</tr>
    	@endforeach
    </table>
  </div>
</div>