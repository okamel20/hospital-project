@extends('admin.index')
@section('content')
     <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ $title }}</h4>
                  <p class="card-category">{{ $title }}</p>
                </div>
                <div class="card-body">
                  {!! Form::open(['url'=>route('settingUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان القسم عربى</label>
                          <div class="form-group">
                            <input type="text" name="about_title_ar" class="form-control" required value="{{ oldOrValue('about_title_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان القسم بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="about_title_en" class="form-control"  required value="{{ oldOrValue('about_title_en',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> وصف قصير لـ  القسم عربى</label>
                          <div class="form-group">
                            <input type="text" name="about_desc_ar" class="form-control"  required value="{{ oldOrValue('about_desc_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> وصف قصير لـ  القسم بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="about_desc_en" class="form-control"  required value="{{ oldOrValue('about_desc_en',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>برجراف رئيسيى بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_p1_ar">{{ oldOrValue('about_p1_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>برجراف رئيسيى بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_p1_en">{{ oldOrValue('about_p1_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>برجراف فرعى 1 بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_p2_ar">{{ oldOrValue('about_p2_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>برجراف فرعى 1 بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_p2_en">{{ oldOrValue('about_p2_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>برجراف فرعى 2 بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_p3_ar">{{ oldOrValue('about_p2_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>برجراف فرعى 2 بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_p3_en">{{ oldOrValue('about_p2_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>


                      <div class="form-group col-lg-12 ">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary  @if($data->section_about_show_home == 'yes') btn btn-primary active @endif">
                            <input type="radio" name="section_about_show_home" id="option2" value="yes" autocomplete="off"@if($data->section_about_show_home == 1) checked="" @endif> ظاهر فى الرئيسية
                          </label>
                          <label class="btn btn-secondary @if($data->section_about_show_home == 'no') btn btn-primary active @endif">
                            <input type="radio" name="section_about_show_home" id="option1" value="no" autocomplete="off" @if($data->section_about_show_home == 0) checked="" @endif> غير ظاهر فى الرئيسية
                          </label>
                        </div>
                      </div>

                      

                    <button type="submit" class="btn btn-primary pull-right">{{ trans('admin.send') }}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  @section('script')
   
  @endsection
@endsection