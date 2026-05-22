@php($title = "Scoliosis & Scoliosis Surgery | Dr. Vishal Kundnani")

@section('meta_desc')
Scoliosis, scoliosis treatment, scoliosis surgery, spine deformity surgery, scoliosis in adults, scoliosis in children
@endsection

@section('meta_keywords',
"Scoliosis, scoliosis treatment, scoliosis surgery, spine deformity surgery, scoliosis in adults, scoliosis in children, scoliosis specialist Mumbai, Dr. Vishal Kundnani")

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalBusiness",
      "name": "Dr. Vishal Kundnani - Scoliosis Specialist in Mumbai",
      "description": "Dr. Vishal Kundnani provides comprehensive scoliosis diagnosis and treatment in Mumbai, including scoliosis surgery for children and adults.",
      "url": "https://www.spinesurgeonmumbai.com/scoliosis-scoliosis-surgery",
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
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is scoliosis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scoliosis is a condition where the spine curves sideways, often forming an \"S\" or \"C\" shape. It can affect children, teenagers, and adults."
          }
        },
        {
          "@type": "Question",
          "name": "When is scoliosis surgery required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Surgery is considered if the curve is severe, worsening, pain or deformity affects quality of life, or breathing or function is affected."
          }
        },
        {
          "@type": "Question",
          "name": "Is scoliosis surgery safe?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. With modern techniques and experienced surgeons, scoliosis surgery is safe and outcomes are predictable."
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
                        <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.webp') }}" alt="Dr. Vishal Kundnani">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                        <p class="bold-text">Dedicated <a href="{{ route('scoliosis') }}">scoliosis</a> specialist and spine surgeon in Mumbai.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.webp') }}" alt="Call Dr. Vishal"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.webp') }}" alt="Book Appointment" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">

                        <div class="row">
                            <div class="sec-blog-design pt-5">
                                <h1>Scoliosis & Scoliosis Surgery</h1>
                                <img class="blog-hero-img" src="https://s3.ap-south-1.amazonaws.com/cdn1.cr/spinesurgeon-mumbai/blog/scoliosis-scoliosis-surgery-img.webp" alt="Scoliosis & Scoliosis Surgery">
                                <p>Scoliosis is a condition where the spine curves sideways instead of being straight.</p>
                                <p>Patients and parents often worry about progression, pain, and the need for surgery.</p>
                                <p>Here are the most frequently searched questions about scoliosis, answered simply and honestly.</p>
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>SCOLIOSIS</h2>
                            
                            <p><b>1. What is scoliosis?</b></p>
                            <p>Scoliosis is a condition where the spine curves sideways, often forming an "S" or "C" shape. It can affect children, teenagers, and adults.</p>

                            <p><b>2. What causes scoliosis?</b></p>
                            <p>Most cases have no clear cause (idiopathic scoliosis). Other causes include congenital spine problems, neuromuscular conditions, or age-related degeneration.</p>

                            <p><b>3. At what age does scoliosis usually develop?</b></p>
                            <p>Scoliosis commonly develops during:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Childhood</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Adolescence (growth spurts)</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Later adulthood due to degeneration</li>
                            </ul>

                            <p><b>4. How do I know if I or my child has scoliosis?</b></p>
                            <p>Signs include:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Uneven shoulders or hips</li>
                                <li style="list-style-type: disc; padding: 5px 0;">One shoulder blade sticking out</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Tilted waist or body leaning to one side</li>
                            </ul>

                            <p><b>5. Is scoliosis painful?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">In children, scoliosis is often painless</li>
                                <li style="list-style-type: disc; padding: 5px 0;">In adults, it may cause <a href="{{ route('back-pain') }}">back pain</a>, stiffness, or fatigue</li>
                            </ul>

                            <p><b>6. Can scoliosis get worse over time?</b></p>
                            <p>Yes. Curves can progress, especially during growth years or due to age-related spine changes if not monitored.</p>

                            <p><b>7. How is scoliosis diagnosed?</b></p>
                            <p>Diagnosis includes:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Physical examination</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Standing spine X-rays</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Curve measurement (Cobb angle)</li>
                            </ul>

                            <p><b>8. Can scoliosis be treated without surgery?</b></p>
                            <p>Yes. Mild to moderate scoliosis can be managed with:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Observation and follow-up</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Bracing (in growing children)</li>
                                <li style="list-style-type: disc; padding: 5px 0;"><a href="{{ route('physiotherapy-in-spine') }}">Physiotherapy</a> and posture correction</li>
                            </ul>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Scoliosis Surgery</h2>
                            
                            <p><b>9. When is scoliosis surgery required?</b></p>
                            <p>Surgery is considered if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Curve is severe</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Curve is worsening</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain or deformity affects quality of life</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Breathing or function is affected</li>
                            </ul>

                            <p><b>10. What does scoliosis surgery involve?</b></p>
                            <p>Surgery involves:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Correcting the spinal curve</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Stabilizing the spine using rods and screws</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Preventing further progression</li>
                            </ul>
                            <p>Learn more about <a href="{{ route('spinal-fusion') }}">spinal fusion surgery</a> and <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive spine surgery</a> techniques.</p>

                            <p><b>11. Is scoliosis surgery safe?</b></p>
                            <p>Yes. With modern techniques and experienced surgeons, scoliosis surgery is safe and outcomes are predictable.</p>

                            <p><b>12. What age is best for scoliosis surgery?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Adolescents: often during growth years if curve progresses</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Adults: when pain or disability becomes significant</li>
                            </ul>
                            <p>Timing depends on individual factors.</p>

                            <p><b>13. How long does scoliosis surgery take?</b></p>
                            <p>Most scoliosis surgeries take:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">4–6 hours</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Sometimes longer for complex curves</li>
                            </ul>

                            <p><b>14. How long is hospital stay after scoliosis surgery?</b></p>
                            <p>Hospital stay is usually:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">4–7 days</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Depending on recovery and complexity</li>
                            </ul>

                            <p><b>15. How long is recovery after scoliosis surgery?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Return to school/work: 4–8 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Full recovery: 6–12 months</li>
                            </ul>
                            <p>Gradual rehabilitation is important.</p>

                            <p><b>16. Will scoliosis surgery completely straighten the spine?</b></p>
                            <p>The goal is significant correction and balance, not perfect straightening.</p>
                            <p>Surgery aims for function, stability, and appearance improvement.</p>

                            <p><b>17. Can scoliosis return after surgery?</b></p>
                            <p>Recurrence is uncommon when surgery is properly done and follow-up is maintained.</p>

                            <p><b>18. What are the risks of scoliosis surgery?</b></p>
                            <p>Possible risks include:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Infection</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Bleeding</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Nerve injury</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Implant-related issues</li>
                            </ul>
                            <p>Serious complications are rare.</p>

                            <p><b>19. Can adults undergo scoliosis surgery?</b></p>
                            <p>Yes. Adult scoliosis surgery can improve pain, posture, and quality of life when conservative treatment fails. Learn more about <a href="{{ route('kyphosis') }}">kyphosis</a> and other spinal deformity treatments.</p>

                            <p><b>20. When should scoliosis surgery not be delayed?</b></p>
                            <p>Do not delay surgery if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Curve is rapidly worsening</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Breathing is affected</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain or deformity is severe</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Nerve symptoms develop</li>
                            </ul>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Call to Action</h2>
                            <p>If scoliosis is suspected or diagnosed, timely evaluation by a spine deformity specialist like Dr. Vishal Kundnani helps guide treatment and prevent long-term complications. Consult at Bombay Hospital or Lilavati Hospital in Mumbai. <a href="{{ route('contact') }}">Book your consultation today</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Medical Disclaimer</h2>
                            <p>⚠️ This information is for educational purposes only and does not replace professional medical advice.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
