{{-- */
$sidemenu=array('index'=>'Event','partners'=>'Partners','downloads'=>'Downloads');
/* --}}

@extends('layouts.oyf')

@section('left-sidemenu')
    @foreach ($sidemenu as $key=>$value)
        <a href="{{ url('/') }}/america/{{$key}}"><li class="@if($key==$page) active @endif">{{$value}}</li></a>
    @endforeach
    <a href="{{ url('/') }}/signup"><li>Register</li></a>
@endsection


@section('partnersleft')
    @include('shared.oyf.us.partnersleft')
    <hr class="light" style="height:0;">
    @include('shared.oyf.us.partnersleft')

    @if($page == 'downloads')
        <hr class="light" style="height:0;">
        @include('shared.oyf.us.partnersleft')
        <hr class="light" style="height:0;">
        @include('shared.oyf.us.partnersleft')
        <hr class="light" style="height:0;">
        @include('shared.oyf.us.partnersleft')
		<hr class="light" style="height:0;">
        @include('shared.oyf.us.partnersleft')
		<hr class="light" style="height:0;">
        @include('shared.oyf.us.partnersleft')
    @endif




@endsection


@section('oyf-slider')

    <div class="span12 module_cont module_layer_slider">
        <div class="module_content slider_type1">
            <div id="banner1" class="OneByOne_container">
			
			 <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/thankyou-us.jpg" alt="" class="go-to-onyourfeet-r go-to">
                </div>
				
				<!--

                <div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/us/slider/oyf18-sally.jpg" alt="" class="go-to-onyourfeet-download-us">
                </div>
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/us/slider/oyf18-amy.jpg" alt="" class="go-to-onyourfeet-r">
                </div>
				
				
				
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/us/slider/oyf18-andy.jpg" alt="" class="go-to-onyourfeet-download-us">
                </div>
				
				
				<div class="oneByOne_item ls_bg1">
                    <img src="{{ url('/') }}/img/oyf/us/slider/oyf18-josh.jpg" alt="" class="go-to-onyourfeet-r">
                </div>

				-->

            </div>
        </div>

    </div>
	
@endsection


@section('aw-restofsmall')
    @include('shared.oyf.us.partnersright')
@endsection
