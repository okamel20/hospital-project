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
              {!! Form::open(['url'=>adminUrl('managers/'.$data->id),'method'=>'put','files'=>true]) !!}

                <div class="col-lg-12">
                  <label> الأسم بالعربى </label>
                  <input type="text" name="name_ar" class="form-control" placeholder="الأسم بالعربى" required value="{{ oldOrValue('name_ar',$data) }}">
                </div>
                <div class="col-lg-12">
                  <label> الأسم  انجليزى </label>
                  <input type="text" name="name_en" class="form-control" placeholder="الأسم  انجليزى" required value="{{ oldOrValue('name_en',$data) }}">
                </div>

                <div class="col-lg-12">
                  <label> {{ trans('admin.img') }} </label>
                  <img src="{{ Storage::url($data->img) }}" class="img-responsive clearfix" width="100px" height="100px">
                  <br>
                  <input type="file" name="img" class="form-control" placeholder="{{ trans('admin.img') }}" accept="image/x-png,image/gif,image/jpeg">
                </div>

                <div class="col-lg-12">
                  <label> الوظيفة بالعربى </label>
                  <input type="text" name="job_ar" class="form-control" placeholder="الوظيفة بالعربى" required value="{{ oldOrValue('job_ar',$data) }}">
                </div>
                <div class="col-lg-12">
                  <label> الوظيفة  انجليزى </label>
                  <input type="text" name="job_en" class="form-control" placeholder="الوظيفة  انجليزى" required value="{{ oldOrValue('job_en',$data) }}">
                </div>

                <div class="col-md-12">
                  <label class="col-form-label "> ماذا قال عن المستشفي بالعربى</label>
                  <textarea class="form-control" required="" name="content_ar" rows="10">{{ oldOrValue('content_ar',$data) }}</textarea>
                </div>

                <div class="col-md-12">
                  <label class="col-form-label"> ماذا قال عن المستشفي بالانجليزى </label>
                  <textarea class="form-control" required="" name="content_en" rows="10">{{ oldOrValue('content_en',$data) }}</textarea>
                </div>
                
                <div class="col-lg-12 ">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary @if($data->active == 0) active @endif">
                      <input type="radio" name="active" id="option2" value="0" autocomplete="off"@if($data->active == 0) checked="" @endif> {{ trans('admin.noActvided') }}
                    </label>
                    <label class="btn btn-secondary @if($data->active == 1) active @endif">
                      <input type="radio" name="active" id="option1" value="1" autocomplete="off" @if($data->active == 1) checked="" @endif> {{ trans('admin.actvided') }}
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