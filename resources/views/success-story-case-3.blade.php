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
                    <img src="{{ asset('resources/assets/img/blog/8.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 service_sec">
                    <p>Complex Early onset SCOLIOSIS in a 5 year old girl.
                        Dr Vishal kundnani performed Growth Rod and scoliosis correction surgery for Early Onset scoliosis
                        Correcting spinal deformity at SPINE CLINIC MUMBAI.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
