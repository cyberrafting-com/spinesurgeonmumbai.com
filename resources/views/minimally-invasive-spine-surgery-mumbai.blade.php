@php($title = 'Minimally Invasive Spine Surgery in Mumbai | Dr. Vishal Kundnani')

@section('meta_desc')
    Looking for safe, advanced spine surgery in Mumbai? Dr. Vishal Kundnani offers minimally invasive and robotic spine surgery with faster recovery and expert care.
@endsection

@section('meta_keywords',
    'minimally invasive spine surgery, robotic spine surgery, Dr. Vishal Kundnani, slip disc treatment, best spine surgeon Mumbai')

@section('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "MedicalClinic",
"name": "Dr. Vishal Kundnani - Spine Surgeon",
"image": "https://spinesurgeonmumbai.com/img/dr-vishal.jpg",
"description": "Dr. Vishal Kundnani is a leading spine surgeon in Mumbai offering minimally invasive and robotic spine surgeries for slip disc, sciatica, and more.",
"address": {
"@type": "PostalAddress",
"streetAddress": "123 Spine Clinic Road",
"addressLocality": "Mumbai",
"addressRegion": "Maharashtra",
"postalCode": "400001",
"addressCountry": "IN"
},
"telephone": "+91-9619100123",
"url": "https://spinesurgeonmumbai.com/minimally-invasive-spine-surgery-mumbai",
"medicalSpecialty": "Orthopedic, Spine Surgery, Robotic Spine Surgery"
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
                        <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.jpg') }}" alt="">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                        <p class="bold-text">A highly regarded spine surgeon serving Mumbai and nearby areas.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="call button"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="book button" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">
                        <h1>Minimally Invasive Spine Surgery in Mumbai – Safe, Effective & Modern</h1>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-12">
                                <h2>What is Minimally Invasive Spine Surgery?</h2>
                                <p>Minimally Invasive Spine Surgery (MISS) uses small incisions and advanced technology to treat spinal conditions with less pain and quicker recovery. Dr. Vishal Kundnani offers this cutting-edge procedure for patients in Mumbai.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 pt-5 service_sec">
                                <img src="{{ asset('resources/assets/img/blog/minimally-invasive-spine-surgery-mumbai.jpeg') }}" alt="spine surgery image">
                            </div>
                        </div>
                        <div class="sec-blog-design pt-5">
                            <h3>Conditions Treated by Dr. Kundnani</h3>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Slip Disc / Herniated Disc</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Sciatica</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Spinal Stenosis</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Scoliosis & Spine Deformities</strong></p>
                        </div>
                        <div class="sec-blog-design pt-5">
                            <h3>Advantages of Minimally Invasive Spine Surgery</h3>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p>Less tissue damage and pain</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p>Faster recovery and less post-operative pain</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p>Reduced blood loss and lower risk of complications</p>
                        </div>
                        <div class="sec-blog-design pt-5">
                            <h3>Why Patients Prefer Dr. Vishal Kundnani</h3>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p>15+ years of experience in spine surgery</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p>Specialist in endoscopic and robotic spine surgery</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p>Consults at top hospitals across India</p>
                        </div>
                        <div class="sec-blog-design pt-5">
                            <h3>Frequently Asked Questions</h3>
                        </div>
                        <div class="faq">
                            <p><strong>Is minimally invasive spine surgery painful?</strong><br>It is performed under anesthesia and is less painful compared to open surgery.</p>
                            <p><strong>How soon can I return to normal activity?</strong><br>Most patients return to light activity within 2–4 weeks after surgery.</p>
                            <p><strong>Is robotic surgery safer?</strong><br>Yes. It provides greater precision and reduces the chance of complications.</p>
                            <p><strong>Do I need physiotherapy afterward?</strong><br>Some mild physiotherapy is often advised post-surgery.</p>
                        </div>
                        <div class="sec-blog-design pt-5">
                            <p>To learn more or to book a consultation, contact <strong>Dr. Vishal Kundnani</strong> today. Experience safe, advanced spinal care in Mumbai.</p>
                            <p><strong>Call:</strong> +91-9619100123 | <strong>Visit:</strong> www.spinesurgeonmumbai.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
