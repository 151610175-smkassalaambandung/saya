@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              <h4 class="page-title">Tambah keterangan </h4>
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('Keterangan.index') }}">Keterangan </a>
                  </li>
                  <li class="active">
                      Tambah Keterangann
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <form method="post" action="{{route('Keterangan.store') }}" id="form-guru" enctype="multipart/form-data" files="true">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-9">
        <div class="card-box">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Keadaan<span class="text-danger">*</span></label>
                <input type="text" name="keadaan" class="form-control"  required="">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Tahun Keluar<span class="text-danger">*</span></label>
                <input type="text" name="thnklr" class="form-control" placeholder="" required="">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Harga<span class="text-danger">*</span></label>
                <input type="text" name="harga" class="form-control" placeholder="" required="">
                <span class="help-block"></span>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Deskripsi<span class="text-danger">*</span></label>
                <input type="text" name="desk" class="form-control" placeholder="" required="">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Sepeda<span class="text-danger">*</span></label>
                <select name="sepeda_id" class="form-control">
                  @foreach($sepeda as $data)
                  <option value="{{$data->id}}">
                    {{$data->nama}}
                  </option>
                  @endforeach
                </select>
                <span class="help-block"></span>
              </div>
            </div>


            
          </div>
          </div>
      </div>

      <div class="col-xs-12">
        <div class="card-box">
          <div class="row">
            <div class="col-md-12">
              <hr>
              <div class="pull-right">
                <button class="btn btn-default btn-bordered waves-effect waves-light" type="reset">Reset</button>
                <button class="btn btn-primary btn-bordered waves-effect waves-light" type="submit">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection