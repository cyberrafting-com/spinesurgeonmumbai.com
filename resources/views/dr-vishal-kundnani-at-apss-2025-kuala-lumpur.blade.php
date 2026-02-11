@php($title = 'Dr. Vishal Kundnani Represents India at APSS 2025 Kuala Lumpur | Spine Specialist Mumbai')

@section('meta_desc')Dr. Vishal Kundnani represents India at APSS 2025 in Kuala Lumpur as invited faculty, delivering
plenary lectures on minimally invasive spine surgery and spinal deformity correction.@endsection

@section('meta_keywords',
    'APSS 2025, Asia Pacific Spine Society, Kuala Lumpur, Dr. Vishal Kundnani, Spine Specialist
    Mumbai, Spine Surgeon Mumbai, Minimally Invasive Spine Surgery, Spinal Deformity Correction, Cervical Spine Disorders,
    International Spine Faculty')

@section('content')
    <style>
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sec-blog-design img {
                max-width: 100%;
                height: auto;
            }
        }

        @media (max-width: 480px) {
            .sec-blog-design {
                padding: 15px 0;
            }
        }

        .achievement-section {
            margin: 20px 0;
        }

        .achievement-section h4 {
            color: #2c5aa0;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .highlight-box {
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 20px;
            margin: 30px 0;
            border-radius: 5px;
        }

        .highlight-box h4 {
            color: #007bff;
            margin-bottom: 15px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .quote-section {
            background-color: #e8f4f8;
            padding: 25px;
            margin: 30px 0;
            border-radius: 10px;
            font-style: italic;
            text-align: center;
            border-left: 5px solid #007bff;
        }
    </style>
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
                        <img src="{{ asset('resources/assets/img/blog1.jpg') }}" alt="Dr. Vishal Kundnani">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                        <p class="bold-text">Internationally trained and awarded spine surgeon in Mumbai.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}"
                                alt="Call Now"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}"
                                alt="Book Appointment" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">
                        <div class="sec-blog-design pt-5">
                            <h2>Dr. Vishal Kundnani Represents India at APSS 2025 Kuala Lumpur</h2>

                            <p>Recently had the privilege of attending the <strong>Asia Pacific Spine Society (APSS) Annual
                                    Meeting 2025</strong> in Kuala Lumpur — a prestigious gathering of leading spine
                                surgeons from across the region. This international conference brings together the most
                                accomplished spine specialists to share knowledge, research, and innovations in spine
                                surgery.</p>
                            <img src="{{ asset('resources/assets/img/blog1.jpg') }}" alt="APSS 2025 Kuala Lumpur Conference"
                                class="img-responsive">
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Invited Faculty Recognition</h3>
                            <p>As <strong>invited faculty</strong>, Dr. Vishal Kundnani delivered plenary lectures on
                                advancements in <a href="{{ route('minimal-invasive-spine-surgery') }}"><strong>minimally
                                        invasive spine surgery</strong></a>, <a
                                    href="{{ route('neck-pain') }}"><strong>cervical spine disorders</strong></a>, and
                                <strong>spinal deformity correction</strong>. Being selected as invited faculty represents
                                recognition of expertise and contribution to the field of spine surgery at an international
                                level.
                            </p>
                        </div>

                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/2.jpg') }}"
                                    alt="Dr. Kundnani delivering lecture at APSS 2025">
                            </div>
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/3.jpg') }}"
                                    alt="APSS 2025 Conference presentations">
                            </div>
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/4.jpg') }}"
                                    alt="International spine surgery collaboration">
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Research Presentations and Clinical Impact</h3>
                            <p>Our team's research presentations received widespread appreciation for their clinical impact
                                — a testament to the consistent academic work pursued at our spine centers in Mumbai. The
                                research focused on innovative surgical techniques and patient outcomes in complex spine
                                surgeries.</p>
                        </div>

                        <div class="achievement-section">
                            <div class="sec-blog-design pt-5">
                                <h4>Fellowship Programs and Global Exchange</h4>
                                <p>Dr. Kundnani had the opportunity to moderate sessions on <a
                                        href="https://www.apssonline.org/fellowship.php"><strong>APSS Fellowship
                                            Programs</strong></a>, encouraging global exchange and mentorship. This
                                    initiative promotes knowledge sharing between experienced spine surgeons and the next
                                    generation of specialists, fostering excellence in spine care across the Asia-Pacific
                                    region.</p>
                            </div>
                        </div>

                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/5.jpg') }}"
                                    alt="APSS Fellowship program discussions">
                            </div>
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/6.jpg') }}"
                                    alt="International spine surgery collaboration">
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Leadership Recognition</h3>
                            <p>A deeply meaningful moment was being recognized for contributions as <strong>Chairman of the
                                    APSS Online Education Committee</strong>, as the tenure came to a close. It has been an
                                honour to help expand access to quality spine education across the Asia-Pacific region,
                                making advanced spine surgery knowledge available to surgeons worldwide.</p>
                        </div>

                        <div class="highlight-box">
                            <h4>Key Achievements at APSS 2025</h4>
                            <div class="cat-service-inner pt-3">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Invited Faculty:</strong> Delivered plenary lectures on advanced spine surgery
                                    techniques</p>
                            </div>
                            <div class="cat-service-inner pt-3">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Research Presentations:</strong> Team's clinical research received widespread
                                    appreciation</p>
                            </div>
                            <div class="cat-service-inner pt-3">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Leadership Recognition:</strong> Honored for contributions as Chairman of APSS
                                    Online Education Committee</p>
                            </div>
                            <div class="cat-service-inner pt-3">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Global Impact:</strong> Moderated APSS Fellowship Programs promoting
                                    international collaboration</p>
                            </div>
                        </div>

                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/7.jpg') }}"
                                    alt="Recognition ceremony at APSS 2025">
                            </div>
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/8.jpg') }}"
                                    alt="International spine surgery network">
                            </div>
                            <div class="gallery-item">
                                <img src="{{ asset('resources/assets/img/gallery/f/9.jpg') }}"
                                    alt="APSS 2025 networking and collaboration">
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Topics Covered in Plenary Lectures</h3>
                        </div>

                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Minimally Invasive Spine Surgery:</strong> Latest techniques and innovations in <a
                                    href="{{ route('micro-endoscopic-minimal-invasive-spine-surgery') }}">micro-endoscopic
                                    procedures</a></p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Cervical Spine Disorders:</strong> Advanced treatment approaches for complex neck
                                conditions</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Spinal Deformity Correction:</strong> Innovative techniques for <a
                                    href="{{ route('scoliosis') }}">scoliosis</a> and complex spinal deformities</p>
                        </div>
                        <div class="cat-service-inner pt-5">
                            <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                            <p><strong>Patient Outcomes:</strong> Clinical research on improved surgical results and
                                recovery</p>
                        </div>

                        <div class="quote-section">
                            <p><strong>"Grateful to APSS, my peers, mentors, and team back home for their continued support.
                                    It's an honor to represent India on this international platform and contribute to
                                    advancing spine surgery across the Asia-Pacific region."</strong></p>
                            <p style="margin-top: 15px; font-size: 14px; color: #666;">- Dr. Vishal Kundnani</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>Impact on Indian Spine Surgery</h3>
                            <p>Dr. Kundnani's participation and recognition at APSS 2025 highlights the growing prominence
                                of Indian spine surgeons on the global stage. His contributions to minimally invasive
                                techniques and patient care continue to set new standards in spine surgery, benefiting
                                patients not just in Mumbai but across India and internationally.</p>
                        </div>

                        <div class="gallery-item" style="text-align: center; margin: 30px 0;">
                            <img src="{{ asset('resources/assets/img/gallery/f/10.jpg') }}"
                                alt="APSS 2025 group photo with international spine surgeons"
                                style="max-width: 600px; width: 100%; height: auto;">
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h3>About Asia Pacific Spine Society (APSS)</h3>
                            <p>The Asia Pacific Spine Society is the premier organization for spine professionals in the
                                Asia-Pacific region. It promotes excellence in spine care through education, research, and
                                international collaboration. The annual meeting brings together leading spine surgeons,
                                researchers, and healthcare professionals to share the latest advances in spine surgery and
                                patient care.</p>
                        </div>

                        <div class="highlight-box">
                            <h4>For Advanced Spine Treatment</h4>
                            <p>Dr. Vishal Kundnani brings this international expertise to patients in Mumbai through
                                advanced spine treatments at leading hospitals. Whether you're dealing with <a
                                    href="{{ route('back-pain') }}">back pain</a>, <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}">slip
                                    disc</a>, or complex spinal conditions, our team offers world-class care with the latest
                                minimally invasive techniques.</p>
                            <p style="text-align: center; margin-top: 20px;"><strong>For consultation and advanced spine
                                    treatments, contact our clinic today.</strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
