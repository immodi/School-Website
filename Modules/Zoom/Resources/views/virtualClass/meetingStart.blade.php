@extends('backEnd.master')
@section('mainContent')
<style>
    .propertiesname{
        text-transform: uppercase;
    }
    </style>
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('zoom::lang.virtual_class') @lang('zoom::lang.room')</h1>
            <div class="bc-pages">
                <a href="{{route('dashboard')}}">@lang('zoom::lang.dashboard')</a>
                <a href="#">@lang('zoom::lang.virtual_class')</a>
                <a href="#">@lang('zoom::lang.room')</a>
            </div>
        </div>
    </div>
</section>

<section class="admin-visitor-area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-30">@lang('zoom::lang.virtual_class') @lang('zoom::lang.room')</h3>
            </div>
            <div class="col-lg-4 text-right col-md-12 mb-20">
                @lang('zoom::lang.topic') : {{ $topic }} & @lang('zoom::lang.password') : {{ $password }}
            </div>
        </div>
        <div class="row">
            <iframe src="{{ $url }}" frameborder="0" style="width: 100%; height:700px"></iframe>
        </div>
    </div>
</section>
@endsection



@section('script')

@stop



