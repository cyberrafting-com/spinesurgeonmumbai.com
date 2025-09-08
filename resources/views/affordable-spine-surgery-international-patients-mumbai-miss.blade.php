@php($title = 'Affordable Spine Surgery in Mumbai for International Patients – M.I.S.S')

@section('meta_desc')
    World-class spine surgery for international patients at Mumbai Institute of Spine Surgery. Led by Dr. Vishal Kundnani, offering advanced care at affordable costs.
@endsection

@section('meta_keywords',
    'International Spine Surgery India, Dr. Vishal Kundnani, MISS Mumbai, Best Spine Surgeon India, Robotic Spine Surgery Mumbai, Endoscopic Spine Surgery India, Spine Specialist India, Medical Tourism Spine Mumbai, Affordable Spine Surgery India, Scoliosis Surgery Mumbai')

@section('content')
   
    @extends('layouts.default')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="blog-profile">
                        <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.jpg') }}" alt="Dr. Vishal Kundnani">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                        <p class="bold-text">Internationally trained and awarded spine surgeon in Mumbai.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="Call Now"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="Book Appointment"
                                class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">
                        <div class="sec-blog-design pt-5">
                            <h2>World-Class, Affordable Spine Surgery for International Patients In Mumbai</h2>
                            
                            <p>International patients often choose India as a destination for medical treatments and
                                advanced surgeries due to the reputation of doctors, economic treatment costs, and
                                patient-friendly timelines. India's top spine surgeons offer affordable and quality care
                                across multiple cities.</p>
                            <img src="{{ asset('resources/assets/img/blog/spine-surgery.jpg') }}">
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>Many international patients select the <a
                                    href="{{ route('about-mumbai-institute-of-spine-surgery') }}"
                                    target="_blank"><strong>Mumbai Institute of Spine Surgery (M.I.S.S)</strong></a> for
                                complex spine procedures. The M.I.S.S team is among the most reputed group of spine
                                surgeons in India delivering advanced care at affordable prices.</p>
                        </div>
                        <div class="miss-logo-container">
                                <img src="{{ asset('resources/assets/images/MISS_Logo.jpg') }}" alt="Mumbai Institute of Spine Surgery (MISS) Logo"
                                    class="miss-logo">
                            </div>
                        <div class="sec-blog-design pt-5">
                            <p><strong>Led by <a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a></strong>, a gold
                                medallist and fellowship-trained expert, the M.I.S.S team includes globally acclaimed
                                spine surgeons, pain physicians, physiotherapists, and nurses. Treatments include
                                non-surgical care, minimally invasive surgeries, endoscopic and microscopic spine
                                procedures, cervical spine and <a href="{{ route('scoliosis') }}"
                                    target="_blank">scoliosis surgeries</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>M.I.S.S provides spine surgery at leading hospitals like <strong>Bombay
                                    Hospital</strong>, <strong>Lilavati Hospital</strong>, and <strong>Breach Candy
                                    Hospital</strong>. These facilities are equipped with cutting-edge technology,
                                including robotic-assisted fusion, real-time navigation, and advanced scoliosis
                                correction techniques. Under Dr. Kundnani's leadership, more than 5,000 spine surgeries
                                have been successfully performed.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>The institute offers complete support to international patients, including assistance
                                with medical visas, airport transfers, accommodation, and aftercare. Patients receive
                                private rooms, personalized recovery plans, and round-the-clock guidance from dedicated
                                coordinators and multilingual staff.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Why International Patients Choose M.I.S.S:</h3>
                        </div>

                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Cost Savings:</strong> Spine surgeries in India are 50–70% more affordable
                                compared to the US or Europe.</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Expertise:</strong> Procedures by internationally trained surgeons like Dr.
                                Kundnani, a pioneer in spine surgery in India.</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Advanced Technology:</strong> Robotic and navigation-assisted surgeries,
                                neuromonitoring, and full-endoscopic techniques ensure safety and precision.</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Comprehensive Support:</strong> Full assistance with medical travel,
                                consultations, aftercare, and rehabilitation.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <p>Whether it's a minimally invasive discectomy, scoliosis correction, or a complex spinal
                                reconstruction, <strong>Mumbai Institute of Spine Surgery</strong> offers international
                                patients world-class treatment with compassionate care and premium outcomes.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
