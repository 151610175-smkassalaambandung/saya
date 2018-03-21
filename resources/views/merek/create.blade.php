@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li><a href="{{ url('/admin/Merek') }}">Merek mobil</a></li>
				<li class="active">data merek mobil</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah data merek mobil</h2>
				</div>
				<div class="panel-body">
					{{ Form::open(['url' => route('Merek.store'), 'method' => 'POST', 'class'=> 'form-horizontal']) }}
					@include('merek._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection