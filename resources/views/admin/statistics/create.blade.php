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
            {!! Form::open(['url'=>adminUrl('statistics'),'files'=>true]) !!}

            <div class="col-md-12">
              <div class="form-group">
                <label> العنوان بالعربى </label>
                <div class="form-group">
                  <input type="text" name="name_ar" class="form-control" placeholder="العنوان بالعربى" required value="{{ old('name_ar') }}">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label> العنوان بالانجليزى </label>
                <div class="form-group">
                  <input type="text" name="name_en" class="form-control" placeholder="العنوان بالانجليزى" required value="{{ old('name_en') }}">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <label class="col-form-label">الصورة</label>
              <input type="file" name="img" class="form-control" required="">
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label> العدد </label>
                <div class="form-group">
                  <input type="number" name="count_num" class="form-control" placeholder="العدد" required value="{{ old('count_num') }}">
                </div>
              </div>
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