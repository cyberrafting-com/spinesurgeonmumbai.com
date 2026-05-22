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
                                <li data-responsive="{{ asset('resources/assets/img/review/1.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/1.webp') }}"
                                    data-sub-html="<h4>4th Floor</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/1.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/2.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/2.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/2.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/3.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/3.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/3.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/4.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/4.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/4.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/5.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/5.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/5.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/6.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/6.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/6.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/7.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/7.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/7.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/8.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/8.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/8.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/9.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/9.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/review/9.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/10.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/10.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/10.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/11.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/11.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/11.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/12.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/12.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/12.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/13.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/13.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/13.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/14.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/14.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/14.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/15.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/15.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/15.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/16.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/16.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/16.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/17.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/17.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/17.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/18.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/18.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/18.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/19.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/19.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/19.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/20.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/20.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/20.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/21.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/21.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/21.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/22.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/22.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/22.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/23.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/23.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/23.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/24.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/24.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/24.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/25.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/25.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/25.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/review/26.webp') }}"
                                    data-src="{{ asset('resources/assets/img/review/26.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('resources/assets/img/review/26.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
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
