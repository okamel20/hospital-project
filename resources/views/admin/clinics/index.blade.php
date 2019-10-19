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
                  {!! Form::open(['url'=>route('clinicsUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان الصفحة عربى</label>
                          <div class="form-group">
                            <input type="text" name="title_ar" class="form-control" required value="{{ oldOrValue('title_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان الصفحة بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="title_en" class="form-control"  required value="{{ oldOrValue('title_en',$data) }}">
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> وصف قصير لـ  الصفحة عربى</label>
                          <div class="form-group">
                            <input type="text" name="desc_ar" class="form-control"  required value="{{ oldOrValue('desc_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> وصف قصير لـ  الصفحة بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="desc_en" class="form-control"  required value="{{ oldOrValue('desc_en',$data) }}">
                          </div>
                        </div>
                      </div>
                    <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">عنوان البرجراف 1 عربى</label>
                            <div class="form-group">
                              <input type="text" name="p1_title_ar" class="form-control" required value="{{ oldOrValue('p1_title_ar',$data) }}">
                            </div>
                          </div>
                        </div>

                         <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">عنوان البرجراف 1 انجليزى</label>
                            <div class="form-group">
                              <input type="text" name="p1_title_en" class="form-control"  required value="{{ oldOrValue('p1_title_en',$data) }}">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>محتوى البرجراف 1 عربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="p1_content_ar">{{ oldOrValue('p1_content_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>محتوى البرجراف 1 انجليزى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="p1_content_en">{{ oldOrValue('p1_content_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12">
                        <label> صورة الرجراف 1 </label>
                        <img src="{{ Storage::url($data->p1_img) }}" class="img-responsive clearfix" width="100px" height="100px">
                        <br>
                        <input type="file" name="p1_img" class="form-control"  accept="image/x-png,image/gif,image/jpeg">
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">عنوان البرجراف 2 عربى</label>
                            <div class="form-group">
                              <input type="text" name="p2_title_ar" class="form-control" required value="{{ oldOrValue('p2_title_ar',$data) }}">
                            </div>
                          </div>
                        </div>

                         <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">عنوان البرجراف 2 انجليزى</label>
                            <div class="form-group">
                              <input type="text" name="p2_title_en" class="form-control"  required value="{{ oldOrValue('p2_title_en',$data) }}">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>محتوى البرجراف 2 عربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="p2_content_ar">{{ oldOrValue('p2_content_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>محتوى البرجراف 2 انجليزى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="p2_content_en">{{ oldOrValue('p2_content_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12">
                        <label> صورة الرجراف 2 </label>
                        <img src="{{ Storage::url($data->p2_img) }}" class="img-responsive clearfix" width="100px" height="100px">
                        <br>
                        <input type="file" name="p2_img" class="form-control"  accept="image/x-png,image/gif,image/jpeg">
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">عنوان البرجراف 3 عربى</label>
                            <div class="form-group">
                              <input type="text" name="p3_title_ar" class="form-control" required value="{{ oldOrValue('p3_title_ar',$data) }}">
                            </div>
                          </div>
                        </div>

                         <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">عنوان البرجراف 3 انجليزى</label>
                            <div class="form-group">
                              <input type="text" name="p3_title_en" class="form-control"  required value="{{ oldOrValue('p3_title_en',$data) }}">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>محتوى البرجراف 3 عربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="p3_content_ar">{{ oldOrValue('p3_content_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>محتوى البرجراف 3 انجليزى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="p3_content_en">{{ oldOrValue('p3_content_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12">
                        <label> صورة الرجراف 3 </label>
                        <img src="{{ Storage::url($data->p3_img) }}" class="img-responsive clearfix" width="100px" height="100px">
                        <br>
                        <input type="file" name="p3_img" class="form-control"  accept="image/x-png,image/gif,image/jpeg">
                      </div>

                      <div class="form-group col-lg-12 ">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary  @if($data->active == '1') btn btn-primary active @endif">
                            <input type="radio" name="active" id="option2" value="1" autocomplete="off"@if($data->active == 1) checked="" @endif> مفعل
                          </label>
                          <label class="btn btn-secondary @if($data->active == '0') btn btn-primary active @endif">
                            <input type="radio" name="active" id="option1" value="0" autocomplete="off" @if($data->active == 0) checked="" @endif> غير مفعل
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