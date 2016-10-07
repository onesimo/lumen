@extends('layout')

@section('content')

<?php
/*$nome    = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$apelido = (isset($_POST['apelido'])) ? $_POST['apelido'] : '';

$sexof = $sexom = '';
if(isset($_POST['sexo']) && $_POST['sexo'] == 'F')
$sexof = 'checked';

if(isset($_POST['sexo']) && $_POST['sexo'] == 'M')
$sexom = 'checked';*/

?>
  <div class="col-md-6">
    <form action="{{ route('pessoa.update', ['id' => $pessoa->id]) }}" method="post" class="form-horizontal">
    <input type="hidden" name="_method" value="PUT"/>
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" value="{{$pessoa->nome}}">
    </div>
  </div>
  <div class="form-group">
    <label for="apelido" class="col-sm-2 control-label">Apelido</label>
    <div class="col-sm-10">
      <input type="text" name="apelido" class="form-control"   placeholder="Apelido" value="{{$pessoa->apelido}}">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="radio" name="sexo" value="F" 
          @if($pessoa->sexo == 'F') checked @endif > <i>F</i>
          <input type="radio" name="sexo" value="M" 
          @if($pessoa->sexo == 'M') checked @endif > <i>M</i>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
  </div>
</form>
  </div>
  <div class="col-md-6">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
         <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
    @endif
    @include('partials.telefones',['telefones' => $pessoa->telefones])
  </div>
@endsection