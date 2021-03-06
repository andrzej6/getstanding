{{-- */
$sidemenu=array('introduction'=>'Introduction','programme'=>'Event Programme','speakers'=>'Biographies','partners'=>'Partners','venue'=>'Venue','press'=>'Press Release','contact'=>'Contact','pricing'=>'Pricing 2019','book'=>'Book 2019');
/* --}}

@extends('layouts.aw.summit')

@section('header-styles')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/aw/summit17.css">
@endsection

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/summit/2017/{{$key}}"><li class="@if($key==$page) active @elseif(($key=='pricing') or ($key=='book')) pink19 @endif">{{$value}}</li></a>
    @endforeach
@endsection

@section('partnersleft')
    @include('shared.aw.summit.2017.partnersleft')
@endsection

@section('top-content')
    @include('shared.aw.summit.2017.topcontent')
@endsection


@section('partnersright')
    @include('shared.aw.summit.2017.partnersright')
@endsection