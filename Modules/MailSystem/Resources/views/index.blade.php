@extends('mailsystem::layouts.master')

@section('content')
    <h1>@lang('lang.hello_world')</h1>

    <p>
        @lang('lang.this_view_is_loaded_from_module'): {!! config('mailsystem.name') !!}
    </p>
@stop
