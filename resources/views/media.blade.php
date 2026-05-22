@php($title = ' News Articles for Dr. Vishal Kundnani Spine Specialist Mumbai')

@section('meta_desc')Stay updated with the latest news articles about Dr. Vishal Kundnani, Mumbai's top spine
specialist. Expert insights and updates.@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai, Spine Surgery News, Dr. Vishal Kundnani Media, Spine Specialist Mumbai News, Spine Surgery Articles, Spine
    Treatment News, Spine Surgery Research, Spine Surgery Publications, Spine Surgery Media Coverage, Spine Surgery Press
    Releases, Spine Surgery Interviews')


    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Media Coverage - Spine Clinic Mumbai",
      "description": "Latest news, articles, and media coverage featuring Dr. Vishal Kundnani and Spine Clinic Mumbai",
      "url": "https://spinesurgeonmumbai.com/media.php",
      "about": {
        "@type": "MedicalBusiness",
        "name": "Spine Clinic Mumbai",
        "medicalAudience": "Medical"
      },
      "mainEntity": [
        {
          "@type": "NewsArticle",
          "headline": "Minimal Invasive Spine Surgeons of India 2019",
          "datePublished": "2019-01-01",
          "author": {
            "@type": "Person",
            "name": "Dr. Vishal Kundnani"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Spine Clinic Mumbai"
          }
        },
        {
          "@type": "NewsArticle",
          "headline": "Micro Endoscopic Minimal Invasive Spine Surgery",
          "datePublished": "2019-01-01",
          "author": {
            "@type": "Person",
            "name": "Dr. Vishal Kundnani"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Spine Clinic Mumbai"
          }
        }
      ]
    }
    </script>

    @extends('layouts.default')
@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>Media</h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('media') }}">Media</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="gallery-sec-1">
        <div class="container">
            <div class="row">
                <div class="gallery2">
                    <h1>Hindi News</h1>
                </div>
                <div class="cont">
                    <div class="page-head1">
                        <div class="demo-gallery media">
                            <ul id="lightgallery" class="">
                                <li data-responsive="{{ asset('resources/assets/img/media/1.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/1.webp') }}"
                                    data-sub-html="<h4>4th Floor</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/1.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/media/2.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/2.webp') }}" data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/2.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/media/3.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/3.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/3.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/media/4.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/4.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/4.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>


                                <div class="gallery2">
                                    <h1>English News</h1>
                                </div>

                                <li data-responsive="{{ asset('resources/assets/img/media/5.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/5.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/5.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/media/6.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/6.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/6.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/media/7.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/7.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/7.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>

                                <div class="gallery2">
                                    <h1>Other News</h1>
                                </div>

                                <li data-responsive="{{ asset('resources/assets/img/media/8.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/8.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/8.webp') }}">
                                        <div class="demo-gallery-poster">
                                            <img src="{{ asset('resources/assets/img/zoom-icon.webp') }}">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="{{ asset('resources/assets/img/media/9.webp') }}"
                                    data-src="{{ asset('resources/assets/img/media/9.webp') }}"
                                    data-sub-html="<h4>AKD</h4>">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('resources/assets/img/media/9.webp') }}">
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
