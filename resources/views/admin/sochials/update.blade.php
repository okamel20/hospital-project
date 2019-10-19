@extends('admin.index')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">{{ $title }}</h4>
            <p class="card-category">{{ $title }}</p>
          </div>
          <div class="card-body">
              {!! Form::open(['url'=>adminUrl('sochials/'.$data->id),'method'=>'put','files'=>true]) !!}

                <div class="col-md-12">
                  <label class="col-form-label">الرابط</label>
                  <br>
                  <a href="{{ $data['link'] }}" target="_blank">ذهاب</a>
                  <br>
                  <input type="text" name="link" class="form-control"  value="{{ oldOrValue('link',$data) }}">
                </div>

                <div class="form-group col-lg-12 ">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary @if($data->active == 1) active @endif">
                      <input type="radio" name="active" id="option2" value="1" autocomplete="off"@if($data->active == 1) checked="" @endif> مفعل
                    </label>
                    <label class="btn btn-secondary @if($data->active == 0) active @endif">
                      <input type="radio" name="active" id="option1" value="0" autocomplete="off" @if($data->active == 0) checked="" @endif> غير مفعل
                    </label>
                  </div>
                </div>
                
              {!! Form::submit(trans('admin.send'),['class'=>'btn btn-primary ']) !!}
              {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

  @section('script')
  
  @endsection
@endsection