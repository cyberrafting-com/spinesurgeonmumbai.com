@extends('layouts.default')

@php($title = "Spine Surgery Success Stories in Mumbai | Dr. Vishal Kundnani")

@section('meta_desc')
Read real-life spine surgery success stories from patients treated by Dr. Vishal Kundnani in Mumbai. Discover minimally invasive spine surgery, sciatica treatments, scoliosis correction, spinal fusion, and advanced care that transformed patients' lives.
@endsection

@section('meta_keywords',
"spine surgery success stories, minimally invasive spine surgery Mumbai, sciatica treatment Mumbai, lumbar decompression, spinal fusion, scoliosis correction, cervical spine surgery, MIS TLIF, Dr. Vishal Kundnani, advanced spine care Mumbai")

@section('schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "MedicalBusiness",
                "name": "Dr. Vishal Kundnani - Spine Surgery Success Stories",
                "description": "Read real-life spine surgery success stories from patients treated by Dr. Vishal Kundnani in Mumbai. Discover minimally invasive spine surgery, sciatica treatments, scoliosis correction, spinal fusion, and advanced care.",
                "url": "https://www.spinesurgeonmumbai.com/spine-surgery-success-stories",
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
                        "name": "What is minimally invasive spine surgery?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Minimally invasive spine surgery uses smaller incisions and specialized instruments to treat spine problems while causing minimal damage to muscles and tissues, resulting in faster recovery."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can scoliosis be corrected with surgery?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. Advanced scoliosis correction surgery can significantly improve spinal alignment, reduce pain, and restore posture in both adolescents and adults."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Is non-surgical treatment effective for sciatica?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. Many patients with sciatica improve with personalised non-surgical care including physiotherapy, posture correction, medications, and activity modification."
                        }
                    }
                ]
            }
        ]
    }
</script>
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">

            <!-- Doctor Profile Left -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="blog-profile text-center">
                    <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.jpg') }}" alt="Dr. Vishal Kundnani" class="img-fluid rounded-circle mb-3">
                    <h3>Dr. Vishal Kundnani</h3>
                    <span>MS (Ortho) FASSI, FNUS, FNAMS</span><br>
                    <p class="bold-text mt-2">
                        Leading spine surgeon in Mumbai specialising in
                        <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive spine surgery</a>,
                        sciatica treatment,
                        <a href="{{ route('spinal-fusion') }}">spinal fusion</a>, and complex spine deformities.
                    </p>
                    <a href="tel:+919619100123" class="d-block mb-2">
                        <img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="Call Dr. Vishal" class="img-fluid">
                    </a>
                    <a href="{{ route('contact') }}" class="d-block">
                        <img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="Book Appointment" class="img-fluid">
                    </a>
                </div>
            </div>

            <!-- Blog Content Right -->
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="blog-profile-details">

                    <!-- Page Intro -->
                    <div class="sec-blog-design pt-5">
                        <h1>Spine Surgery Success Stories</h1>



                        <img class="blog-hero-img" src="https://s3.ap-south-1.amazonaws.com/cdn1.cr/spinesurgeon-mumbai/blog/spine-surgery-success-stories-img.webp" alt="Spine Surgery Success Stories">
                        <p>
                            Discover real-life success stories of patients treated by Dr. Vishal Kundnani in Mumbai. From minimally invasive spine surgery to <a href="{{ route('scoliosis') }}">scoliosis correction</a>, <a href="{{ route('what-is-sciatica-and-why-it-happens') }}">sciatica</a> relief, and complex spinal fusions, these stories highlight expert care, advanced technology, and life-changing results.
                        </p>

                        <div class="gallery1 video-card">
                            <iframe width="100%" height="450"
                                src="https://www.youtube.com/embed/Jrw5w5cEysI?si=rd2GcxE1tnQxubDC" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            <h1>A woman who blazed the trail for many- Patient's success story at SPINE CLINIC Mumbai</h1>
                        </div>
                        <div class="modern-divider"></div>

                    </div>

                    <!-- Stories -->
                    <div class="sec-blog-design pt-4">
                        <!-- Story 1 -->
                        <div class="mb-5">
                            <h2>Story 1 – Lumbar Decompression & Fusion (MIS)</h2>
                            <!-- <div class="text-center mb-4">
                                <img src="{{ asset('resources/assets/img/blog/Lumbar-Decompression-&-Fusion-(MIS).png') }}" class="img-responsive" alt="Lumbar Decompression & Fusion (MIS)" style="border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.15); display: inline-block; margin: 10px 0; max-width: 75%;">
                            </div> -->
                            <p><strong>Patient Profile:</strong> Mr. Ramesh Sharma, 52-year-old corporate professional, Mumbai.</p>
                            <p>
                                "For over two years, I had been living with constant lower back pain and sharp, shooting pain down my right leg. Sitting at work, driving, and even sleeping became unbearable. I tried medications, physiotherapy, and rest, but nothing brought lasting relief. The pain affected my productivity and my mood, leaving me frustrated and hopeless."
                                When I finally met Dr. Vishal Kundnani at Bombay Hospital, I felt a sense of relief immediately. He patiently listened to my concerns, reviewed my MRI using advanced imaging technology, and explained the diagnosis: I had lumbar canal stenosis with spinal instability.
                                He recommended minimally invasive lumbar decompression and fusion (MIS), which minimizes muscle damage, reduces pain, and speeds up recovery. Today, I can work, travel, and enjoy life again.
                            </p>
                        </div>

                        <!-- Story 2 -->
                        <div class="mb-5">
                            <h2>Story 2 – Scoliosis Correction</h2>
                            <p><strong>Patient Profile:</strong> Ms. Ananya Desai, 28-year-old interior designer, Mumbai.</p>
                            <p>
                                "I had mild scoliosis since my teens, but over the years, it started progressing and causing back pain, shoulder imbalance, and fatigue. Meeting Dr. Vishal Kundnani at Lilavati Hospital changed everything. He recommended advanced scoliosis correction surgery, personalised to my curve, age, and lifestyle. Guided physiotherapy ensured gradual recovery, reduced pain, and improved posture. Today, I am now standing tall—literally and figuratively."
                            </p>
                        </div>

                        <!-- Story 3 -->
                        <div class="mb-5">
                            <h2>Story 3 – Non-Surgical Sciatica Care</h2>
                            <p><strong>Patient Profile:</strong> Mr. Sameer Khan, 40-year-old IT professional, Mumbai.</p>
                            <p>
                                "I developed sudden leg pain and numbness from a <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}">slipped disc</a>. Dr. Vishal Kundnani explained that many patients like me could improve with personalised non-surgical spine care, including <a href="{{ route('physiotherapy-in-spine') }}">physiotherapy</a>, posture correction, medications, and activity modification. Within weeks, my leg pain gradually reduced, and I regained confidence in my mobility without surgery."
                            </p>
                        </div>

                        <!-- Story 4 -->
                        <div class="mb-5">
                            <h2>Story 4 – MIS-TLIF for Spondylolisthesis</h2>
                            <p><strong>Patient Profile:</strong> Mr. Arjun Mehta, 45-year-old software engineer, Mumbai.</p>
                            <p>
                                "After months of intense lower back pain, Dr. Vishal Kundnani recommended
                                MIS-TLIF (Minimally Invasive Transforaminal Lumbar Interbody Fusion).
                                The minimally invasive approach allowed smaller incisions, minimal muscle trauma, and faster recovery.
                                My leg pain significantly reduced within a week, and I regained independence quickly."

                            </p>
                        </div>

                        <!-- Story 5 -->
                        <div class="mb-5">
                            <h2>Story 5 – Cervical Spine Decompression</h2>
                            <p><strong>Patient Profile:</strong> Ms. Ritu Kapoor, 38-year-old school teacher, Mumbai.</p>

                            <p>
                                "I had chronic neck stiffness, tingling in my arms, and constant headaches. Everyday tasks like writing, lifting books, or even cooking became painful. I feared surgery but worried that conservative care wouldn't help."

                                At Bombay Hospital, Dr. Vishal Kundnani evaluated my scans using high-resolution MRI and nerve conduction studies. He diagnosed cervical nerve compression and suggested minimally invasive
                                decompression surgery. The procedure was precise, using modern surgical microscopes and navigation tools, and post-operative care was empathetic and personalised. Within weeks, my neck pain decreased, my arm numbness resolved, and I regained normal mobility.

                                "Dr. Kundnani's professional guidance, patience, and advanced surgical skills completely restored my confidence and quality of life."


                            </p>

                        </div>

                        <!-- Story 6 -->
                        <div class="mb-5">
                            <h2>Story 6 – Adult Degenerative Scoliosis</h2>
                            <p><strong>Patient Profile:</strong> Mr. Sanjay Deshmukh, 55-year-old businessman, Mumbai.</p>
                            using
                            <p>
                                "Years of back pain and fatigue made me avoid social events and even simple walks. I had been told my scoliosis was 'manageable', but my discomfort kept worsening, affecting my sleep and work."
                                Dr. Vishal Kundnani at Lilavati Hospital thoroughly evaluated me using advanced spine imaging and computer-assisted planning. He recommended spinal fusion with deformity correction, customised to my age, lifestyle, and curve severity.
                                The surgery was performed with modern instrumentation and navigation, ensuring safety and optimal correction. Recovery was guided with personalised physiotherapy and regular follow-up, helping me regain strength and mobility.
                                "Thanks to Dr. Kundnani, I now walk comfortably, sleep well, and enjoy life again. His compassionate approach, expertise, and personal attention made all the difference."

                            </p>



                        </div>

                        <!-- Story 7 -->
                        <div class="mb-5">
                            <h2>Story 7 – Severe Sciatica Recovery (MIS)</h2>
                            <p><strong>Patient Profile:</strong> Ms. Priya Shah, 42-year-old marketing executive, Mumbai.</p>
                            <p>
                                "Severe sciatica from a slipped disc left me unable to sit, walk, or sleep comfortably. Every day felt like a struggle, and I feared I would never return to my normal life."
                                Dr. Vishal Kundnani at Bombay Hospital diagnosed the problem using high-resolution MRI and nerve monitoring technology. He recommended minimally invasive lumbar decompression, a modern technique to relieve nerve pressure while reducing recovery time.
                                Post-surgery, I experienced gradual pain relief and was walking comfortably within days. Dr. Kundnani's personalised rehabilitation plan ensured I regained strength and avoided future flare-ups.
                                "I cannot thank Dr. Vishal Kundnani enough—his expertise, empathy, and use of modern technology gave me a new lease on life."

                            </p>

                        </div>

                        <!-- Story 8 -->
                        <div class="mb-5">
                            <h2>Story 8 – Spine Fusion for Instability</h2>
                            <p><strong>Patient Profile:</strong> Mr. Ravi Joshi, 50-year-old chartered accountant, Mumbai.</p>
                            <p>
                                "Chronic back instability made simple tasks like standing or lifting objects painful. After months of failed conservative care, I was anxious and fearful about surgery."
                                At Lilavati Hospital, Dr. Vishal Kundnani conducted a thorough assessment with modern imaging and dynamic X-rays, diagnosing spinal instability. He recommended spinal fusion surgery using minimally invasive technology.
                                The surgery went smoothly, with minimal muscle trauma, and post-operative care was empathetic and personalised. Over the next few months, I regained normal movement and strength, returning to my daily life confidently.
                                "Dr. Kundnani's professionalism, precision, and personal attention restored not only my spine but also my confidence."

                            </p>

                        </div>

                        <!-- Story 9 -->
                        <div class="mb-5">
                            <h2>Story 9 – Postural Back Pain & Non-Surgical Recovery</h2>
                            <p><strong>Patient Profile:</strong> Ms. Kavita Mehra, 35-year-old IT professional, Mumbai.</p>
                            <p>
                                I suffered chronic back pain due to poor posture at work. Sitting long hours caused fatigue, pain, and stress, affecting both my professional and personal life."
                                Dr. Vishal Kundnani at Bombay Hospital assessed my condition using ergonomic analysis and spinal imaging. He created a personalised non-surgical spine care plan including physiotherapy, posture correction, and lifestyle adjustments.
                                Within weeks, my pain reduced, posture improved, and I returned to work without discomfort. Dr. Kundnani's empathy, guidance, and professional approach made all the difference.
                                "He helped me understand my spine health and take proactive steps, avoiding unnecessary surgery
                            </p>
                        </div>

                        <!-- Story 10 -->
                        <div class="mb-5">
                            <h2>Story 10 – Complex Multi-Level Spine Surgery</h2>
                            <p><strong>Patient Profile:</strong> Mr. Anil Kapoor, 60-year-old retired engineer, Mumbai.</p>
                            <p>
                                "I suffered chronic back pain due to poor posture at work. Sitting long hours caused fatigue, pain, and stress, affecting both my professional and personal life."
                                Dr. Vishal Kundnani at Bombay Hospital assessed my condition using ergonomic analysis and spinal imaging. He created a personalised non-surgical spine care plan including physiotherapy, posture correction, and lifestyle adjustments.
                                Within weeks, my pain reduced, posture improved, and I returned to work without discomfort. Dr. Kundnani's empathy, guidance, and professional approach made all the difference.
                                "He helped me understand my spine health and take proactive steps, avoiding unnecessary surgery."

                            </p>


                        </div>

                    </div>

                    <!-- CTA -->
                    <div class="sec-blog-design pt-5">
                        <h2>Consult Dr. Vishal Kundnani</h2>
                        <p>
                            If you or a loved one require advanced spine care in Mumbai, speak with an expert. Understand options, risks, and expected outcomes. Learn more about our <a href="{{ route('back-pain') }}">back pain treatments</a> and <a href="{{ route('spinal-stenosis') }}">spinal stenosis care</a>.
                        </p>
                        <p>
                            <b>
                                📞 Call <a href="tel:9619100123">9619100123</a> or
                                <a href="{{ route('contact') }}">Book a Consultation</a>
                            </b>
                        </p>
                        <p>
                            <i>Medical Disclaimer: This information is educational and does not replace professional medical advice.</i>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@stop