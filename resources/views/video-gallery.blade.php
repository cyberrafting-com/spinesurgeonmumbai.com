@php($title = 'Video Education Related to Spine Surgery')

@section('meta_desc')
    Watch educational videos on spine surgery by Dr. Vishal Kundnani Spine Surgeon in Mumbai. Learn about procedures and
    treatments for spine health.
@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai')

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Video Gallery - Spine Surgery Education",
      "description": "Collection of educational videos about spine surgery and treatments by Dr. Vishal Kundnani.",
      "url": "https://spinesurgeonmumbai.com/video-gallery.php",
      "about": {
        "@type": "MedicalBusiness",
        "name": "Spine Clinic Mumbai",
        "medicalAudience": "Medical"
      },
      "mainEntity": {
        "@type": "VideoObject",
        "name": "Spine Surgery Educational Videos",
        "description": "Educational videos about spine surgery procedures and treatments",
        "uploadDate": "2024-01-01",
        "thumbnailUrl": "https://spinesurgeonmumbai.com/img/gallery/a1.jpg"
      }
    }
    </script>
@endsection

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
                    <li><a href="#">Video Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="video_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <iframe width="100%" height="500"
                        src="https://www.youtube.com/embed/Ss3Gzyg6sws?si=ZivCLse9I6QrKpos" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@stop
