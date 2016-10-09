@extends('layouts.aw')

@section('favicon')
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/img/aw/favicon.ico">
@endsection


@section('header-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/main.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/popup.css">
@endsection


@section('mainlogo')
    <a href="{{ url('/') }}" class="logo"><img src="{{ url('/') }}/img/aw/logos/main.png" alt=""  width="122" height="43" class="logo_def"></a>
@endsection


@section('before-scripts')
    @include('shared.aw.prefooter')
    @include('shared.aw.footer')
@endsection


@section('footer-scripts')
    <script type="text/javascript" src="{{ url('/') }}/js/aw/track.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/aw/popup.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/aw/main.js"></script>
@endsection