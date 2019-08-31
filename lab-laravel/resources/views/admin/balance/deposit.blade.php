@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
	<h1>Fazer Recarga</h1>
	<ol class="breadcrumb">
		<li><a>Dashboard</a></li>
		<li><a>Saldo</a></li>
		<li><a>Depositar</a></li>		
	</ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Fazer Recarga</h3>
		</div>
		<div class="box-body">
			@include('admin.includes.alerts')
			<form action="{{ route('admin.balance.deposit.store') }}" method="POST">
				{!! csrf_field() !!}

				<div class="form-group">
					<input type="text" name="value" id="value" placeholder="Valor Recarga" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Recarregar</button>
				</div>
			</form>
		</div>
	</div>
@stop