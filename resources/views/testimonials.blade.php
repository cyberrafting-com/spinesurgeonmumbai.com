@php($title = ' Patient Testimonials | Dr. Vishal Kundnani Spine Specialist in Mumbai')

@section('meta_desc')Read testimonials from patients of Dr. Vishal Kundnani, Mumbai's top spine specialist. Success
stories and feedback. @endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai')


    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalWebPage",
      "name": "Patient Testimonials",
      "description": "Read testimonials from patients of Dr. Vishal Kundnani, Mumbai's top spine specialist. Success stories and feedback.",
      "url": "https://spinesurgeonmumbai.com/testimonials.php",
      "about": {
        "@type": "MedicalBusiness",
        "name": "Spine Clinic Mumbai",
        "medicalAudience": "Medical"
      },
      "provider": {
        "@type": "MedicalBusiness",
        "name": "Spine Clinic Mumbai",
        "medicalAudience": "Medical"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "Patient"
        },
        "publisher": {
          "@type": "MedicalBusiness",
          "name": "Spine Clinic Mumbai"
        }
      }
    }
    </script>

    @extends('layouts.default')
@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>Testimonials</h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('testimonials') }}">Happy Moments Smiling patients</a></li>
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
                        <div class="demo-gallery media">
                            <ul id="lightgallery">
                                <li data-responsive="{{ asset('resources/assets/img/review/1.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/1.jpg') }}"
                                    data-sub-html="<h4>4th Floor</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/1.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/2.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/2.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/2.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/3.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/3.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/3.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/4.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/4.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/4.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/5.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/5.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/5.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/6.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/6.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/6.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/7.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/7.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/7.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/8.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/8.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/8.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/9.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/9.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/9.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/10.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/10.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/10.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/11.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/11.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/11.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/12.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/12.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/12.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/13.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/13.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/13.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/14.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/14.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/14.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/15.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/15.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/15.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/16.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/16.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/16.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/17.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/17.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/17.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/18.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/18.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/18.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/19.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/19.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/19.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/20.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/20.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/20.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/21.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/21.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/21.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/22.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/22.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/22.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/23.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/23.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/23.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/24.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/24.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/24.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/25.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/25.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/25.jpg') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/26.jpg') }}"
                                    data-src="{{ asset('resources/assets/img/review/26.jpg') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/26.jpg') }}">
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
