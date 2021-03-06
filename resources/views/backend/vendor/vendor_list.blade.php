@extends('backend.master')
@section('mainContent')

<link rel="stylesheet" href="{{asset('public/backEnd/')}}/approved_deposit.css">
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('lang.author') @lang('lang.list')</h1>
            <div class="bc-pages">
                <a href="{{url('admin/dashboard')}}">@lang('lang.dashboard')</a>
                <a href="#">@lang('lang.author') @lang('lang.list')</a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area DM_table_info">
    <div class="container-fluid p-0">  
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 no-gutters">
                        <div class="main-title sm_mb_20 lm_mb_35">
                            <h3 class="mb-0">@lang('lang.author')</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">                        
                        <table id="table_id" class="display school-table" cellspacing="0" width="100%">
                            <thead>                           
                                <tr>
                                    <th width="10%">@lang('lang.user') @lang('lang.name')</th>
                                    <th width="15%">@lang('lang.email')</th>
                                    {{-- <th width="10%">@lang('lang.status')</th> --}}
                                    <th width="15%">@lang('lang.login') @lang('lang.permission')</th>
                                    <th width="15%">@lang('lang.image')</th>
                                    <th width="15%">@lang('lang.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $value)
                                <tr id="{{ @$value->id}}">
                                    <td>{{@$value->username}}</td>
                                    <td>{{@$value->email}}</td>
                                    {{-- <td>
                                        <label class="switch">
                                            <input type="checkbox" class="switch_status" {{@$value->status == 1? 'checked':''}} value="{{ @$value->status}}">
                                                <span class="slider round"></span>
                                            </label>
                                    </td> --}}
                                    <td>                                                   
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" {{@$value->access_status == 1? 'checked':''}} value="{{ @$value->access_status}}">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td valign="top"><img src="{{ @$value->profile->image ? asset(@$value->profile->image) :asset('public/frontend/img/profile/1.png') }}" class="add_fund_profile_img"></td>
                                    <td>
                                            <div class="row">
                                            <div class="col-sm-6">
            
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                    @lang('lang.select')
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                
                                            
                                                        @if (@$value->role_id == 4)
                                                        <a class="dropdown-item" href="{{ route('admin.vendor_view',@$value->id)}}"> @lang('lang.view')</a>
                                                        @endif
                                                        @if ($value->role_id == 5)
                                                        <a class="dropdown-item" href="{{ route('admin.customer_view',@$value->id)}}"> @lang('lang.view')</a>
                                                        @endif
                                                        <a class="dropdown-item" href="{{ route('admin.vendor_edit',@$value->id)}}"> @lang('lang.edit')</a>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#deleteClassModal{{@$value->id}}"  href="#">@lang('lang.delete')</a>
            
                                                       
            
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        
                                </tr>  

                                <div class="modal fade admin-query" id="deleteClassModal{{@$value->id}}" >
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">@lang('lang.delete') @lang('lang.author')</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
    
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h4>@lang('lang.are_you_sure_to_delete')</h4>
                                                    </div>
    
                                                    <div class="mt-40 d-flex justify-content-between">
                                                        <button type="button" class="primary-btn tr-bg" data-dismiss="modal">@lang('lang.cancel')</button>
                                                          <a href="{{ route('admin.vendorDeleted',@$value->id)}}" class="text-light">
                                                        <button class="primary-btn fix-gr-bg" type="submit">@lang('lang.delete')</button>
                                                         </a>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
    </div>
</section>


@endsection



