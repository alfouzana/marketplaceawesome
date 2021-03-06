@extends('backend.master')
@section('mainContent') 
<link rel="stylesheet" href="{{url('Modules/Pages/Assets/css/style.css')}}">  
<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('lang.license')</h1>
            <div class="bc-pages">
                <a href="{{url('admin/dashboard')}}">@lang('lang.dashboard')</a>
                <a href="#">@lang('lang.frontend_CMS') </a>
                <a href="#">@lang('lang.license') @lang('lang.page') </a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        <div class="row"> 
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h3 class="mb-30"> @lang('lang.update')
                                    @lang('lang.license') @lang('lang.page') 
                            </h3>
                        </div>
                        {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'LicensePageUpdate',
                        'method' => 'POST', 'enctype' => 'multipart/form-data']) }} 
                         <input type="hidden" name="id" value="{{isset($editData1)? $editData1->id: ''}}"> 
                        <div class="white-box">
                            <div class="add-visitor">  
                                {{-- HomePage --}}
                                <div class="row mt-40">
                                    <div class="col-lg-12"> 
                                        <div class="input-effect">
                                            <input class="primary-input form-control{{ $errors->has('heading') ? ' is-invalid' : '' }}"
                                                type="text" name="heading" autocomplete="off" value="{{isset($editData1)? $editData1->heading:old('heading')}}">
                                            <label>@lang('lang.heading')-1<span class="text-red">*</span></label>
                                            <span class="focus-border"></span>
                                            @if ($errors->has('heading'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('heading') }}</strong>
                                            </span>
                                            @endif
                                        </div> 
                                    </div> 
                                </div>
                                <div class="row mt-40">
                                    <div class="col-lg-12">
                                        <div class="input-effect">
                                            <textarea class="primary-input form-control" cols="0" rows="4"
                                                        name="heading_text">{{isset($editData1)? @$editData1->heading_text: old('heading_text')}}</textarea>
                                            <label>@lang('lang.heading_text') <span class="text-red">*</span></label>
                                            <span class="focus-border textarea"></span>
                                            @if ($errors->has('heading_text'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('heading_text') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-40">
                                    <div class="col-lg-12"> 
                                        <div class="input-effect">
                                            <input class="primary-input form-control{{ $errors->has('heading2') ? ' is-invalid' : '' }}"
                                                type="text" name="heading2" autocomplete="off" value="{{isset($editData1)? $editData1->heading2:old('heading2')}}">
                                            <label>@lang('lang.heading')-2<span class="text-red">*</span></label>
                                            <span class="focus-border"></span>
                                            @if ($errors->has('heading2'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('heading2') }}</strong>
                                            </span>
                                            @endif
                                        </div> 
                                    </div> 
                                </div>
                                <div class="row mt-40">
                                    <div class="col-lg-12">
                                        <div class="input-effect">
                                            <textarea class="primary-input form-control" cols="0" rows="4"
                                                        name="heading2_text">{{isset($editData1)? @$editData1->heading2_text: old('heading2_text')}}</textarea>
                                            <label>@lang('lang.heading_text') -2 <span class="text-red">*</span></label>
                                            <span class="focus-border textarea"></span>
                                            @if ($errors->has('heading2_text'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('heading2_text') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row mt-40">
                                    <div class="col-lg-12 text-center">
                                      <button class="primary-btn fix-gr-bg" data-toggle="tooltip" title=" test ">
                                            <span class="ti-check"></span>
                                            @if(isset($editData1))
                                                @lang('lang.update')
                                            @else
                                                @lang('lang.save')
                                            @endif 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="admin-visitor-area up_st_admin_visitor mt-40">
    <div class="container-fluid p-0">
        @if(isset($editData))
      
        <div class="row">
            <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                <a href="{{url('pages/license')}}" class="primary-btn small fix-gr-bg">
                    <span class="ti-plus pr-2"></span>
                    @lang('lang.add')
                </a>
            </div>
        </div>
       
        @endif
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h3 class="mb-30">@if(isset($editData))
                                    @lang('lang.edit')
                                @else
                                    @lang('lang.add')
                                @endif
                                @lang('lang.Features')
                            </h3>
                        </div>
                        @if(isset($editData))
                        {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => ['license-feature-update'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                            <input type="hidden" name="id" value="{{ $editData->id }}">
                        @else
                        {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => ['license-feature-store'],
                        'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                        @endif

                        <input type="hidden" name="url" id="url" value="{{URL::to('/')}}">
                        <div class="white-box">
                            <div class="add-visitor">
                                <div class="row"> 

                                    <div class="col-lg-12 mb-20">
                                        <div class="input-effect">
                                            <input class="primary-input form-control{{ $errors->has('feature_title') ? ' is-invalid' : '' }}"
                                            type="text" name="feature_title" autocomplete="off" value="{{isset($editData)? $editData->feature_title : '' }}">
                                            <label>@lang('lang.feature_title') <span>*</span> </label>
                                            <span class="focus-border"></span>
                                            @if ($errors->has('feature_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('feature_title') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-40">
                                        <div class="col-lg-12"> 
                                            <p class="text-uppercase fw-500 mb-10">@lang('lang.regular') @lang('lang.license')  </p>
                                            <div class="d-flex radio-btn-flex ml-40">
                                                <div class="mr-30">
                                                    <input type="radio" name="regular" id="relationFather" value="1" class="common-radio relationButton "{{isset($editData) && $editData->regular == "1"? 'checked': ''}}  {{old('regular') == "1"? 'checked': ''}}>
                                                    <label for="relationFather">@lang('lang.yes')</label>
                                                </div>
                                                <div class="mr-30">
                                                    <input type="radio" name="regular" id="relationMother" value="0" class="common-radio relationButton "{{isset($editData) && $editData->regular == "0"? 'checked': ''}} {{old('regular') == "0"? 'checked': ''}}>
                                                    <label for="relationMother">@lang('lang.no')</label>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                
                                    <div class="row mt-40">
                                        <div class="col-lg-12"> 
                                            <p class="text-uppercase fw-500 mb-10">@lang('lang.extended') @lang('lang.license')  </p>
                                            <div class="d-flex radio-btn-flex ml-40">
                                                <div class="mr-30">
                                                    <input type="radio" name="extended" id="extended_yes" value="1" class="common-radio relationButton "{{isset($editData) && $editData->extended == "1"? 'checked': ''}} {{old('extended') == "1"? 'checked': ''}}>
                                                    <label for="extended_yes">@lang('lang.yes')</label>
                                                </div>
                                                <div class="mr-30">
                                                    <input type="radio" name="extended" id="extended_no" value="0" class="common-radio relationButton" {{isset($editData) && $editData->extended == "0"? 'checked': ''}} {{old('extended') == "0"? 'checked': ''}}>
                                                    <label for="extended_no">@lang('lang.no')</label>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                <div class="row mt-40">
                                    <div class="col-lg-12 text-center">
                                        <button class="primary-btn fix-gr-bg">
                                            <span class="ti-check"></span>
                                            @if(isset($editData))
                                                @lang('lang.update')
                                            @else
                                                @lang('lang.save')
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-4 no-gutters">
                <div class="main-title">
                    <h3 class="mb-0">@lang('lang.total')</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <table id="table_id" class="display school-table" cellspacing="0" width="100%">
                    <thead> 
                        <tr >
                            <th> @lang('lang.sl')</th>
                            <th> @lang('lang.feature_title')</th>
                            <th> @lang('lang.regular')  @lang('lang.license')</th> 
                            <th> @lang('lang.extended')  @lang('lang.license')</th> 
                            <th> @lang('lang.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($data))
                        @php $count=1; @endphp
                        @foreach($data as $value)
                        <tr>
                        <td>{{$count++}}</td>
                            <td>{{@$value->feature_title}}</td> 
                            <td class="text-center">  <span class="text-center {{(@$value->regular==1)? 'ti-check text-success ':'ti-close text-danger' }} "> </span> </td>
                            <td class="text-center">  <span class="text-center {{(@$value->extended==1)? 'ti-check text-success ':'ti-close text-danger' }} "> </span> </td>
                            <td>
                                <div class="row">
                                <div class="col-sm-6">

                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                        @lang('lang.select')
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('license-feature-edit',$value->id)}}"> @lang('lang.edit')</a>
                                   
                                      <a class="dropdown-item" data-toggle="modal" data-target="#deleteCategoryModal{{$value->id}}"  href="#">@lang('lang.delete')</a>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                            </td>
                        </tr>
                                    <div class="modal fade admin-query" id="deleteCategoryModal{{$value->id}}" >
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">@lang('lang.delete') @lang('lang.feature')</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <h4>@lang('lang.are_you_sure_to_delete')</h4>
                                                </div>

                                                <div class="mt-40 d-flex justify-content-between">
                                                    <button type="button" class="primary-btn tr-bg" data-dismiss="modal">@lang('lang.cancel')</button>
                                                      <a href="{{ url('license-feature-delete',$value->id)}}" class="text-light">
                                                    <button class="primary-btn fix-gr-bg" type="submit">@lang('lang.delete')</button>
                                                     </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</div>

    <script src="{{ asset('/')}}public/backEnd/backend_modules.js"></script>

@endsection
