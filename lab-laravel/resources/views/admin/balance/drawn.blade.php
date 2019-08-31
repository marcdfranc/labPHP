@extends('adminlte::page')

@section('title', 'Fazer Retirada')

@section('content_header')
	<h1>Fazer Recarga</h1>
	<ol class="breadcrumb">
		<li><a>Dashboard</a></li>
		<li><a>Saldo</a></li>
		<li><a>Retirada</a></li>		
	</ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Fazer Retirada</h3>
		</div>
		<div class="box-body">
			@include('admin.includes.alerts')
			<form action="{{ route('admin.balance.drawn.store') }}" method="POST">
				{!! csrf_field() !!}

				<div class="form-group">
					<input type="text" name="value" id="value" placeholder="Valor Retirada" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Sacar</button>
				</div>
			</form>
		</div>
	</div>
@stop