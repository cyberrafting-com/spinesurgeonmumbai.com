@php($title = 'Minimal Invasive Spine Surgery in Mumbai by Dr. Vishal Kundnani')

@section('meta_desc')Discover minimal invasive spine surgery with Dr. Vishal Kundnani Spine Surgeon in
Mumbai. Advanced treatments for spine issues in Mumbai.@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon Mumbai, Spine Clinic Mumbai,
    Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery Specialist Mumbai, Top Spine
    Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment Mumbai')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalWebPage",
        "name": "Micro Endoscopic Spine Surgery in Mumbai by Dr. Vishal Kundnani",
        "description": "Expert micro endoscopic spine surgery with Dr. Vishal Kundnani Spine Specialist Mumbai. Advanced endoscopic techniques for precise and effective spine treatment.",
        "url": "https://www.spinesurgeonmumbai.com/micro-endoscopic-minimal-invasive-spine-surgery.blade.php",
        "mainEntity": {
            "@type": "MedicalProcedure",
            "name": "Micro Endoscopic Spine Surgery",
            "description": "A highly advanced surgical technique that uses a tiny camera and specialized instruments to perform spine surgery through minimal incisions",
            "possibleTreatment": {
                "@type": "MedicalTherapy",
                "name": "Micro Endoscopic Spine Surgery",
                "description": "Advanced endoscopic surgical techniques for treating various spine conditions with minimal tissue damage and faster recovery"
            }
        },
        "provider": {
            "@type": "MedicalOrganization",
            "name": "Mumbai Institute of Spine Surgery",
            "url": "https://www.spinesurgeonmumbai.com"
        },
        "medicalAudience": {
            "@type": "MedicalAudience",
            "audienceType": "Patient"
        }
    }
</script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is micro endoscopic spine surgery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Micro endoscopic spine surgery is a highly advanced surgical technique that uses a tiny camera (endoscope) and specialized instruments to perform spine surgery through minimal incisions. It provides magnified visualization of the surgical area for precise treatment."
            }
        }, {
            "@type": "Question",
            "name": "What are the advantages of micro endoscopic surgery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Advantages include smaller incisions, less blood loss, reduced muscle damage, better visualization of the surgical area, faster recovery, shorter hospital stay, and less post-operative pain compared to traditional open surgery."
            }
        }, {
            "@type": "Question",
            "name": "What conditions can be treated with micro endoscopic surgery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Conditions treatable with micro endoscopic surgery include herniated discs, spinal stenosis, foraminal stenosis, and certain cases of degenerative disc disease. The technique is particularly effective for nerve decompression procedures."
            }
        }, {
            "@type": "Question",
            "name": "How does recovery compare to traditional spine surgery?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Recovery is typically faster than traditional surgery, with patients often walking the same day, shorter hospital stays, and quicker return to daily activities. However, full recovery still requires following post-operative care instructions and rehabilitation."
            }
        }]
    }
</script>
    @extends('layouts.default')
@section('content')

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>WHAT <span>WE DO</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('minimal-invasive-spine-surgery') }}">Minimal Invasive Spine Surgery –
                            General</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('minimal-invasive-spine-surgery') }}" class="language-btn {{ request()->is('minimal-invasive-spine-surgery') && !request()->is('minimal-invasive-spine-surgery-*') ? 'active' : '' }}">
                                        ENGLISH
                                    </a>
                                    {{-- <a href="{{ route('minimal-invasive-spine-surgery-h') }}" class="language-btn {{ request()->is('minimal-invasive-spine-surgery-h') ? 'active' : '' }}">
                                        HINDI
                                    </a> --}}
                                    <a href="{{ route('minimal-invasive-spine-surgery-m') }}" class="language-btn {{ request()->is('minimal-invasive-spine-surgery-m') ? 'active' : '' }}">
                                        MARATHI
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="drtoafndrb col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">

            <div class="row">
                <div class="cliclskil1 mt-3">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h2>Minimal Invasive spine surgery</h2>
                        <div class="ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/minimally-invasive-spine-surgery.jpg') }}"
                                alt="Minimally invasive spine surgery in Mumbai by Dr. Vishal Kundnani"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <h1>Minimal Invasive spine surgery in Mumbai</h1>
                        <p class="mt-1"><b>Minimal Invasive Spine surgery</b> or <b>Key Hole Spine surgery</b> also
                            referred
                            to
                            as Microscopic Spine Surgery or Endoscopic Spine Surgery is the gold standard in
                            decompression surgery for various common problems in the Spine. Minimal Invasive Spine
                            surgery or Microscopic Spine Surgery or <a
                                href="{{route('micro-endoscopic-minimal-invasive-spine-surgery')}}">Endoscopic Spine Surgery</a> involves performing Spine surgery with the
                            help of modern instruments and cameras inserted into the human body through very small
                            incisions. Minimal Invasive Spine surgery increase safety of Spine surgery and results in
                            less surgical pain, less post-operative pain, less blood loss, less chance of infection with
                            early return to work with no need of post-surgery bed rest.</p>
                        <p>Minimal Invasive Spine Surgery or Key Hole Spine surgery also referred to as Microscopic
                            Spine Surgery or Endoscopic Spine surgery is performed for patients who have <a
                                href="{{route('back-pain')}}">Back Pain</a> or Leg pain and numbness due to Slip Disc, Herniated
                            Disc, Spinal Stenosis, Lumbar Spine Stenosis, Spondylolisthesis or spinal trauma, spinal
                            tuberculosis, fracture Spine or scoliosis and kyphosis in Spine.</p>
                        <div class="container ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/open-minimal-invasive-spine-surgery.jpg') }}"
                                alt="Minimally invasive spine surgery in Mumbai by Dr. Vishal Kundnani"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <p>Minimal Invasive Spine Surgery is performed at Best Spine centers in Mumbai – Spine Clinic
                            Mumbai Bombay Hospital, Spine Clinic Goregaon and also in other parts of city and country.
                            Dr. Vishal Kundnani is the Best Spine Surgeon in Mumbai and specialized in Minimally
                            Invasive Spine Surgery and Endoscopic Spine Surgery. Dr. Vishal Kundnani is a pioneer in
                            Minimal Invasive Spine surgery and has performed more than 5000 minimal invasive Spine
                            surgeons in India. He was conferred as the best Spine doctor award in 2018 by ESA inc USA.
                        </p>
                        <p>Minimal Invasive Surgery involves performing decompression and instrumentation Surgery with
                            smaller incisions so as to reduce pain and blood loss associated with open Surgery. The
                            benefits of minimally invasive Spine Surgery are plenty and especially useful when Minimal
                            Invasive Microscopic or Endoscopic Spine Surgery is performed for Slip Disc, Herniated Disc,
                            Spinal Stenosis, Lumbar Spine Stenosis, Spondylolisthesis or Spinal Trauma, Spinal
                            Tuberculosis, Fracture Spine or Scoliosis and Kyphosis in the Spine.</p>
                        <p>Dr. Vishal Kundnani is <a href="{{route('home')}}">one of Mumbai's most experienced spine
                                surgeons</a> in minimally invasive techniques, having performed over 5000 successful
                            surgeries.</p>
                        <div class="col-lg-6 mt-2">
                            <img class="serv_img1" src="{{ asset('resources/assets/img/capture15.png') }}">
                        </div>
                        <div class="col-lg-6 mt-2">
                            <img class="serv_img1" src="{{ asset('resources/assets/img/capture16.png') }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="cliclskil1 mt-2">
                            <h2>Type of Minimal Invasive Spine Surgery</h2>
                            <p class="mt-1"><b>Endoscopic Spine Surgery</b></p>
                            <p>Endoscopic surgery is a kind of Minimal Invasive Spine Surgery which involves operating
                                with the help of endoscopic camera inserted in the human body through small incisions to
                                capture live video and the surgery is performed with a relay of video visualizations
                                from the camera source. The benefits of endoscopic spine surgery are that the incision
                                size is very small and most of the patients can be discharged the same day of surgery.
                                Endoscopic surgery is commonly and routinely performed for cases of slip disc, spinal
                                stenosis, and spinal biopsy. However, the instrumentation is not commonly amenable
                                through this technique.</p>
                            <p><b>Microscopic Spine Surgery – Microendoscopic spine surgery</b></p>
                            <div class="row">
                                <div class="col-lg-8">
                                    <p>Microscopic Spine Surgery or Microendoscopic Spine Surgery is the most recent,
                                        advanced and safest way of spine surgery and involves surgery under guidance of
                                        microscope with the help of special tubular/cylindrical retractor instruments
                                        which enhance the safety due to better magnified 3 dimensional visualization
                                        obtained due to microscopic assistance.</p>
                                    <p>Micro endoscopic spine surgery is performed successfully for SLIP DISC, HERNIATED
                                        DISC, SPINAL STENOSIS, LUMBAR SPINE STENOSIS, SPONDYLOLISTHESIS or spinal
                                        trauma, spinal tuberculosis, fracture spine or scoliosis and kyphosis in the
                                        spine.</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="serv_img1" src="{{ asset('resources/assets/img/capture17.png') }}">
                                </div>
                            </div>
                            <p><b>Advantages</b></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Smaller
                                            incisions < 2 cms </li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Less
                                            blood loss</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No
                                            post operation pain</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Better
                                            cosmesis</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Shorter
                                            hospitalisation</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Early
                                            recovery and return to work</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No
                                            need of bed rest after surgery</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Less
                                            infection rates</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No
                                            long term morbidity</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <img class="serv_img1" src="{{ asset('resources/assets/img/capture18.png') }}">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-6">
                                    <p><b>Limitations</b></p>
                                    <ul>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Limited
                                            applicability not suited for cases like high grade spondylolisthesis, severe
                                            stenosis, multilevel pathology etc.</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Resource
                                            Intensive and costly.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <p><b>Post Operative Protocol</b></p>
                                    <ul>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Day
                                            0- surgery</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Day
                                            1 post op Mobilization out of bed</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                alt="pic"
                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Day
                                            2 Post op – Discharge with rehabilitation and physiotherapy program + 'do's
                                            and Dont's</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <h3>Cost of Minimal Invasive Spine Surgery</h3>
                            <div class="bordered-section">
                                <p>Understanding the <strong>cost of minimal invasive spine surgery</strong> is
                                    essential for patients planning their treatment journey. The pricing can vary
                                    significantly based on factors such as the complexity of the procedure, hospital
                                    facilities, surgeon expertise, location, and the type of technology or equipment
                                    used.</p>
                                <p>On average, the cost of minimal invasive spine surgery in India ranges from
                                    <strong>₹1.5 lakhs to ₹5 lakhs</strong>. This estimate includes pre-operative
                                    diagnostics, surgeon’s fees, anesthesia, hospital stay, post-operative medications,
                                    and rehabilitation sessions. However, the final cost may differ depending on whether
                                    the surgery involves spinal fusion, discectomy, or decompression procedures.
                                </p>
                                <p><strong>Key factors affecting the cost of minimal invasive spine surgery:</strong>
                                </p>
                                <ul>
                                    <li><strong>Type of Surgery :</strong> Procedures like MIS TLIF (Transforaminal
                                        Lumbar Interbody Fusion) or microdiscectomy may have different costs based on
                                        the surgical approach.</li>
                                    <li><strong>Hospital and Location :</strong> Premium hospitals in metro cities like
                                        Mumbai may charge more due to advanced infrastructure and experienced staff.
                                    </li>
                                    <li><strong>Surgeon’s Experience :</strong> Highly qualified spine surgeons with a
                                        proven track record in minimal invasive procedures may have higher consultation
                                        and surgery fees.</li>
                                    <li><strong>Pre- and Post-operative Care :</strong> Diagnostic tests (MRI, CT scan),
                                        physiotherapy, and follow-ups can add to the overall expenditure.</li>
                                </ul>
                                <br>
                                <p>At <a href="{{route('home')}}" ><strong>Spine
                                            Clinic Mumbai</strong></a>, led by <a
                                        href="{{route('about-doctor')}}">Dr.
                                        Vishal Kundnani</a>, patients receive transparent pricing and expert care. The
                                    clinic ensures affordability without compromising on quality and safety. Customized
                                    treatment plans are provided based on individual spine conditions and medical
                                    history.</p>
                                <p>If you are seeking safe and effective solutions for spinal conditions, <a
                                        href="{{route('contact')}}">Contact us</a>
                                    today to get an exact estimate for your <strong>minimal invasive spine
                                        surgery</strong>.</p>
                            </div>
                            <h3>Minimal Invasive Spine Surgery Gallery –</h3>
                            <ul class="mt-1">
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">SLIP
                                    DISC</li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">SPINAL
                                    STENOSIS</li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">LUMBAR
                                    SPINAL STENOSIS</li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">SPONDYLOLISTHESIS
                                </li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MICROENDOSCOPIC
                                    DISCECTOMY SURGERY</li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MICROENDOSCOPIC
                                    DECOMPRESSION SURGERY</li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MICROENDOSCOPIC
                                    SPINAL FUSION</li>
                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                        alt="pic"
                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MIS
                                    TLIF – MINIMAL INVASIVE TRANSFORMAINAL INTERBODY FUSION.</li>
                            </ul>
                            <p class="mt-2"><b>Who is the best Minimal Invasive Spine Surgeon or Best Spine Specialist
                                    in India for treatment of spine?</b></p>
                            <p><a href="{{route('home')}}" >Dr. Vishal
                                    Kundnani</a> is one of the best spine surgeons for slip disc surgery and is
                                available in various hospitals for consultation and for surgery. Dr. Vishal Kundnani is
                                the best spine specialist with a considerate approach to patients with an honest opinion
                                and ethical spine practice. Dr. Vishal Kundnani is the best microscopic and minimally
                                invasive surgeon for <a href="{{route('slip-disc')}}">slip disc surgery</a> in Goregaon, Malad, Kandivali.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.what-we-do-sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Less

                                            blood loss</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No

                                            post operation pain</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Better

                                            cosmesis</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Shorter

                                            hospitalisation</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Early

                                            recovery and return to work</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No

                                            need of bed rest after surgery</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Less

                                            infection rates</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No

                                            long term morbidity</li>

                                    </ul>

                                </div>

                                <div class="col-lg-6">

                                    <img class="serv_img1" src="{{ asset('resources/assets/img/capture18.png') }}">

                                </div>

                            </div>



                            <div class="row mt-2">

                                <div class="col-lg-6">

                                    <p><b>Limitations</b></p>

                                    <ul>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Limited

                                            applicability not suited for cases like high grade spondylolisthesis, severe

                                            stenosis, multilevel pathology etc.</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Resource

                                            Intensive and costly.</li>

                                    </ul>

                                </div>

                                <div class="col-lg-6">

                                    <p><b>Post Operative Protocol</b></p>

                                    <ul>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Day

                                            0- surgery</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Day

                                            1 post op Mobilization out of bed</li>

                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                                class="wow flipInX animated animated" data-wow-iteration="infinite"

                                                alt="pic"

                                                style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Day

                                            2 Post op – Discharge with rehabilitation and physiotherapy program + 'do's

                                            and Dont's</li>

                                    </ul>

                                </div>

                            </div>

                            <br>

                            <h3>Cost of Minimal Invasive Spine Surgery</h3>

                            <div class="bordered-section">

                                <p>Understanding the <strong>cost of minimal invasive spine surgery</strong> is

                                    essential for patients planning their treatment journey. The pricing can vary

                                    significantly based on factors such as the complexity of the procedure, hospital

                                    facilities, surgeon expertise, location, and the type of technology or equipment

                                    used.</p>

                                <p>On average, the cost of minimal invasive spine surgery in India ranges from

                                    <strong>₹1.5 lakhs to ₹5 lakhs</strong>. This estimate includes pre-operative

                                    diagnostics, surgeon’s fees, anesthesia, hospital stay, post-operative medications,

                                    and rehabilitation sessions. However, the final cost may differ depending on whether

                                    the surgery involves spinal fusion, discectomy, or decompression procedures.

                                </p>

                                <p><strong>Key factors affecting the cost of minimal invasive spine surgery:</strong>

                                </p>

                                <ul>

                                    <li><strong>Type of Surgery :</strong> Procedures like MIS TLIF (Transforaminal

                                        Lumbar Interbody Fusion) or microdiscectomy may have different costs based on

                                        the surgical approach.</li>

                                    <li><strong>Hospital and Location :</strong> Premium hospitals in metro cities like

                                        Mumbai may charge more due to advanced infrastructure and experienced staff.

                                    </li>

                                    <li><strong>Surgeon’s Experience :</strong> Highly qualified spine surgeons with a

                                        proven track record in minimal invasive procedures may have higher consultation

                                        and surgery fees.</li>

                                    <li><strong>Pre- and Post-operative Care :</strong> Diagnostic tests (MRI, CT scan),

                                        physiotherapy, and follow-ups can add to the overall expenditure.</li>

                                </ul>

                                <br>

                                <p>At <a href="{{route('home')}}" ><strong>Spine

                                            Clinic Mumbai</strong></a>, led by <a

                                        href="{{route('about-doctor')}}">Dr.

                                        Vishal Kundnani</a>, patients receive transparent pricing and expert care. The

                                    clinic ensures affordability without compromising on quality and safety. Customized

                                    treatment plans are provided based on individual spine conditions and medical

                                    history.</p>

                                <p>If you are seeking safe and effective solutions for spinal conditions, <a

                                        href="{{route('contact')}}">Contact us</a>

                                    today to get an exact estimate for your <strong>minimal invasive spine

                                        surgery</strong>.</p>

                            </div>

                            <h3>Minimal Invasive Spine Surgery Gallery –</h3>

                            <ul class="mt-1">

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">SLIP

                                    DISC</li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">SPINAL

                                    STENOSIS</li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">LUMBAR

                                    SPINAL STENOSIS</li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">SPONDYLOLISTHESIS

                                </li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MICROENDOSCOPIC

                                    DISCECTOMY SURGERY</li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MICROENDOSCOPIC

                                    DECOMPRESSION SURGERY</li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MICROENDOSCOPIC

                                    SPINAL FUSION</li>

                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"

                                        class="wow flipInX animated animated" data-wow-iteration="infinite"

                                        alt="pic"

                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MIS

                                    TLIF – MINIMAL INVASIVE TRANSFORMAINAL INTERBODY FUSION.</li>

                            </ul>

                            <p class="mt-2"><b>Who is the best Minimal Invasive Spine Surgeon or Best Spine Specialist

                                    in India for treatment of spine?</b></p>

                            <p><a href="{{route('home')}}" >Dr. Vishal

                                    Kundnani</a> is one of the best spine surgeons for slip disc surgery and is

                                available in various hospitals for consultation and for surgery. Dr. Vishal Kundnani is

                                the best spine specialist with a considerate approach to patients with an honest opinion

                                and ethical spine practice. Dr. Vishal Kundnani is the best microscopic and minimally

                                invasive surgeon for <a href="{{route('slip-disc')}}">slip disc surgery</a> in Goregaon, Malad, Kandivali.</p>



                        </div>

                    </div>



                    <div class="col-lg-4 col-md-4 col-sm-4">

                        @include('includes.what-we-do-sidebar')

                    </div>

                </div>

            </div>

        </div>

    </section>



@stop


