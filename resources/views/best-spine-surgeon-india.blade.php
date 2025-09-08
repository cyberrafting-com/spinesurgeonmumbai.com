@php($title = 'Best Spine Surgeon in Mumbai, Delhi, Hyderabad, Raipur – Dr. Vishal Kundnani')

@section('meta_desc')
    Searching for the best spine surgeon in Mumbai, India? Dr. Vishal Kundnani offers modern spine surgery with expert care across major cities.
@endsection

@section('meta_keywords',
    'best spine surgeon India, Dr. Vishal Kundnani, spine specialist Mumbai, minimally invasive spine surgery')

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Physician",
        "name": "Dr. Vishal Kundnani",
        "image": "https://spinesurgeonmumbai.com/img/dr-vishal.jpg",
        "description": "Dr. Vishal Kundnani is a leading spine surgeon in India with expertise in robotic and minimally invasive spine surgery. He offers advanced treatment in Mumbai, Delhi, Hyderabad, and Raipur.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Spine Clinic Road",
            "addressLocality": "Mumbai",
            "addressRegion": "Maharashtra",
            "postalCode": "400001",
            "addressCountry": "IN"
        },
        "telephone": "+91-9619100123",
        "url": "https://www.spinesurgeonmumbai.com/best-spine-surgeon-india.php",
        "medicalSpecialty": ["Orthopedic Surgery", "Spine Surgery"]
    }
    </script>
@endsection

@extends('layouts.default')

@section('content')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="blog-profile">
                        <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.jpg') }}" alt="Dr. Vishal Kundnani">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho), FASSI, FNUS, FNAMS</span>
                        <p class="bold-text">Internationally renowned spine surgeon practicing across Mumbai, Delhi, Hyderabad, and Raipur.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="call button"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="book button" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">
                        <h1>Best Spine Surgeon in Mumbai, Delhi, Hyderabad & Raipur – Dr. Vishal Kundnani</h1>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-12">
                                <h2>Meet India's Leading Spine Surgery Expert</h2>
                                <p>Dr. Vishal Kundnani is widely recognized as one of the best spine surgeons in India, providing advanced treatment for spinal disorders using minimally invasive and robotic techniques. He consults across major cities like Mumbai, Delhi, Hyderabad, and Raipur, offering hope and healing to patients with complex spinal issues.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 pt-5 service_sec">
                                <img src="{{ asset('resources/assets/img/blog/best-spine-surgeon-india.jpg') }}" alt="Best Spine Surgeon India">
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Why Choose Dr. Vishal Kundnani?</h3>
                        </div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Trusted spine specialist with 15+ years of experience</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Expert in minimally invasive and robotic spine surgeries</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Consulting across top hospitals in Mumbai, Delhi, Hyderabad & Raipur</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Highly rated by patients and medical peers</p></div>

                        <div class="sec-blog-design pt-5">
                            <h3>Specialized Treatments Offered</h3>
                        </div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Slip Disc / Herniated Disc</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Sciatica & Nerve Compression</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Spinal Deformities & Scoliosis</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Spinal Tumors & Fractures</p></div>

                        <div class="sec-blog-design pt-5">
                            <h3>Top Hospitals Where Dr. Kundnani Consults</h3>
                        </div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Mumbai – Fortis Hospital, Spine Clinic</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Delhi – Apollo Hospitals</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Hyderabad – CARE Hospitals</p></div>
                        <div class="cat-service-inner pt-5"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt=""><p>Raipur – Ramkrishna Care Hospitals</p></div>

                        <div class="sec-blog-design pt-5">
                            <h3>Frequently Asked Questions</h3>
                        </div>
                        <div class="faq">
                            <p><strong>Who is the best spine doctor in Mumbai?</strong><br>Dr. Vishal Kundnani is among the top-rated spine surgeons, known for advanced surgical care and high success rates.</p>
                            <p><strong>Does Dr. Kundnani offer robotic spine surgery?</strong><br>Yes. He is a pioneer in robotic-assisted spine procedures in India.</p>
                            <p><strong>Can I consult him outside Mumbai?</strong><br>Yes. Dr. Kundnani consults in Delhi, Hyderabad, and Raipur apart from Mumbai.</p>
                            <p><strong>Is spine surgery always necessary?</strong><br>No. Surgery is advised only when non-surgical treatments don't relieve symptoms.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>Ready to take the first step towards a pain-free life? Consult with <strong>Dr. Vishal Kundnani</strong> – India's most trusted spine specialist today.</p>
                            <p><strong>Call:</strong> +91-9619100123 | <strong>Visit:</strong> www.spinesurgeonmumbai.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
