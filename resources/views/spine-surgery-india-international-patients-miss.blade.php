@php($title = 'Top Spine Surgery in India for International Patients | CESS')

@section('meta_desc')
    Explore affordable, world-class spine surgery in Mumbai with CESS. Trusted by global patients for robotic, endoscopic, and scoliosis spine treatments.
@endsection

@section('meta_keywords', '')

@section('content')
    <style>
        /* CESS Logo Styling */
        .cess-logo-container {
            text-align: center;
            margin: 20px 0 30px 0;
        }

        .cess-logo {
            max-width: 400px;
            height: auto;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .cess-logo:hover {
            transform: scale(1.05);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .cess-logo {
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .cess-logo {
                max-width: 250px;
            }
        }
    </style>
    @extends('layouts.default')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- start doctor blog with profile -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="blog-profile">
                        <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.webp') }}" alt="">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                        <p class="bold-text">A highly regarded spine surgeon serving Mumbai and nearby areas.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.webp') }}" alt="book btn"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.webp') }}" alt="book btn" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">
                        <div class="sec-blog-design pt-5">
                            <h2>World-Class Spine Surgery in India for International Patients</h2>
                            <div class="cess-logo-container">
                                <img src="{{ asset('resources/assets/images/cess-logo.jpg') }}" alt="Center of Excellence in Spine Surgery (CESS) Logo" class="cess-logo">
                            </div>
                            <p>The <a href="{{ route('about-centre-of-excellence-in-spine-surgery') }}"><strong>Center of
                                        Excellence in Spine Surgery (CESS) in Mumbai</strong></a> is the top destination
                                for international patients seeking safe, advanced, and affordable spine treatments.
                                Known for cutting-edge techniques and exceptional outcomes, CESS is led by some of the
                                <strong>best spine specialists in India</strong>.</p>
                            <img src="{{ asset('resources/assets/img/blog/SPINE-SURGERY-in-india-for-international-patients.webp') }}">
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>Under the leadership of <a href="{{ route('about-doctor') }}"><strong>Dr. Vishal
                                        Kundnani</strong></a>, a globally recognized and fellowship-trained spine
                                surgeon, the team at CESS includes highly experienced spine surgeons, physiotherapists,
                                pain management experts, and rehabilitation specialists.</p>
                            <p>Patients from the US, UK, Middle East, Africa, and Southeast Asia travel to Mumbai to
                                benefit from CESS's expertise in:</p>
                        </div>

                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Minimally Invasive Spine Surgery (MISS)</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Robotic Spine Surgery</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Endoscopic Discectomy</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Cervical and Lumbar Fusion</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Scoliosis Surgery & Spinal Deformity Correction</strong></p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>The MISS team operates out of premier hospitals in Mumbai including <strong>Bombay
                                    Hospital, Lilavati Hospital, and Breach Candy Hospital</strong>. These centers offer
                                international-grade infrastructure and adhere to the highest standards of patient care.
                            </p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>International Patient Support at CESS</h3>
                            <p>What sets the CESS apart is the comprehensive support offered to patients from abroad,
                                including:</p>
                        </div>

                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Visa and Travel Arrangements</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Airport Pickups and Local Transfers</strong></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Language Assistance</strong> for ease of communication</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Personalized Recovery Plans</strong> designed for your needs</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" alt="">
                            <p><strong>Postoperative Rehabilitation and Follow-ups</strong></p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>With up to <strong>70% cost savings</strong> compared to Western countries, and access to
                                <strong>world-class medical expertise</strong>, the Center of Excellence in Spine
                                Surgery (CESS) in Mumbai is one of the most trusted destinations for spine care abroad.
                            </p>
                            <p>Whether you need robotic-assisted spinal fusion, endoscopic disc surgery, or scoliosis
                                treatment, CESS offers <strong>comprehensive, compassionate care</strong> tailored for
                                international patients seeking lasting mobility and relief.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
