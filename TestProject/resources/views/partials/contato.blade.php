<div class="panel @if($pessoa->sexo == 'F') panel-danger @else panel-info @endif">
  <div class="panel-heading">
    <h3 class="panel-title">
    @if($pessoa->sexo == 'F')
      <i class ="glyphicon glyphicon-cloud"></i>
    @else
      <i class="glyphicon glyphicon-asterisk"></i> 
    @endif
    {{ $pessoa->apelido }}
    <span class="pull-right">
      <a href="{{route('pessoa.edit',['id' => $pessoa->id])}}" class="btn btn-success btn-xs"
      data-toggle="tooltip" data-placement="top" title="Editar">editar</a>
      <a href="{{route('pessoa.delete',['id' => $pessoa->id])}}" class="btn btn-danger btn-xs" 
      data-toggle="tooltip" data-placement="top" title="Apagar">deletar</a>
    </span>
    </h3>
  </div>
  <div class="panel-body">
    <h3>{{$pessoa->nome}}</h3>
      @include('partials.telefones',['telefones' => $pessoa->telefones])
  </div>
</div>