@php($title = '')

@section('meta_desc', '')
@section('meta_keywords', '')

@extends('layouts.default')
@section('content')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- start doctor blog with profile -->
    <section class="sec-service-procedure pt-5">
        <div class="container sec-service-procedure-1">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 pt-5 service_sec">
                    <img src="{{ asset('resources/assets/img/blog/10.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5">
                    <p>Scoliosis patient operated by Dr Vishal Kundnani 12 years ago – now a Judicial Academy pass out in
                        Rajasthan.</p>
                    <div class="cat-service-inner">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p><strong>RJS. Proud to have treated me</strong></p>
                    </div>
                    <div class="cat-service-inner">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p><strong>Siddhartha</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
