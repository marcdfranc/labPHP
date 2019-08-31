@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
	<h1>Saldo</h1>
	
	<ol class="breadcrumb">
		<li><a>Dashboard</a></li>				
		<li><a>Saldo</a></li>				
	</ol>
@stop

@section('content')
	@include('admin.includes.alerts')
	<p>Meu Saldo</p>
	<div class="box">
		<div class="box-header">
			<a href="{{ route('admin.balance.deposit') }}" class="btn btn-primary"><i class="fa fa-cart-plus"></i >Recarregar</a>
			@if(isset($amount) && $amount > 0)
				<a href="{{ route('admin.balance.drawn') }}" class="btn btn-danger"><i class="fa fa-cart-arrow-down"></i> Sacar</a>
				<a href="{{ route('admin.balance.fransfer') }}" class="btn btn-info"><i class="fa fa-exchange"></i> Transferir</a>
			@endif
		</div>
		<div class="box-body">
			
			<div class="small-box bg-green">
				<div class="inner">
					<h3><sup style="font-size: 20px">R$</sup> {{number_format($amount, 2, ',', ' ')}}</h3>

					<p>Bounce Rate</p>
				</div>
				<div class="icon">
					<i class="ion ion-cash"></i>
				</div>
				<a href="#" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
@stop