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
                    <img src="{{ asset('resources/assets/img/blog/9.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 service_sec">
                    <img src="{{ asset('resources/assets/img/blog/16.jpg') }}" alt="">
                </div>
                <div class="col-lg-12 col-md-12 col-12 pt-5 service_sec">
                    <p>Scoliosis correction surgery in a child with complex spinal deformity of scoliosis due to
                        Neurofibromatosis.
                        Treated at Spine Clinic, Mumbai and scoliosis deformity correction surgery done.</p>
                </div>
            </div>
        </div>
    </section>
@stop
