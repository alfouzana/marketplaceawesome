 @extends('backend.master')
@section('mainContent')
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('lang.language_settings')</h1>
            <div class="bc-pages">
                <a href="{{url('admin/dashboard')}}">@lang('lang.dashboard')</a>
                <a href="#">@lang('lang.system_settings')</a>
                <a href="#">@lang('lang.language_settings')</a>
            </div>
        </div>
    </div>
</section>

<section class="admin-visitor-area DM_table_info">
    <div class="container-fluid p-0">
        @if(isset($edit_languages))
        <div class="row">
            <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                <a href="{{url('marks-grade')}}" class="primary-btn small fix-gr-bg">
                    <span class="ti-plus pr-2"></span>
                            @lang('lang.add')
                </a>
            </div>
        </div>
        @endif
        <div class="row">


            <div class="col-lg-12">

                <div class="main-title d-flex justify-content-between align-items-center">
                            <h3 class="mb-30">
                                @lang('lang.language_setup')
                            </h3>
                                <a href="{{url('systemsetting/language-setting')}}" class="primary-btn small fix-gr-bg mb-20">
                                    <span class="ti-plus pr-2"></span>
                                    @lang('lang.add') @lang('lang.language')
                                </a>
                        </div>
                <div class="row">
                    {{-- <div class="col-lg-3 mb-30">
                        <div class="white-box onchangeSearch">
                            <select class="w-100 bb niceSelect form-control {{ $errors->has('module_id') ? ' is-invalid' : '' }}" id="module_id" name="module_id">
                                <option data-display="Select Module *" value="">Select Module *</option>
                                @foreach($modules as $module)
                                    <option value="{{$module->order}}">{{$module->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}


                    <div class="col-lg-12 mt-40">
                        {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'translationTermUpdate', 'method' => 'POST']) }}

                        <input type="hidden" id="url" value="{{url('/')}}">
                        <input type="hidden" id="language_universal" value="{{$language_universal}}" name="language_universal">
                      
                        {{-- <table class="display school-table school-table-style" cellspacing="0" width="100%" id="table_id language_table">
                            <thead>
                                @if(session()->has('message-success-delete') != "" ||
                                session()->get('message-danger-delete') != "" || session()->has('message-success') !="")
                                <tr>
                                    <td colspan="4">
                                        @if(session()->has('message-success-delete'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message-success-delete') }}
                                        </div>
                                        @elseif(session()->has('message-success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message-success') }}
                                        </div>
                                        @elseif(session()->has('message-danger-delete'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('message-danger-delete') }}
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                @endif


                            </thead>
                            <tbody>
                                <tr>
                                    <th>Default Phrases</th>
                                    <th>{{$language_universal}} Phrases</th>
                                </tr>
                                @php $count=1; @endphp
                                @foreach($sms_languages as $row)
                                <tr>
                                    <td>{{$row->en}}</td>
                                    <td>

                                        <div class="input-effect">
                                            <input type="hidden" name="InputId[{{$row->id}}]" value="{{$row->id}}">
                                            <input class="primary-input form-control{{ $errors->has('language_universal') ? ' is-invalid' : '' }}"
                                                type="text" name="LU[{{$row->id}}]" autocomplete="off" value="{{$row->$language_universal}}">


                                            <span class="focus-border"></span>
                                            @if ($errors->has('language_universal'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('language_universal') }}</strong>
                                            </span>
                                            @endif
                                        </div>


                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table> --}}
 <table id="table_id" class="display school-table mt-20" cellspacing="0" width="100%">

                            <thead>

                                <tr>

                                   <th>@lang('lang.default_phrases')</th>
                                    <th>{{$language_universal}} @lang('lang.phrases')</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <th>@lang('lang.default_phrases')</th>
                                    <th>{{$language_universal}} @lang('lang.phrases')</th>
                                </tr>
                                @php $count=1; @endphp
                                @foreach($sms_languages as $row)
                                <tr>
                                    <td class="w-50">{{$row->en}}</td>
                                    <td class="w-50">

                                        <div class="input-effect">
                                            <input type="hidden" name="InputId[{{$row->id}}]" value="{{$row->id}}">
                                            <input class="primary-input form-control{{ $errors->has('language_universal') ? ' is-invalid' : '' }}"
                                                type="text" name="LU[{{$row->id}}]" autocomplete="off" value="{{$row->$language_universal}}">


                                            <span class="focus-border"></span>
                                            @if ($errors->has('language_universal'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('language_universal') }}</strong>
                                            </span>
                                            @endif
                                        </div>


                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <div class="pull-right">
                            <div class="row mt-40">
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn fix-gr-bg">
                                        <span class="ti-check"></span>
                                        @lang('lang.update_language')
                                    </button>
                                </div>
                            </div>
                        </div>


                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
