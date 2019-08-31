@extends('adminlte::page')

@section('title', 'Confirmar transferência de Saldo')

@section('content_header')
	<h1>Confirmar transferência</h1>
	<ol class="breadcrumb">
		<li><a>Dashboard</a></li>
		<li><a>Saldo</a></li>
		<li><a>Transferir</a></li>		
		<li><a>Confirmar</a></li>		
	</ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Confirmar transferência de Saldo</h3>
		</div>
		<div class="box-body">
			@include('admin.includes.alerts')
			<form action="{{ route('admin.balance.transfer.store') }}" method="POST">
				
				{!! csrf_field() !!}

				<p><b>Recebedor: </b> {{ $sender->name }}</p>

				<p><b>Saldo:</b> R$ {{ number_format(auth()->user()->balance->amount, 2, ',', ' ') }}</p>

				<input type="hidden" name="sender_id" id="sender_id" value="{{ $sender->id }}">
				<div class="form-group">
					<input type="text" name="value" id="value" placeholder="valor" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Transferir</button>
				</div>
			</form>
		</div>
	</div>
@stop