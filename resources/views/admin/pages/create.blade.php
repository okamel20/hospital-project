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
            {!! Form::open(['url'=>adminUrl('pages'),'files'=>true]) !!}

            <div class="col-lg-12">
              <label> عنوان  الصفحة  عربى</label>
              <input type="text" name="title_ar" class="form-control" placeholder="عنوان  الصفحة  عربى" required value="{{ old('title_ar') }}">
            </div>

            <div class="col-lg-12">
              <label> عنوان  الصفحة   انجليزى</label>
              <input type="text" name="title_en" class="form-control" placeholder="عنوان  الصفحة  انجليزى" required value="{{ old('title_en') }}">
            </div>

            <div class="col-lg-12">
              <label> وصف قصير للصفحة عربى</label>
              <input type="text" name="desc_ar" class="form-control" placeholder="وصف قصير للصفحة عربى" required value="{{ old('desc_ar') }}">
            </div>

            <div class="col-lg-12">
              <label> وصف قصير للصفحة  انجليزى</label>
              <input type="text" name="desc_en" class="form-control" placeholder="وصف قصير للصفحة انجليزى" required value="{{ old('desc_en') }}">
            </div>

            <div class="col-lg-12">
              <label>مكان  الصفحة  </label>
              <select required="" name="type" class="form-control">
                <option value="mnue" style="color: black">المنيو</option>
                <option value="links" style="color: black">روابط هامة</option>
                <option value="footer" style="color: black">اسفل الموقع</option>
              </select>
            </div>

            <div class="col-md-12">
              <label class="col-form-label"> مجتوى  الصفحة بالأعلى </label>
              <textarea class="form-control ckeditor" required="" name="content_ar" rows="10">{{ old('content_ar') }}</textarea>
            </div>

            <div class="col-md-12">
              <label class="col-form-label"> مجتوى  الصفحة بالانجليزى </label>
              <textarea class="form-control ckeditor" required="" name="content_en" rows="10">{{ old('content_en') }}</textarea>
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