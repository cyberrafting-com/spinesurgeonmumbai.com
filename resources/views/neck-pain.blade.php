@php($title = 'Neck Pain Treatment in Mumbai by Dr. Vishal Kundnani')

@section('meta_desc')Get best treatment for neck pain with Dr. Vishal Kundnani Spine specialist in Mumbai. Expert care
and solutions in Mumbai for effective relief.@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "MedicalWebPage",
          "name": "Expert Neck Pain Treatment in Mumbai by Dr. Vishal Kundnani",
          "description": "Get specialized treatment for neck pain with Dr. Vishal Kundnani Spine Specialist Mumbai. Advanced spine care and pain management solutions in Mumbai.",
          "url": "https://www.spinesurgeonmumbai.com/neck-pain.php",
          "author": {
            "@type": "Person",
            "name": "Dr. Vishal Kundnani",
            "jobTitle": "Spine Surgeon",
            "worksFor": {
              "@type": "MedicalOrganization",
              "name": "Spine Surgeon Mumbai",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Mumbai",
                "addressRegion": "Maharashtra",
                "addressCountry": "IN"
              }
            }
          },
          "provider": {
            "@type": "MedicalOrganization",
            "name": "Spine Surgeon Mumbai",
            "medicalSpecialty": "Spine Surgery"
          },
          "mainEntity": {
            "@type": "MedicalCondition",
            "name": "Neck Pain",
            "description": "Neck pain is a common condition that can be caused by various factors including poor posture, muscle strain, injury, or underlying medical conditions. It can range from mild discomfort to severe pain that affects daily activities.",
            "possibleTreatment": {
              "@type": "MedicalTherapy",
              "name": "Neck Pain Treatment",
              "description": "Comprehensive treatment options for neck pain including physical therapy, medications, and surgical intervention when necessary."
            }
          }
        }
        </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What are the common causes of neck pain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Common causes include: Poor posture, Muscle strain, Injury or trauma, Herniated discs, Arthritis, Spinal stenosis, and Stress or emotional tension."
              }
            },
            {
              "@type": "Question",
              "name": "What are the symptoms of neck pain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Symptoms may include: Stiffness in the neck, Sharp or stabbing pain, Dull aching pain, Difficulty moving the neck, Headaches, Numbness or tingling in the arms, and Pain that worsens with movement."
              }
            },
            {
              "@type": "Question",
              "name": "When should I see a doctor for neck pain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You should seek medical attention if: The pain is severe or persistent, You have numbness or tingling in your arms, The pain follows an injury, You have difficulty moving your neck, You experience headaches, or The pain is accompanied by fever or other concerning symptoms."
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
                <h2>WHAT <span>WE DO</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('neck-pain') }}">Neck Pain</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('neck-pain') }}" class="language-btn {{ request()->is('neck-pain') && !request()->is('neck-pain-*') ? 'active' : '' }}">
                                        ENGLISH
                                    </a>
                                    {{-- <a href="{{ route('spinal-fusion-h') }}" class="language-btn {{ request()->is('spinal-fusion-h') ? 'active' : '' }}">
                                        HINDI
                                    </a> --}}
                                    <a href="{{ route('neck-pain-m') }}" class="language-btn {{ request()->is('neck-pain-m') ? 'active' : '' }}">
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
                        <p>As part of our <a href="{{route('home')}}">comprehensive spine care services in Mumbai</a>, we offer
                            specialized treatment for various types of neck pain conditions.</p>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What are the causes of Neck pain or Neck Pain ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>Similar to <a href="{{route('back-pain')}}">back pain conditions</a>, the risk factors
                                                for neck pain can be:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Aging:
                                                    as a part of the normal age-related degenerative process.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Life
                                                    style: Stress and emotional tension, poor posture -standing for long
                                                    periods of time or sitting incorrectly—can cause neck pain , heavy
                                                    physical work, lifting or forceful move-ment, bending, or awkward
                                                    positions can really hurt your back.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Injuries
                                                    and Accidents: Injury to muscle , ligaments , or soft tissue can lead to
                                                    neck pain .Fracture in spinal bone in a fall or a car accident also is a
                                                    common cause. If you have osteoporosis, a condition that weakens your
                                                    bones, you're much more prone to fracturing a bone.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Obesity:
                                                    Being overweight puts pressure and stress on the back, especially the
                                                    low back. Carrying excess weight aggravates other health conditions such
                                                    as osteoporosis (weak bones), osteoarthritis (joint pain), rheumatoid
                                                    arthritis (an autoimmune disease), degenerative disc disease (described
                                                    above in the aging section), spinal stenosis, and spondylolisthesis.
                                                </li>
                                            </ul>
                                            <p>Neck pain is also caused by a specific spinal conditions like :</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Slip
                                                    disc/ Disc Bulge /Bulged Disc</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spinal
                                                    stenosis / Lumbar Spinal Stenosis</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Facet
                                                    arthritis /Arthritis in spine</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spondylosis
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Primary
                                                    spinal tumours</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spinal
                                                    Metastatic tumours</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spine
                                                    Infections</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spine
                                                    Tuberculosis / SPINE TB</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spinal
                                                    Fracture</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Metabolic
                                                    causes- Otseomalacia – Vitamin D deifciency</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            What is the Anatomy of Neck pain in Spine?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>Human Spine is made of up 33 bones (vertebrae) that are cushioned by discs.
                                                These ver-tebrae are divided by region: neck (cervical spine), mid-back
                                                (thoracic spine), and low back (lumbar spine). At the lower end spine ends
                                                at the terminal bone of sacrum and the coccyx, which is commonly called your
                                                tailbone. Discs or cushions are present between these bones which function
                                                like shock absorbers. The disc protect the bones by absorbing the shocks
                                                from daily activities like walking, lift-ing, and twisting.Each disk has two
                                                parts – a soft, gelatinous inner portion (nucleus pulp-ous) and a tough
                                                outer ring (annulus fibrosis). Facet joints are on the posterior side (back)
                                                of your vertebrae. These joints (like all joints in your body) help movement
                                                and are very important for flexibility.Together, the vertebrae and discs
                                                form a tunnel through which the spinal cords and nerve pass. Spine also has
                                                muscles, ligaments and blood vessels. Muscles are tissues that act as power
                                                generators for movement. Ligaments are the strong, flexible bands of fibrous
                                                tissue that link the bones together.</p>

                                            <img class="serv_img" src="{{ asset('resources/assets/img/Capture.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What are the Common Symptoms of/ associated with Neck pain ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Neck pain / Pain in neck – type character, duration, recovery, and natural course
                                            depend on what is causing pain and where it is affecting your spine. The common
                                            complaints as-sociated with neck pain are –</p>
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Stiff
                                                neck, Stiffness in neck , Stiffness in Neck , Stiff neck</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Morning
                                                stiffness</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Muscle
                                                Spasms</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Arm
                                                Pain / Shoulder pain</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Difficulty
                                                in moving neck , forward bending</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Neck
                                                pain with prolonged sitting or constant working</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Neck
                                                pain with moving neck</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Neck
                                                pain with bending</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Neck
                                                pain with Difficulty in walking</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Neck
                                                pain in lying down.</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                    class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                    alt="pic"
                                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Associated
                                                symptoms with neck pain.
                                                <br>Arm pain,
                                                <br>Shoulder pain
                                                <br>Numbness in hand ,numbness in arm / Tingling in arm / weakness in hand
                                                <br>Difficulty in passing urine or motion and difficulty in walking.
                                            </li>
                                        </ul>
                                        <p>If Neck pain is associated with Arm pain , shoulder pain, arm numbness or arm
                                            weakness one should meet a spine specilaist or nearest spine doctor for sppine
                                            consultation . Dr Vishal Kundnani is one of the best spine specialist in Mumbai
                                            and one of the best spine surgeon in India.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            If I have neck pain shall I see a spine doctor always ? When do i need to have a
                                            physician opinion for neck pain ? Can i treat my neck pain with house hold
                                            remedies?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>Most of the neck pain patients shall improve with simple pain management
                                                measures. However one should meet a spine doctor and a Spine Specialist for
                                                spine consultation if your back pain persists for more than 3 weeks. and
                                                seek immediate attention if you have back pain with any of the following
                                                emergency signs (RED FLAGS) –</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Pain
                                                    is getting significantly worse.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Pain
                                                    affects every day activities.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Severe
                                                    symptoms.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Associated
                                                    Fever or constitutional symptoms.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Shoulder
                                                    pain or arm pain and weakness or numbness.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Arm
                                                    or hand weakness, tingling, or numbness.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Loss
                                                    of bowel or bladder control.</li>
                                            </ul>
                                            <p>If Neck pain is associated with RED FLAG SIGNS – Shoulder pain, arm numbness
                                                or arm weakness one should meet a Spine Specilaist or nearest spine doctor
                                                for sppine consultation. Dr. Vishal Kundnani is one of the best Spine
                                                Specialist in Mumbai and one of the best spine surgeon in India.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            What are the treatment options for Neck pain?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>There are different options to treat neck pain depending on the severity and
                                                duration of symptoms.</p>
                                            <p><b>They may comprise one or many:-</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Drugs
                                                    & Medications.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Physical
                                                    Therapy.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spinal
                                                    Bracing.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spinal
                                                    Injections.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Spine
                                                    surgery.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Physiotherapy
                                                    and exercises for back pain are helpful often.</li>
                                            </ul>
                                            <p>For planing a suitable and most optimal treatment option for self one should
                                                meet spine doctor for spine consultation and a Spine Specialist for exact
                                                diagnosis. One should meet a Spine Specilaist for investigation or nearest
                                                spine doctor for spine consultation. Dr. Vishal Kundnani is one of the best
                                                Spine Specialist in Mumbai and one of the best Spine Surgeon in India.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            Drugs, Medications, to Relieve Neck pain -
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <div class="cliclskil1">

                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Acetaminophen:
                                                    Your doctor may call this an analgesic, but most of us refer to
                                                    acetaminophen me-dications as painkillers.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">NSAIDs
                                                    (non-steroidal anti-inflammatory drugs): Reduce swelling (or
                                                    inflammation) while relieving your pain.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Muscle
                                                    Relaxants: If you have chronic back pain caused by muscle spasms, you
                                                    may need a muscle relaxant, which will help stop the spasms.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Anti-depressants:
                                                    As surprising as it may seem, anti-depressants can be effective drugs
                                                    for treating pain because they block pain messages on their way to the
                                                    brain. They can also help increase your body's production of endorphins,
                                                    a natural pain killer.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Opioids:
                                                    In the most extreme cases, and only under careful supervision, you
                                                    doctor may also prescribe an opioid, such as morphine or codeine.</li>
                                            </ul>
                                            <p><b>Medication Warning:-</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">As
                                                    with all medications, you must follow your doctor's advice precisely.
                                                    Never mix over-the-counter and prescribed drugs without consulting your
                                                    doctor.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">No
                                                    Medication shall be consumed without consultation of your spine doctor,
                                                    spinal surgeon or spine specialist. Dr. Vishal Kundnani is one of the
                                                    best spine specialists in Mumbai and one of the best spine surgeon in
                                                    India.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            When is surgery for Neck pain required to be done ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>Most patients with Neck pain respond well to non-surgical treatments (such as
                                                medication) –</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Indications
                                                    for spinal surgery in Neck pain are :
                                                    <br>No response / partial response to non-surgical treatments after
                                                    having diagnosed with a specific cause.
                                                    <br>Progressive radiculopathy, arm pain, shoulder pain , numbness, and
                                                    tingling in the arms or legs.
                                                    <br>Loss of power sensation in your arms or legs or loss of bowel or
                                                    bladder control.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                            What is physiotherapy for Slip Disc / Herniated disc / Disc Herniation ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingEight">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>Physiotherapy has a major role in spinal back pain/slip disc treatment. It
                                                teaches how to condition your body to prevent further injury and help in the
                                                recovery of the painful episode. There are a variety of physical therapy
                                                techniques. Passive and active treatments.</p>
                                            <p>Passive treatments relax your body and include deep tissue massage, hot and
                                                cold therapy, electrical stimulation (TENS), and hydrotherapy. Active
                                                treatment involves active stretching and strengthening exercises trunk
                                                stability, core strengthening.</p>
                                            <p><b>Passive Treatments:-</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Deep
                                                    Tissue Massage: Deep tissue massage relieves deep muscle tension and
                                                    spasms, which develop to prevent muscle motion at the affected area.
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Hot
                                                    and Cold Therapy: Both hot and cold therapies offer their own set of
                                                    benefits, and your physical therapist may alternate between them to get
                                                    the best results. This reduces inflammation, muscle spasms, and pain.
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Hydrotherapy:
                                                    gently relieves pain and relaxes muscles.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">TENS
                                                    (transcutaneous electrical nerve stimulation): uses electrical current
                                                    to stimulate your muscles and reduces muscle spasms and is generally
                                                    believed to trigger the release of endorphins, which are your body's
                                                    natural pain killers. TENS machine stimulates your muscles through
                                                    variable (but safe) intensities of electrical current. TENS may increase
                                                    your body's production of endorphins, your natural pain killers. The
                                                    TENS equipment your physical therapist uses is larger than the "at home"
                                                    use machine.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Ultrasound:
                                                    By increasing blood circulation, an ultrasound helps reduce muscle
                                                    cramping, swelling, stiffness, and pain. It does this by sending sound
                                                    waves deep into your muscle tissues, creating a gentle heat that
                                                    enhances circulation and healing.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Traction:
                                                    reduce the effects of gravity on the spine. the intent is to reduce the
                                                    disc herniation and is usually performed in the cervical or lumbar
                                                    spine.</li>
                                            </ul>
                                            <p><b>ActiveTreatments:-</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Help
                                                    to reduce recurrent pain but will also benefit your overall health.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Core
                                                    stability: Many people don't realize how important a strong core is to
                                                    their spinal health. Your core (abdominal) muscles help your back
                                                    muscles support your spine. When your core muscles are weak, it puts
                                                    extra pressure on your back muscles. Your physical therapist may teach
                                                    you to core stabilizing exercises to strengthen your back.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Flexibility:
                                                    Learning proper stretching and flexibility techniques will prepare you
                                                    for aerobic and strength exercises. Flexibility helps your body move
                                                    easier by warding off stiffness.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Muscle-strengthening:
                                                    Strong muscles are a great support system for your spine and better
                                                    handle pain. and strengthening of muscles which can cause your back
                                                    stretches and strengthen along with pelvic tilt, which helps you find a
                                                    neutral spine position.</li>
                                            </ul>
                                            <p>Dr. Vishal Kundnani is the best spine surgeon for Back pain surgery and is
                                                available in Spine Clinic Mumbai and other various hospitals for
                                                consultation and for surgery. Dr. Vishal Kundnani is the best spine
                                                specialist with a considerate approach to patients with an honest opinion
                                                and ethical spine practice</p>
                                            <p>These options of nonsurgical management of back pain are available at Spine
                                                Clinic Mumbai –best Spine Clinic in Mumbai for treatment of slip disc. Dr.
                                                Vishal Kundnani is the best spine consultant in Mumbai and is available on
                                                appointment in Mumbai on appointment for spine specialist. Dr. Vishal
                                                Kundnani is the best spine specialist in Mumbai and best spinal consultant
                                                in Goregaon, Kandiwali and Malad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingNine">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            Home Neck pain:
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingNine">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Neck
                                                    and shoulder pain can be classified in many different ways. Some people
                                                    experience only back pain or only shoulder pain, while others experience
                                                    pain in both areas.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTen" aria-expanded="false"
                                            aria-controls="collapseTen">
                                            What Causes Neck pain ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTen">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p><b>Causes of neck pain include:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Abnormalities
                                                    in the bone or joints</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Slip
                                                    disc /Disc bulge /Herniated disc</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Trauma
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Poor
                                                    posture</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Degenerative
                                                    diseases</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Tumors
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Muscle
                                                    strain</li>
                                            </ul>
                                            <p>To determine exact cause of your problem you should meet a nearest spine
                                                doctor or a spine specialist. Dr Vishal kundnani is one of the best spine
                                                specialist in mumbai and one of the best spine surgeon in India</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEleven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseEleven" aria-expanded="false"
                                            aria-controls="collapseEleven">
                                            What Causes Shoulder Pain?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingEleven">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>The shoulder is a ball and socket joint with a large range of movement. Such
                                                a mobile joint tends to be more susceptible to injury. Shoulder pain can
                                                stem from one or more of the following causes:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Pinched
                                                    nerves (also called radiculopathy)</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Slip
                                                    disc in Neck</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Strains
                                                    from overexertion</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Tendonitis
                                                    from overuse</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Dislocation
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Collar
                                                    or upper arm bone fractures</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Frozen
                                                    shoulder</li>
                                            </ul>
                                            <p>To determine the exact cause of your problem you should meet the nearest
                                                spine doctor or a spine specialist. Dr. Vishal Kundnani is one of the best
                                                spine specialists in Mumbai and one of the best spine surgeon in India.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwelve">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwelve" aria-expanded="false"
                                            aria-controls="collapseTwelve">
                                            How Are Neck and Shoulder Pain Diagnosed?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwelve">
                                    <div class="panel-body">
                                        <div class="cliclskil1">

                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">X-rays:
                                                    Plain X-rays can reveal narrowing of the space between two spinal bones,
                                                    arthritis-like diseases, tumors, slipped discs, narrowing of the spinal
                                                    canal, fractures, and instability of the spinal column.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MRI:
                                                    Magnetic resonance imaging is a noninvasive procedure that can reveal
                                                    the detail of neural (nerve-related) elements, as well as problems with
                                                    the tendons and ligaments.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Myelography/CT
                                                    scanning: This is sometimes used as an alternative to MRI.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Electrodiagnostic
                                                    studies: Electromyography (EMG) and nerve conduction velocity (NCV) are
                                                    sometimes used to diagnose Back and leg pain, arm pain, numbness and
                                                    tingling.</li>
                                            </ul>
                                            <p>To determine which investigation is needed for you meet a nearest spine
                                                doctor or a spine specialist. Dr Vishal kundnani is one of the best spine
                                                specialist in mumbai and one of the best spine surgeon in India.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThirteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThirteen" aria-expanded="false"
                                            aria-controls="collapseThirteen">
                                            How Are Neck and Shoulder Pain Treated?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThirteen">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">The
                                                    treatment of soft tissue neck pain and shoulder pain often depends on
                                                    the source of pain. Pain also may be treated with a local application of
                                                    moist heat or ice. Drugs like muscle relaxers and even antidepressants
                                                    might be helpful. Local corticosteroid injections are often helpful. For
                                                    both neck and shoulder pain movement, exercises may help. For cases in
                                                    which nerve roots or the spinal cord are involved, surgical procedures
                                                    may be necessary. To plan the best treatment option for yourself one
                                                    shall meet a spinal doctor or a spine specialist in Mumbai. Dr. Vishal
                                                    Kundnani is the best spine specialist in india.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

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
