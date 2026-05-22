@php($title = 'Dr. Vishal Kundnani Image Gallery | Explore More Photos')

@section('meta_desc')
    Explore Dr. Vishal Kundnani's image gallery. See photos of his work, achievements, and patient care in Mumbai.
@endsection

@section('meta_keywords',
    'Spine Surgery Images, Spine Treatment Photos, Dr. Vishal Kundnani, Spine Specialist Mumbai,
    Spine Surgeon Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai,
    Spine Surgery Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease
    Treatment Mumbai')

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Image Gallery - Spine Surgery",
  "description": "Collection of images showing spine surgery procedures and treatments at Spine Clinic Mumbai.",
  "url": "https://spinesurgeonmumbai.com/image-gallery.php",
  "about": {
    "@type": "MedicalBusiness",
    "name": "Spine Clinic Mumbai",
    "medicalAudience": "Medical"
  },
  "mainEntity": {
    "@type": "ImageGallery",
    "name": "Spine Surgery Image Gallery",
    "description": "Images of spine surgery procedures and treatments",
    "datePublished": "2024-01-01",
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
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <section class="gallery_inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="{{ route('happy-moments-smiling-patients') }}"><img
                                src="{{ asset('resources/assets/img/gallery/a1.webp') }}">
                            <h1>Happy Moments</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="{{ route('fellowship-awards') }}"><img
                                src="{{ asset('resources/assets/img/gallery/b1.webp') }}">
                            <h1>Fellowship Awards</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="{{ route('photographs') }}"><img src="{{ asset('resources/assets/img/gallery/d1.webp') }}">
                            <h1>Photographs</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="{{ route('mumbai-institute-of-spine-surgery') }}"><img
                                src="{{ asset('resources/assets/img/gallery/c1.webp') }}">
                            <h1>Mumbai Institute of Spine Surgery</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="{{ route('minimal-invasive-spine-surgeons-of-india-2019-chandigarh') }}"><img
                                src="{{ asset('resources/assets/img/gallery/e1.webp') }}">
                            <h1>Minimal invasive spine surgeons of India, 2019 – Chandigarh</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="#"><img src="{{ asset('resources/assets/img/gallery/f1.webp') }}">
                            <h1>Executive Team of Minimal Invasive Spine Surgeons of India</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery">
                        <a href="#"><img src="{{ asset('resources/assets/img/gallery/g1.webp') }}">
                            <h1>Wiroc – western india regional conference 2019 Mumbai</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
