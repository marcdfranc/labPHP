@extends('adminlte::page')

@section('title', 'Transferir Saldo')

@section('content_header')
	<h1>Transferir</h1>
	<ol class="breadcrumb">
		<li><a>Dashboard</a></li>
		<li><a>Saldo</a></li>
		<li><a>Transferir</a></li>		
	</ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Transferir Saldo (Informe o Recebedor)</h3>
		</div>
		<div class="box-body">
			@include('admin.includes.alerts')
			<form action="{{ route('admin.balance.transfer.confirm') }}" method="POST">
				{!! csrf_field() !!}

				<div class="form-group">
					<input type="text" name="sender" id="sender" placeholder="Nome ou e-mail do Recebedor" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Próxima Etapa</button>
				</div>
			</form>
		</div>
	</div>
@stop