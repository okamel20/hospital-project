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
            {!! Form::open(['url'=>adminUrl('offers'),'files'=>true]) !!}

            <div class="col-lg-12">
              <label> عنوان العرض بالعربى </label>
              <input type="text" name="title_ar" class="form-control" placeholder="عنوان العرض بالعربى" required value="{{ old('title_ar') }}">
            </div>
            <div class="col-lg-12">
              <label> عنوان العرض  انجليزى </label>
              <input type="text" name="title_en" class="form-control" placeholder="عنوان العرض  انجليزى" required value="{{ old('title_en') }}">
            </div>

            <div class="col-md-12">
              <label class="col-form-label">الصورة</label>
              <input type="file" name="img" class="form-control" required="">
            </div>

            <div class="col-md-12">
              <label class="col-form-label "> مجتوى العرض بالعربى</label>
              <textarea class="form-control ckeditor" required="" name="desc_ar" rows="10">{{ old('desc_ar') }}</textarea>
            </div>

            <div class="col-md-12">
              <label class="col-form-label"> محتوى العرض بالانجليزى </label>
              <textarea class="form-control ckeditor" required="" name="desc_en" rows="10">{{ old('desc_en') }}</textarea>
            </div>

            <div class="col-lg-12">
              <label> عالخصم </label>
              <input type="number" name="sale" class="form-control" required value="{{ old('sale') }}">
            </div>


            <div class="col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option2" value="1" autocomplete="off" checked> مفعل
                </label>
                <label class="btn btn-secondary ">
                  <input type="radio" name="active" id="option1" value="0" autocomplete="off" > غير مفعل
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