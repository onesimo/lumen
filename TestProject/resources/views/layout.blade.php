<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Test Project</title>
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

     
  </head>
  <body>
    <div class="container">
    	<div class="col-lg-12 page-header">
    		<h1>
    			Test Project <br>
    			<small><i class="glyphicon glyphicon-phone-alt">Agenda Telefônica</i></small>
    			<span class="pull-right">
    				<form class="form-inline" action="" method="post">
    					    <div class="input-group">
				      <input type="text" class="form-control" placeholder="Pesquisar Contato...">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Go!</button>
				      </span>
				    </div><!-- /input-group -->
    				</form>
    			</span>
    		</h1>
    	</div>
    	<div class="row">
    		<div class="col-lg-12">
    			@foreach (range('A','Z') as $letra)
    				<a href="{{ route ('agenda.letra', ['letra' => $letra] )}}" class="btn btn-primary btn-xs">{{$letra}}</a>
    			@endforeach
    		</div>
    	</div>
        <div class="row"> 
            <div class="col-lg-12">
                <a href="" class="btn btn-primary">Novo Contato</a>
            </div>
        </div>
    	<div class="row">
    		@yield('content')
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>