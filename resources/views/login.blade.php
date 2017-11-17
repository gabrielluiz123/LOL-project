@extends('template')
@section('content')

<h3 align="center"> Seu login será necessário!</h3>
<p align="center"> Acesse sua conta abaixo: </p>
	<form>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<h4>Usuário: </h4>	
				<input type="text" name="login" class="form-control" />
			</div>
			<div class="col-md-4">
				<h4>Senha: </h4>	
				<input type="password" name="password" class="form-control" />
			</div>
			<div class="col-md-2"></div>
		</div>
	</form>
	<button class="btn" name="btn-auth" data-toggle="modal" data-target="#myModal">Autenticar</button>
    @if(Auth::check())
	<div id="myModal" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-sm">
    <!-- Modal content-->

		    <div class="modal-content">
		      <div class="modal-body">

		        <p>Autenticando login...<br>
		        Logado com sucesso! Redirecionando!</p>

		      </div>
		    </div>
		</div>
	</div>
@endif
@if(!Auth::check())
		<div id="myModal" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-sm">
    <!-- Modal content-->

		    <div class="modal-content">
		      <div class="modal-body">

		        <p>Autenticando login...<br>
		        Nao foi logado! Redirecionando!</p>

		      </div>
		    </div>
		</div>
	</div>
	@endif
@stop