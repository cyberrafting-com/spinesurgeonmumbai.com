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
  "@type": "Blog",
  "name": "Spine Surgery Success Stories",
  "author": {
    "@type": "Person",
    "name": "Dr. Vishal Kundnani"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Bombay & Lilavati Hospitals"
  },
  "blogPost": [
    {
      "@type": "BlogPosting",
      "headline": "Lumbar Decompression & Fusion (MIS) Success",
      "keywords": "minimally invasive spine surgery, lumbar decompression, spinal fusion, sciatica surgery, Dr. Vishal Kundnani"
    },
    {
      "@type": "BlogPosting",
      "headline": "Scoliosis Correction Success",
      "keywords": "scoliosis treatment, scoliosis surgery, spine deformity correction, advanced spine surgery Mumbai, Dr. Vishal Kundnani"
    },
    {
      "@type": "BlogPosting",
      "headline": "Non-Surgical Sciatica Care Success",
      "keywords": "non-surgical sciatica treatment, slipped disc management, back pain treatment Mumbai, Dr. Vishal Kundnani"
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
                        <a href="{{ route('sciatica') }}">sciatica treatment</a>,
                        <a href="{{ route('spinal-fusion') }}">spinal fusion</a>, 
                        <a href="{{ route('scoliosis') }}">scoliosis correction</a>, and complex spine deformities.
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
                        <p>
                            Discover real-life success stories of patients treated by Dr. Vishal Kundnani in Mumbai. From <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive spine surgery</a> to <a href="{{ route('scoliosis') }}">scoliosis </a>correction, <a href="{{ route('sciatica') }}">sciatica relief</a>, and complex <a href="{{ route('spinal-fusion') }}">spinal fusions</a>, these stories highlight expert care, advanced technology, and life-changing results.
                        </p>
                    </div>

                    <!-- Stories -->
                    <div class="sec-blog-design pt-4">
                        <!-- Story 1 -->
                        <div class="mb-5">
                            <h2>Story 1 – Lumbar Decompression & Fusion (MIS)</h2>
                            <p><strong>Patient Profile:</strong> Mr. Ramesh Sharma, 52-year-old corporate professional, Mumbai.</p>
                            <p>
                                "For over two years, I had been living with constant lower back pain and sharp, shooting pain down my right leg. Sitting at work, driving, and even sleeping became unbearable. I tried medications, physiotherapy, and rest, but nothing brought lasting relief. The pain affected my productivity and my mood, leaving me frustrated and hopeless."
                                When I finally met Dr. Vishal Kundnani at Bombay Hospital, I felt a sense of relief immediately. He patiently listened to my concerns, reviewed my MRI using advanced imaging technology, and explained the diagnosis: I had lumbar canal stenosis with spinal instability.
                                He recommended <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive lumbar decompression and fusion (MIS)</a>, which minimizes muscle damage, reduces pain, and speeds up recovery. Today, I can work, travel, and enjoy life again.
                            </p>
                        </div>

                        <!-- Story 2 -->
                        <div class="mb-5">
                            <h2>Story 2 – Scoliosis Correction</h2>
                            <p><strong>Patient Profile:</strong> Ms. Ananya Desai, 28-year-old interior designer, Mumbai.</p>
                            <p>
                                "I had mild scoliosis since my teens, but over the years, it started progressing and causing back pain, shoulder imbalance, and fatigue. Meeting Dr. Vishal Kundnani at Lilavati Hospital changed everything. He recommended <a href="{{ route('scoliosis') }}">advanced scoliosis correction surgery</a>, personalised to my curve, age, and lifestyle. Guided physiotherapy ensured gradual recovery, reduced pain, and improved posture. Today, I am now standing tall—literally and figuratively."
                            </p>
                        </div>

                        <!-- Story 3 -->
                        <div class="mb-5">
                            <h2>Story 3 – Non-Surgical Sciatica Care</h2>
                            <p><strong>Patient Profile:</strong> Mr. Sameer Khan, 40-year-old IT professional, Mumbai.</p>
                            <p>
                                "I developed sudden leg pain and numbness from a slipped disc. Dr. Vishal Kundnani explained that many patients like me could improve with personalised non-surgical spine care, including physiotherapy, posture correction, medications, and activity modification. Within weeks, my leg pain gradually reduced, and I regained confidence in my mobility without surgery."
                            </p>
                        </div>

                        <!-- Story 4 -->
                        <div class="mb-5">
                            <h2>Story 4 – MIS-TLIF for Spondylolisthesis</h2>
                            <p><strong>Patient Profile:</strong> Mr. Arjun Mehta, 45-year-old software engineer, Mumbai.</p>
                            <p>
                                "After months of intense lower back pain, Dr. Vishal Kundnani recommended <a href="{{ route('case-of-mis-tlif-spinal-fusion') }}">MIS-TLIF (Minimally Invasive Transforaminal Lumbar Interbody Fusion)</a>. The minimally invasive approach allowed smaller incisions, minimal muscle trauma, and faster recovery. My leg pain significantly reduced within a week, and I regained independence quickly."
                            </p>
                        </div>

                        <!-- Story 5 -->
                        <div class="mb-5">
                            <h2>Story 5 – Cervical Spine Decompression</h2>
                            <p><strong>Patient Profile:</strong> Ms. Ritu Kapoor, 38-year-old school teacher, Mumbai.</p>
                            <p>
                                "I had chronic neck stiffness and arm numbness. Dr. Kundnani suggested <a href="{{ route('cervical-spine-surgery-mumbai') }}">minimally invasive cervical decompression surgery</a>. Within weeks, my neck pain decreased, my arm numbness resolved, and I regained normal mobility."
                            </p>
                        </div>

                        <!-- Story 6 -->
                        <div class="mb-5">
                            <h2>Story 6 – Adult Degenerative Scoliosis</h2>
                            <p><strong>Patient Profile:</strong> Mr. Sanjay Deshmukh, 55-year-old businessman, Mumbai.</p>
                            <p>
                                "Dr. Vishal Kundnani recommended <a href="{{ route('spinal-fusion') }}">spinal fusion with deformity correction</a> using modern instrumentation. Recovery was guided with personalised physiotherapy, helping me regain strength and mobility."
                            </p>
                        </div>

                        <!-- Story 7 -->
                        <div class="mb-5">
                            <h2>Story 7 – Severe Sciatica Recovery (MIS)</h2>
                            <p><strong>Patient Profile:</strong> Ms. Priya Shah, 42-year-old marketing executive, Mumbai.</p>
                            <p>
                                "Severe sciatica left me unable to sit, walk, or sleep comfortably. Dr. Kundnani recommended <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive lumbar decompression</a>. Post-surgery, I gradually regained mobility and avoided flare-ups."
                            </p>
                        </div>

                        <!-- Story 8 -->
                        <div class="mb-5">
                            <h2>Story 8 – Spine Fusion for Instability</h2>
                            <p><strong>Patient Profile:</strong> Mr. Ravi Joshi, 50-year-old chartered accountant, Mumbai.</p>
                            <p>
                                "Chronic back instability required <a href="{{ route('spinal-fusion') }}">spinal fusion surgery</a> using minimally invasive technology. Over months, I regained normal movement and confidence."
                            </p>
                        </div>

                        <!-- Story 9 -->
                        <div class="mb-5">
                            <h2>Story 9 – Postural Back Pain & Non-Surgical Recovery</h2>
                            <p><strong>Patient Profile:</strong> Ms. Kavita Mehra, 35-year-old IT professional, Mumbai.</p>
                            <p>
                                "Dr. Kundnani created a personalised non-surgical spine care plan including physiotherapy, posture correction, and lifestyle adjustments. Within weeks, my pain reduced, posture improved, and I returned to work comfortably."
                            </p>
                        </div>

                        <!-- Story 10 -->
                        <div class="mb-5">
                            <h2>Story 10 – Complex Multi-Level Spine Surgery</h2>
                            <p><strong>Patient Profile:</strong> Mr. Anil Kapoor, 60-year-old retired engineer, Mumbai.</p>
                            <p>
                                "I had severe pain from multiple spine degeneration. Dr. Vishal Kundnani performed multi-level <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive spine surgery</a>. Post-operative care and follow-ups restored mobility, independence, and quality of life."
                            </p>
                        </div>

                    </div>

                    <!-- CTA -->
                    <div class="sec-blog-design pt-5">
                        <h2>Consult Dr. Vishal Kundnani</h2>
                        <p>
                            If you or a loved one require <a href="{{ route('advanced-spine-care-minimally-invasive-surgery-mumbai') }}">advanced spine care in Mumbai</a>, speak with an expert. Understand options, risks, and expected outcomes.
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
