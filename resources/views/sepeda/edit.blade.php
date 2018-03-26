@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              <h4 class="page-title">Edit </h4>
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('sepeda.index') }}">Sepeda </a>
                  </li>
                  <li class="active">
                     Edit Sepeda
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <form method="post" action="{{route('sepeda.update',$sepeda->id) }}" id="form-guru" enctype="multipart/form-data" files="true">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-9">
        <div class="card-box">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input type="text" name="nama" class="form-control" required="" value="{{$sepeda->nama}}">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Merek</label>
                <select name="mereks_id" class="form-control" required="">
                      @foreach($merek as $data)
                      <option value="{{$data->id}}" <?php if($sepeda->mereks_id == $data->id) echo "selected='selected'"; ?>>
                        {{$data->namamerek}}
                      </option>
                      @endforeach
                    </select>
                <span class="help-block"></span>
              </div>
            </div>
          </div>

           <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Tipe</label>
                <select name="tipes_id" class="form-control" required="">
                      @foreach($tipe as $data)
                      <option value="{{$data->id}}" <?php if($sepeda->tipes_id == $data->id) echo "selected='selected'"; ?>>
                        {{$data->namatipe}}
                      </option>
                      @endforeach
                    </select>
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Foto<span class=""></span></label><br>
                <img src="{{asset('/img/'.$sepeda->foto.'')}}" height="200px" width="200px">
                <input type="file" name="foto" class="form-control" >
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