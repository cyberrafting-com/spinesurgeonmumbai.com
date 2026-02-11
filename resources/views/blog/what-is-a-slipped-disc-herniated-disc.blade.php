@php($title = "What Is a Slipped Disc (Herniated Disc)? | Dr. Vishal Kundnani")

@section('meta_desc')
What is a slipped disc? Learn causes, symptoms, treatment options, and when surgery is needed—explained simply for patients.
@endsection

@section('meta_keywords',
"Slipped disc, herniated disc, disc herniation, slipped disc treatment, disc surgery, back pain, leg pain, sciatica, Dr. Vishal Kundnani, Mumbai")

@section('schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "MedicalBusiness",
                "name": "Dr. Vishal Kundnani - Slipped Disc Specialist in Mumbai",
                "description": "Dr. Vishal Kundnani provides comprehensive slipped disc diagnosis and treatment in Mumbai, including non-surgical and surgical options.",
                "url": "https://www.spinesurgeonmumbai.com/what-is-a-slipped-disc-herniated-disc",
                "telephone": "+919619100123",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Lilavati Hospital, Breach Candy Hospital, Saifee Hospital, Bombay Hospital",
                    "addressLocality": "Mumbai",
                    "addressRegion": "Maharashtra",
                    "postalCode": "400001",
                    "addressCountry": "IN"
                },
                "sameAs": [
                    "https://www.facebook.com/spineclinicmumbai",
                    "https://www.linkedin.com/in/dr-vishal-kundnani-654676b",
                    "https://www.instagram.com/spinespecialistvishal"
                ],
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+919619100123",
                    "contactType": "Customer Service",
                    "areaServed": "IN",
                    "availableLanguage": "English"
                }
            },
            {
                "@type": "FAQPage",
                "mainEntity": [{
                        "@type": "Question",
                        "name": "What is a slipped disc?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "A slipped disc happens when a spinal disc bulges or ruptures. The disc presses on nearby nerves, causing back pain, leg pain, numbness, or tingling."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can a slipped disc heal on its own?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, in many patients with rest and physiotherapy. Most cases improve with non-surgical treatment."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Does slipped disc always need surgery?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. Surgery is required only in a small number of cases. 80–90% of patients improve without surgery."
                        }
                    }
                ]
            }
        ]
    }
</script>
@endsection

@extends('layouts.default')

@section('content')
<!-- start doctor blog with profile -->
<section class="">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="blog-profile">
                    <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.jpg') }}" alt="Dr. Vishal Kundnani">
                    <h3>Dr. Vishal Kundnani</h3>
                    <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                    <p class="bold-text">Dedicated <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}">slipped disc</a> specialist and spine surgeon in Mumbai.</p>
                    <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="Call Dr. Vishal"></a>
                    <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="Book Appointment" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="blog-profile-details">

                    <div class="row">
                        <div class="sec-blog-design pt-5">
                            <h1>What Is a Slipped Disc (Herniated Disc)?</h1>
                            <img class="blog-hero-img" src="https://s3.ap-south-1.amazonaws.com/cdn1.cr/spinesurgeon-mumbai/blog/slip-disc-blog-img.webp" alt="What Is a Slipped Disc (Herniated Disc)?">
                            <p>Being told you have a "slipped disc" can sound scary.</p>
                            <p>Many patients immediately worry about surgery or long-term disability.</p>
                            <p>The truth is, most slipped discs are treatable without surgery, and many people recover fully with proper care.</p>
                        </div>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Quick Answer: What Is a Slipped Disc?</h2>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">A slipped disc happens when a spinal disc bulges or ruptures</li>
                            <li style="list-style-type: disc; padding: 5px 0;">The disc presses on nearby nerves</li>
                            <li style="list-style-type: disc; padding: 5px 0;">It can cause back pain, leg pain, numbness, or tingling</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Most cases improve with non-surgical treatment</li>
                        </ul>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>What Is a Spinal Disc?</h2>
                        <p>Spinal discs are soft cushions located between the bones of the spine (vertebrae).</p>
                        <p>They:</p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Absorb shock</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Allow movement</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Protect spinal nerves</li>
                        </ul>
                        <p>Each disc has:</p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">A soft center</li>
                            <li style="list-style-type: disc; padding: 5px 0;">A tough outer covering</li>
                        </ul>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>What Happens in a Slipped Disc?</h2>
                        <p>In a slipped disc:</p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">The outer covering weakens or tears</li>
                            <li style="list-style-type: disc; padding: 5px 0;">The inner soft material bulges out</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Nearby nerves get compressed</li>
                        </ul>
                        <p>This nerve pressure causes pain and other symptoms. Learn more about <a href="{{ route('herniated-disc') }}">herniated disc treatment</a>.</p>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Common Causes of Slipped Disc</h2>

                        <p><b>1. Age-Related Wear and Tear</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Discs lose water content with age</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Become less flexible</li>
                            <li style="list-style-type: disc; padding: 5px 0;">More prone to injury</li>
                        </ul>

                        <p><b>2. Sudden Lifting or Twisting</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Heavy lifting without proper technique</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Sudden jerky movements</li>
                        </ul>

                        <p><b>3. Poor Posture</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Long sitting</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Slouching</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Incorrect bending habits</li>
                        </ul>

                        <p><b>4. Weak Core Muscles</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Poor abdominal and back muscle strength</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Increased stress on discs</li>
                        </ul>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Symptoms of a Slipped Disc</h2>
                        <p>Symptoms depend on which nerve is affected.</p>
                        <p><b>Common Symptoms</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Lower <a href="{{ route('back-pain') }}">back</a> or <a href="{{ route('neck-pain') }}">neck</a> pain</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Pain radiating to arm or leg</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Tingling or numbness</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Muscle weakness</li>
                        </ul>
                        <p><b>Severe Symptoms (Need Urgent Care)</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Progressive weakness</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Loss of bladder or bowel control</li>
                        </ul>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>How Is a Slipped Disc Diagnosed?</h2>
                        <p>Diagnosis includes:</p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Detailed clinical examination</li>
                            <li style="list-style-type: disc; padding: 5px 0;">MRI scan (if pain persists or nerve symptoms exist)</li>
                        </ul>
                        <p>MRI helps confirm disc location and nerve involvement.</p>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Treatment Options for Slipped Disc</h2>
                        <p><b>Conservative Treatment (First Choice)</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Pain-relief medications</li>
                            <li style="list-style-type: disc; padding: 5px 0;"><a href="{{ route('physiotherapy-in-spine') }}">Physiotherapy</a></li>
                            <li style="list-style-type: disc; padding: 5px 0;">Activity modification</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Posture correction</li>
                        </ul>
                        <p>👉 80–90% of patients improve without surgery</p>

                        <p><b>Advanced Non-Surgical Options</b></p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Epidural or nerve block <a href="{{ route('spinal-injections') }}">injections</a></li>
                            <li style="list-style-type: disc; padding: 5px 0;">Targeted spine rehabilitation</li>
                        </ul>

                        <p><b>When Is Surgery Needed?</b></p>
                        <p>Surgery is considered if:</p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Pain does not improve after weeks of treatment</li>
                            <li style="list-style-type: disc; padding: 5px 0;">There is significant nerve weakness</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Bladder or bowel problems occur</li>
                        </ul>
                        <p>When surgery is needed, spinal decompression surgery or <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive discectomy</a> can provide relief.</p>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Recovery and Healing Time</h2>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Mild cases: a few weeks</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Moderate cases: 6–8 weeks</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Post-surgery (if needed): faster recovery with modern techniques</li>
                        </ul>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Can Slipped Disc Be Prevented?</h2>
                        <p>Yes, by:</p>
                        <ul>
                            <li style="list-style-type: disc; padding: 5px 0;">Maintaining good posture</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Regular <a href="{{ route('exercises') }}">exercise</a> and core strengthening</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Avoiding sudden heavy lifting</li>
                            <li style="list-style-type: disc; padding: 5px 0;">Maintaining healthy body weight</li>
                        </ul>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Frequently Asked Questions</h2>
                        <p><b>Is slipped disc permanent?</b></p>
                        <p>No. Many discs heal or shrink with treatment.</p>

                        <p><b>Can a slipped disc heal on its own?</b></p>
                        <p>Yes, in many patients with rest and physiotherapy. Many patients also find relief with <a href="{{ route('what-is-sciatica-and-why-it-happens') }}">sciatica treatment</a> when the disc causes nerve compression.</p>

                        <p><b>Is bed rest recommended?</b></p>
                        <p>Short rest is fine, but prolonged bed rest is not advised. Back pain management often includes gentle movement and exercise.</p>

                        <p><b>Does slipped disc always need surgery?</b></p>
                        <p>No. Surgery is required only in a small number of cases. Most patients improve with conservative slipped disc treatment.</p>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Call to Action</h2>
                        <p>If you have persistent back or leg pain, early evaluation by a spine specialist like Dr. Vishal Kundnani can help confirm the diagnosis and prevent complications. Consult at Bombay Hospital or Lilavati Hospital in Mumbai. <a href="{{ route('contact') }}">Book your consultation today</a>.</p>
                    </div>

                    <div class="sec-blog-design pt-5">
                        <h2>Medical Disclaimer</h2>
                        <p>This information is for educational purposes and does not replace professional medical advice.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@stop
