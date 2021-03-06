@extends('backend.master')
@section('mainContent')
@php
function showPicName($data){
$name = explode('/', $data);
return $name[3];
}
@endphp
<section class="sms-breadcrumb mb-40 white-box lol">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('lang.user') @lang('lang.profile') @lang('lang.edit')</h1>
            <div class="bc-pages">
                <a href="{{url('admin/dashboard')}}">@lang('lang.dashboard')</a>
                <a href="{{route('admin.customer')}}">@lang('lang.user') @lang('lang.management')</a>
                <a href="#">@lang('lang.user') @lang('lang.profile') @lang('lang.edit')</a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="main-title">
                    <h3 class="mb-30">@lang('lang.user') @lang('lang.profile') @lang('lang.edit')</h3>
                </div>
            </div>
        </div>
        @if(Illuminate\Support\Facades\Config::get('app.app_sync'))
            {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'admin-dashboard', 'method' => 'GET', 'enctype' => 'multipart/form-data']) }}
        @else
            {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => ['admin.profile_update',@$data->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' =>'profile']) }}
        @endif
        <div class="row">
            <div class="col-lg-12">
              <div class="white-box">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-title">
                                <h4>@lang('lang.basic_info')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30">
                        <div class="col-lg-12">
                            <hr>
                        </div>
                    </div>
                    <input type="hidden" name="staff_id" value="{{@$data->id}}"> 
                    <div class="row mb-30">
                        <div class="col-lg-3 mb-30">
                            <div class="input-effect">
                                <input class="primary-input form-control{{ @$errors->has('username') ? ' is-invalid' : '' }}" type="text"  name="username" readonly value="{{ (isset($data->username)) ? $data->username : old('username')  }}">
                                <span class="focus-border"></span>
                                <label>@lang('lang.user') @lang('lang.name') *</label>
                                @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-3 mb-30">
                                    <div class="input-effect">
                                        <input class="primary-input form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="first_name" value="{{ (isset($data->profile->first_name)) ? $data->profile->first_name : old('first_name') }}">
                                        <span class="focus-border"></span>
                                        <label>@lang('lang.first') @lang('lang.name') *</label>
                                        @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-30">
                                    <div class="input-effect">
                                        <input class="primary-input form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" value="{{ (isset($data->profile->last_name)) ? $data->profile->last_name : old('last_name') }}">
                                        <span class="focus-border"></span>
                                        <label>@lang('lang.last') @lang('lang.name') *</label>
                                        @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-30">
                                    <div class="input-effect">
                                        <input class="primary-input form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" type="text"  name="company_name" value=" {{ (isset($data->profile->company_name)) ? @$data->profile->company_name : old('company_name') }} ">
                                        <span class="focus-border"></span>
                                        <label>@lang('lang.company') @lang('lang.name') *</label>
                                        @if ($errors->has('company_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('company_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-30">
                                    <div class="input-effect">
                                        <input class="primary-input form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" name="address" value="{{ (isset($data->profile->address)) ? $data->profile->address : old('address') }} ">
                                        <span class="focus-border"></span>
                                        <label>@lang('lang.address') *</label>
                                        @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="input-effect">
                                <input class="primary-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="@if(isset($data)){{@$data->email}} @endif">
                                <span class="focus-border"></span>
                                <label>@lang('lang.email') *</label>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="no-gutters input-right-icon">
                                <div class="col">
                                    <div class="input-effect">
                                        <input class="primary-input date form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" id="startDate" type="text"
                                        name="date_of_birth" value="{{date('m/d/Y', strtotime(@$data->profile->date_of_birth))}}">
                                        <span class="focus-border"></span>
                                        <label>@lang('lang.Date_of_birth') *</label>
                                        @if ($errors->has('date_of_birth'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="" type="button">
                                        <i class="ti-calendar" id="start-date-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="no-gutters input-right-icon">
                                <div class="col">
                                    <div class="input-effect">
                                        <input class="primary-input date form-control{{ $errors->has('date_of_joining') ? ' is-invalid' : '' }}" id="date_of_joining" type="text"
                                        name="date_of_joining" value="{{date('m/d/Y', strtotime(@$data->profile->date_of_joining))}} ">
                                        <span class="focus-border"></span>
                                        <label>@lang('lang.date_of_joining') *</label>
                                        @if ($errors->has('date_of_joining'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_of_joining') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="" type="button">
                                        <i class="ti-calendar" id="date_of_joining"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="input-effect">
                                <input class="primary-input form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="text" name="mobile" value="{{ isset($data->profile->mobile) ? $data->profile->mobile : old('mobile') }}">
                                <span class="focus-border"></span>
                                <label>@lang('lang.mobile') *</label>
                                @if ($errors->has('mobile'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="input-effect">
                                <select class="niceSelect w-100 bb form-control" name="marital_status">
                                    <option data-display="Marital Status" value="">@lang('lang.marital_status')</option>
                                    
                                    <option value="married" {{@$data->profile->marital_status == "married"? 'selected': old('marital_status')== ("married"? 'selected' : '')}}>@lang('lang.married')</option>
                                    <option value="unmarried" {{@$data->profile->marital_status == "unmarried"? 'selected': old('marital_status')== ("unmarried"? 'selected' : '') }}>@lang('lang.unmarried')</option>
                                    
                                </select>
                                <span class="focus-border"></span>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                                <div class="row no-gutters input-right-icon mb-20">
                                <div class="col">
                                    <div class="input-effect">
                                        <input class="primary-input form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" id="placeholderPhoto" type="text" placeholder="{{@$data->profile->image != ""? showPicName(@$data->profile->image):'Profile Photo (100 * 100 px)'}}"
                                        readonly >
                                        <span class="focus-border"></span>
                                        @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="primary-btn-small-input" type="button">
                                        <label class="primary-btn small fix-gr-bg" for="photo">@lang('lang.browse')</label>
                                        <input type="file" class="d-none form-control" name="image" id="photo">
                                    </button>

                                </div>
                            </div>
                        </div>
                    <br>
                <div class="row mt-40">
                    <div class="col-lg-12 text-center">

                        @if(Illuminate\Support\Facades\Config::get('app.app_sync'))
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Disabled For Demo "> 
                            <button   class="primary-btn small fix-gr-bg  demo_view password_update_btn" type="button" >  @lang('lang.admin') @lang('lang.update')</button>
                            </span>
                        @else
                            <button class="primary-btn fix-gr-bg">
                                <span class="ti-check"></span>
                                @lang('lang.admin') @lang('lang.update')
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
</div>
</section>
@endsection
@section('script')

@endsection
