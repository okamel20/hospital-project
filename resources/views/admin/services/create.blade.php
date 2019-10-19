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
            {!! Form::open(['url'=>adminUrl('services'),'files'=>true]) !!}

            <div class="col-lg-12">
              <label> عنوان الخدمة بالعربى </label>
              <input type="text" name="title_ar" class="form-control" placeholder="عنوان الخدمة بالعربى" required value="{{ old('title_ar') }}">
            </div>
            <div class="col-lg-12">
              <label> عنوان الخدمة  انجليزى </label>
              <input type="text" name="title_en" class="form-control" placeholder="عنوان الخدمة  انجليزى" required value="{{ old('title_en') }}">
            </div>
            
            <div class="col-lg-12">
              <label> {{ trans('admin.img') }} </label>
              <input type="file" name="img" class="form-control" placeholder="{{ trans('admin.img') }}" required="">
            </div>

            <div class="col-md-12">
              <label class="col-form-label "> مجتوى الخدمة بالعربى</label>
              <textarea class="form-control ckeditor" required="" name="desc_ar" rows="10">{{ old('desc_ar') }}</textarea>
            </div>

            <div class="col-md-12">
              <label class="col-form-label"> محتوى الخدمة بالانجليزى </label>
              <textarea class="form-control ckeditor" required="" name="desc_en" rows="10">{{ old('desc_en') }}</textarea>
            </div>

            <div class="col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off"> {{ trans('admin.noActvided') }}
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" checked> {{ trans('admin.actvided') }}
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
    <script src="{{ url('/public/admin/plugins/ckeditor/') }}/ckeditor.js"></script>
  
  @endsection
@endsection