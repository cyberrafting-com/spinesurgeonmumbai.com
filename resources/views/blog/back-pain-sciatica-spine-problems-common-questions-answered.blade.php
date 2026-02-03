@php($title = "Back Pain, Sciatica & Spine Problems: 20 Common Questions Answered | Dr. Vishal Kundnani")

@section('meta_desc')
back pain causes, slipped disc, sciatica pain, spine specialist, spine treatment, MRI for back pain, spine surgery, physiotherapy for back pain
@endsection

@section('meta_keywords',
"Back pain causes, slipped disc, sciatica pain, spine specialist Mumbai, spine treatment, MRI for back pain, spine surgery, physiotherapy for back pain, Dr. Vishal Kundnani, lower back pain, herniated disc, sciatica treatment")

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalBusiness",
      "name": "Dr. Vishal Kundnani - Spine Specialist in Mumbai",
      "description": "Dr. Vishal Kundnani provides comprehensive spine care in Mumbai, answering common questions about back pain, sciatica, slipped disc, and spine treatment.",
      "url": "https://www.spinesurgeonmumbai.com/back-pain-sciatica-spine-problems-common-questions-answered",
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
          "name": "What causes Low Back pain?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lower back pain can happen due to: Muscle strain or poor posture, Slipped disc or disc degeneration, Long sitting, heavy lifting, or weak core muscles, Age-related wear and tear. Most cases are not dangerous but should not be ignored if persistent."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Slipped disc (herniated disc)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A slipped disc happens when: The soft inner part of a spinal disc bulges or leaks out, It presses on nearby nerves, It causes back pain, leg pain, or numbness. It is common and often treatable without surgery."
          }
        },
        {
          "@type": "Question",
          "name": "What is Sciatica and why does it happen?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sciatica is pain that: Starts in the lower back, Travels down the buttock and leg, Happens due to nerve compression, usually from a slipped disc. It is a symptom, not a disease."
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
                        <p class="bold-text">Dedicated spinal stenosis specialist and spine surgeon in Mumbai.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="Call Dr. Vishal"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="Book Appointment" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">

                        <div class="row">
                            <div class="sec-blog-design pt-5">
                                <h1>Back Pain, Sciatica & Spine Problems: 20 Common Questions Answered</h1>
                                <img class="blog-hero-img" src="{{ asset('resources\assets\img\blog\stages-lumber-spinal-scoliosis.png') }}" alt="Back Pain, Sciatica & Spine Problems: 20 Common Questions Answered">
                                <p><a href="{{ route('back-pain-blog') }}">Back</a> and <a href="{{ route('cervical-spine-surgery-mumbai') }}">neck pain</a> are among the most common health problems today.</p>
                                <p>Patients often worry whether their pain is normal, serious, or needs medical care. Learn more about <a href="{{ route('back-pain-specialist-mumbai') }}">when to see a spine specialist</a>.</p>
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>20 MOST SEARCHED SPINE QUESTIONS – PATIENT ANSWERS</h2>
                            
                            <p><b>1.What causes Low Back pain?</b></p>
                            <p>Lower <a href="{{ route('back-pain-blog') }}">back pain</a> can happen due to:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Muscle strain or poor posture</li>
                                <li style="list-style-type: disc; padding: 5px 0;"><a href="{{ route('herniated-disc-treatment-india') }}">Slipped disc</a> or disc degeneration</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Long sitting, heavy lifting, or weak core muscles</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Age-related wear and tear</li>
                            </ul>
                            <p>Most cases are not dangerous but should not be ignored if persistent. Read more about <a href="{{ route('back-pain-blog') }}">lower back pain causes and treatment</a>.</p>

                            <p><b>2.What is a Slipped disc (herniated disc)?</b></p>
                            <p>A <a href="{{ route('herniated-disc-treatment-india') }}">slipped disc</a> happens when:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">The soft inner part of a spinal disc bulges or leaks out</li>
                                <li style="list-style-type: disc; padding: 5px 0;">It presses on nearby nerves</li>
                                <li style="list-style-type: disc; padding: 5px 0;">It causes <a href="{{ route('back-pain-blog') }}">back pain</a>, leg pain, or numbness</li>
                            </ul>
                            <p>It is common and often treatable without surgery. Learn more about <a href="{{ route('herniated-disc-treatment-india') }}">slipped disc treatment options</a>.</p>

                            <p><b>3.What is Sciatica and why does it happen?</b></p>
                            <p><a href="{{ route('sciatica-pain-treatment-mumbai') }}">Sciatica</a> is pain that:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Starts in the lower back</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Travels down the buttock and leg</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Happens due to nerve compression, usually from a <a href="{{ route('herniated-disc-treatment-india') }}">slipped disc</a></li>
                            </ul>
                            <p>It is a symptom, not a disease. Find out more about <a href="{{ route('sciatica-pain-treatment-mumbai') }}">sciatica treatment in Mumbai</a>.</p>

                            <p><b>4. How can I tell if my pain is sciatica or just back strain?</b></p>
                            <p>Sciatica pain:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Radiates down the leg</li>
                                <li style="list-style-type: disc; padding: 5px 0;">May cause tingling or numbness</li>
                            </ul>
                            <p>Back strain:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Stays in the back</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Improves with rest</li>
                            </ul>
                            <p>A doctor can confirm with examination.</p>

                            <p><b>5.Do I need an MRI for back pain?</b></p>
                            <p>MRI is needed only if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain lasts more than 4–6 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">There is leg pain, weakness, or numbness</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain is severe or worsening</li>
                            </ul>
                            <p>Most simple back pain does not need MRI immediately.</p>

                            <p><b>6.When should I see a spine specialist in Mumbai?</b></p>
                            <p>You should consult a <a href="{{ route('back-pain-specialist-mumbai') }}">spine specialist</a> if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain does not improve with rest or medication</li>
                                <li style="list-style-type: disc; padding: 5px 0;">You have leg pain, weakness, or tingling</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Daily activities are affected</li>
                            </ul>
                            <p>Early consultation prevents long-term problems. Consult <a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a> at <a href="{{ route('best-hospital-spine-surgery-mumbai') }}">Bombay Hospital or Lilavati Hospital</a>.</p>

                            <p><b>7.Is Back pain serious or dangerous?</b></p>
                            <p>Most back pain is:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Mechanical</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Temporary</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Treatable</li>
                            </ul>
                            <p>However, pain with weakness, bowel/bladder issues, or fever needs urgent care.</p>

                            <p><b>8.How long does back pain take to heal?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Mild pain: 1–2 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Muscle strain: 2–4 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Disc-related pain: 6–8 weeks with treatment</li>
                            </ul>
                            <p>Recovery depends on cause and lifestyle changes.</p>

                            <p><b>9.Can sciatica go away on its own?</b></p>
                            <p>Yes, in many cases:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Rest</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Medicines</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Physiotherapy</li>
                            </ul>
                            <p>Surgery is needed only if pain or weakness persists. Learn about <a href="{{ route('sciatica-pain-treatment-mumbai') }}">sciatica treatment options</a>.</p>

                            <p><b>10.What are the basic treatments for slipped disc and sciatica?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain-relief medications</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Physiotherapy</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Posture correction</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Lifestyle modification</li>
                            </ul>
                            <p>Most patients improve without surgery. Read more about <a href="{{ route('herniated-disc-treatment-india') }}">slipped disc treatment</a> and <a href="{{ route('sciatica-pain-treatment-mumbai') }}">sciatica treatment</a>.</p>

                            <p><b>11.When is spine surgery necessary?</b></p>
                            <p><a href="{{ route('minimally-invasive-vs-open-spine-surgery') }}">Spine surgery</a> is advised only if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Severe nerve weakness</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Bowel or bladder problems</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain does not improve with conservative treatment</li>
                            </ul>
                            <p>Surgery is the last option, not the first. Learn about <a href="{{ route('minimally-invasive-vs-open-spine-surgery') }}">minimally invasive spine surgery options</a>.</p>

                            <p><b>12.Can physiotherapy help back or neck pain?</b></p>
                            <p>Yes. Physiotherapy helps by:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Strengthening core muscles</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Improving posture</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Reducing pain and stiffness</li>
                            </ul>
                            <p>It is a key part of spine care.</p>

                            <p><b>13.How can I prevent back pain at work or home?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Maintain correct sitting posture</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Take breaks from prolonged sitting</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Avoid sudden heavy lifting</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Exercise regularly</li>
                            </ul>
                            <p>Prevention is better than treatment.</p>

                            <p><b>14.What lifestyle changes help improve spine health?</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Regular walking or exercise</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Weight control</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Good sleep posture</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Avoid smoking</li>
                            </ul>
                            <p>Small daily habits protect spine health long-term.</p>

                            <p><b>15.Does poor posture cause back and neck pain?</b></p>
                            <p>Yes. Poor posture can:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Strain muscles</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Increase disc stress</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Cause chronic pain</li>
                            </ul>
                            <p>Correct posture reduces long-term spine damage.</p>

                            <p><b>16. IS minimally invasive spine surgery effective?</b></p>
                            <p><a href="{{ route('minimally-invasive-vs-open-spine-surgery') }}">Minimally invasive spine surgery</a>:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Uses smaller cuts</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Causes less pain</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Allows faster <a href="{{ route('spine-surgery-recovery-time') }}">recovery</a></li>
                            </ul>
                            <p>It is effective in selected patients. Learn more about <a href="{{ route('minimally-invasive-vs-open-spine-surgery') }}">MIS surgery benefits</a>.</p>

                            <p><b>17.What symptoms require urgent spine care (red flags)?</b></p>
                            <p>Seek immediate care if you have:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Progressive weakness</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Loss of bladder or bowel control</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Severe pain after injury</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Fever with back pain</li>
                            </ul>
                            <p>These may indicate serious conditions.</p>

                            <p><b>18.Can exercise and core strengthening help back pain?</b></p>
                            <p>Yes. Core exercises:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Support the spine</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Reduce recurrence of pain</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Improve flexibility</li>
                            </ul>
                            <p>They are essential for long-term relief.</p>

                            <p><b>19.What causes neck pain and stiffness?</b></p>
                            <p>Common causes include:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Poor posture</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Long mobile or laptop use</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Muscle strain</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Disc problems</li>
                            </ul>
                            <p>Early treatment prevents chronic neck pain. Learn about <a href="{{ route('cervical-spine-surgery-mumbai') }}">neck pain treatment options</a>.</p>

                            <p><b>20.How do I know if my back pain needs medical treatment?</b></p>
                            <p>You need medical evaluation if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain lasts more than 2–3 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain spreads to arms or legs</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Daily life is affected</li>
                            </ul>
                            <p>Early diagnosis leads to better outcomes. Consult <a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a>, a leading <a href="{{ route('back-pain-specialist-mumbai') }}">spine specialist in Mumbai</a>, at <a href="{{ route('best-hospital-spine-surgery-mumbai') }}">Bombay Hospital or Lilavati Hospital</a>. <a href="{{ route('contact') }}">Book your consultation</a> today.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

