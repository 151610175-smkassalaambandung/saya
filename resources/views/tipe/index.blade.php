@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li class="active">tipe sepeda	</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Data tipe sepeda</h2>
				</div>
				<div class="panel-body">
		
					<p><a class="btn btn-primary" href="{{ route('tipe.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th style="column-span: 2">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tipe as $data)
							<tr>
								<td>{{$data->namatipe}}</td>
								<td><a href="{{route('tipe.edit', $data->id) }}" class="btn btn-primary">Ubah</a></td>

								<td>
									<form class="delete" action="{{route('tipe.destroy', $data->id)}}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="token">
										<button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete"><i class="fa fa-trash-o"> Hapus</i></button>
										{{csrf_field()}}
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection