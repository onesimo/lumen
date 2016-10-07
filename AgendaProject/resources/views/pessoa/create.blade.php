@extends('layout')

@section('content')

<?php
$nome    = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$apelido = (isset($_POST['apelido'])) ? $_POST['apelido'] : '';

$sexof = $sexom = '';
if(isset($_POST['sexo']) && $_POST['sexo'] == 'F')
$sexof = 'checked';

if(isset($_POST['sexo']) && $_POST['sexo'] == 'M')
$sexom = 'checked';

?>
  <div class="col-md-6">
    <form action="{{ route('pessoa.store')}}" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" value="{{$nome}}">
    </div>
  </div>
  <div class="form-group">
    <label for="apelido" class="col-sm-2 control-label">Apelido</label>
    <div class="col-sm-10">
      <input type="text" name="apelido" class="form-control"   placeholder="Apelido" value="{{$apelido}}">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="radio" name="sexo" value="F" 
          {{$sexof}} > <i>F</i>
          <input type="radio" name="sexo" value="M" 
          {{$sexom}} > <i>M</i>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Salvar</button>
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
  </div>
@endsection