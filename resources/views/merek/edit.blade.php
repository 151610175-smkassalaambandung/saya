@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li><a href="{{ url('/admin/User') }}">Merek mobil</a></li>
				<li class="active">data merek</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah data merek</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($merekku, ['url'=>route('Merek.update', $merekku->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
					@include('merek._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection