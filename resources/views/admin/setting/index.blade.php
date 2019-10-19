@extends('admin.index')
@section('content')
     <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ $title }}</h4>
                  <p class="card-category">{{ $title }}</p>
                </div>
                <div class="card-body">
                  {!! Form::open(['url'=>route('settingUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان الموقع بالعربى</label>
                          <div class="form-group">
                            <input type="text" name="app_name_ar" class="form-control" placeholder="عنوان الموقع بالعربى" required value="{{ oldOrValue('app_name_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان الموقع بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="app_name_en" class="form-control" placeholder="عنوان الموقع بالانجليزى" required value="{{ oldOrValue('app_name_en',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> البريد الألكترونى </label>
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="البريد الألكترونى " required value="{{ oldOrValue('email',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> الهاتف </label>
                          <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="الهاتف " required value="{{ oldOrValue('phone',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>الكلمة الأفتتاحية بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_home_text_ar">{{ oldOrValue('about_home_text_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>الكلمة الأفتتاحية بالعربى</label>
                          <div class="form-group">
                            <textarea class="form-control" required="" rows="5" name="about_home_text_en">{{ oldOrValue('about_home_text_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> العنوان بالعربى  </label>
                          <div class="form-group">
                            <input type="text" name="address_ar" class="form-control" placeholder="العنوان بالعربى  " required value="{{ oldOrValue('address_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> العنوان بالانجليزى </label>
                          <div class="form-group">
                            <input type="text" name="address_en" class="form-control" placeholder="العنوان بالانجليزى " required value="{{ oldOrValue('address_en',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> رابط التطبيق الأندرويد</label>
                          <div class="form-group">
                            <input type="text" name="app_android" class="form-control" placeholder="رابط التطبيق الأندرويد" required value="{{ oldOrValue('app_android',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> رابط التطبيق ios</label>
                          <div class="form-group">
                            <input type="text" name="app_ios" class="form-control" placeholder="رابط التطبيق ios" required value="{{ oldOrValue('app_ios',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>حقوق الموقع عربى</label>
                          <div class="form-group">
                            <textarea class="form-control ckeditor" required="" rows="5" name="copy_rights_ar">{{ oldOrValue('copy_rights_ar',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>حقوق الموقع انجليزى</label>
                          <div class="form-group">
                            <textarea class="form-control ckeditor" required="" rows="5" name="copy_rights_en">{{ oldOrValue('copy_rights_en',$data) }}</textarea>
                          </div>
                        </div>
                      </div>

                    <button type="submit" class="btn btn-primary pull-right">{{ trans('admin.send') }}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                @if(isset($data->app_logo) && $data->app_logo != null)
                <div class="card-avatar">
                  <a href="#">
                    <img class="img" src="{{ Storage::url($data->app_logo) }}" />
                  </a>
                </div>
                @endif
                <div class="card-body">
                  {!! Form::open(['url'=>route('settingUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}
                      <div class="col-md-12">
                          <label >{{trans('admin.app_logo')}}</label>
                            <input name="app_logo" type="file" required="" class="form-control" accept="image/x-png,image/gif,image/jpeg">
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary pull-right">{{ trans('admin.send') }}</button>
                  </form>
                </div>
              </div>
              <div class="clearfix"></div>
              <br>
              <div class="card card-profile">
                @if(isset($data->about_home_img) && $data->app_logo != null)
                <div class="card-avatar">
                  <a href="#">
                    <img class="img" src="{{ Storage::url($data->about_home_img) }}" />
                  </a>
                </div>
                @endif
                <div class="card-body">
                  {!! Form::open(['url'=>route('settingUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}
                      <div class="col-md-12">
                          <label >الصورة الأفتتاحية</label>
                            <input name="about_home_img" type="file" required="" class="form-control" accept="image/x-png,image/gif,image/jpeg">
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary pull-right">{{ trans('admin.send') }}</button>
                  </form>
                </div>
              </div>
            </div>

            
          </div>
        </div>
  @section('script')
   <script src="{{ url('/public/admin/plugins/ckeditor/') }}/ckeditor.js"></script>
  @endsection
@endsection