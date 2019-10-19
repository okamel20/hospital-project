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
            {!! Form::open(['url'=>adminUrl('properties'),'files'=>true]) !!}

            <div class="col-md-12">
              <div class="form-group">
                <label> العنوان بالعربى </label>
                <div class="form-group">
                  <input type="text" name="title_ar" class="form-control" placeholder="العنوان بالعربى" required value="{{ old('title_ar') }}">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label> العنوان بالانجليزى </label>
                <div class="form-group">
                  <input type="text" name="title_en" class="form-control" placeholder="العنوان بالانجليزى" required value="{{ old('title_en') }}">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label> الوصف بالعربى </label>
                <div class="form-group">
                  <input type="text" name="desc_ar" class="form-control" placeholder="الوصف بالعربى" required value="{{ old('desc_ar') }}">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label> الوصف بالانجليزى </label>
                <div class="form-group">
                  <input type="text" name="desc_en" class="form-control" placeholder="الوصف بالانجليزى" required value="{{ old('desc_en') }}">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <label class="col-form-label">الصورة</label>
              <input type="file" name="img" class="form-control" required="">
            </div>


            <div class="col-md-12">
              <div class="form-group">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="active" id="option2" value="1" autocomplete="off" checked> مفعل
                  </label>
                  <label class="btn btn-secondary ">
                    <input type="radio" name="active" id="option1" value="0" autocomplete="off" > غير مفعل
                  </label>
                </div>
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