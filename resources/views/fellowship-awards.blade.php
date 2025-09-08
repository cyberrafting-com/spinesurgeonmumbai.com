@php($title = 'Fellowship Awards Pictures| Dr. Vishal Kundnani Spine Specialist Mumbai')

@section('meta_desc')
    View pictures of Dr. Vishal Kundnani's fellowship awards. Recognizing achievements and expertise in spine care in
    Mumbai.
@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai')

    @extends('layouts.default')

@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>Image <span>Gallery</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Fellowship Awards</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="gallery-sec-1">
        <div class="container">
            <div class="row">
                <div class="cont">
                    <div class="page-head">
                        <div class="demo-gallery">
                            <ul id="lightgallery">
                                <li data-responsive="{{ asset('resources/assets/img/gallery/b/1.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/gallery/b/1.jpg') }}"
                                    data-sub-html="<h4>4th Floor</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/gallery/b/1.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/gallery/b/2.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/gallery/b/2.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/gallery/b/2.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/gallery/b/3.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/gallery/b/3.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/gallery/b/3.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/gallery/b/4.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/gallery/b/4.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/gallery/b/4.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/gallery/b/5.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/gallery/b/5.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/gallery/b/5.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/gallery/b/6.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/gallery/b/6.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/gallery/b/6.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
