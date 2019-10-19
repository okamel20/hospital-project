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
              {!! Form::open(['url'=>adminUrl('offers/'.$data->id),'method'=>'put','files'=>true]) !!}


              <div class="col-lg-12">
                <label> عنوان العرض بالعربى </label>
                <input type="text" name="title_ar" class="form-control" placeholder="عنوان العرض بالعربى" required value="{{ oldOrValue('title_ar',$data) }}">
              </div>
              <div class="col-lg-12">
                <label> عنوان العرض  انجليزى </label>
                <input type="text" name="title_en" class="form-control" placeholder="عنوان العرض  انجليزى" required value="{{ oldOrValue('title_en',$data) }}">
              </div>

              <div class="col-lg-12">
                <label>الصورة</label>
                <br>
                <img src="{{ Storage::url($data['img']) }}">
                <br>
                <input type="file" name="img" class="form-control" placeholder="الصورة" >
              </div>

              <div class="col-md-12">
                <label class="col-form-label "> مجتوى العرض بالعربى</label>
                <textarea class="form-control ckeditor" required="" name="desc_ar" rows="10">{{ oldOrValue('desc_ar',$data) }}</textarea>
              </div>

              <div class="col-md-12">
                <label class="col-form-label"> محتوى العرض بالانجليزى </label>
                <textarea class="form-control ckeditor" required="" name="desc_en" rows="10">{{ oldOrValue('desc_en',$data) }}</textarea>
              </div>

              <div class="col-lg-12">
                <label> عالخصم </label>
                <input type="number" name="sale" class="form-control" required value="{{ oldOrValue('sale',$data) }}">
              </div>
                
                <div class="col-lg-12 ">
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