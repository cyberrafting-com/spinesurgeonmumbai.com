@php($title = "What Is Sciatica and Why Does It Happen? | Dr. Vishal Kundnani")

@section('meta_desc')
What is sciatica? Learn why sciatica happens, common symptoms, treatment options, and when to see a doctor—explained simply.
@endsection

@section('meta_keywords',
"Sciatica, sciatic nerve pain, sciatica symptoms, sciatica treatment, sciatica causes, leg pain, lower back pain, sciatica specialist Mumbai, Dr. Vishal Kundnani, sciatica diagnosis")

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalBusiness",
      "name": "Dr. Vishal Kundnani - Sciatica Specialist in Mumbai",
      "description": "Dr. Vishal Kundnani provides comprehensive sciatica diagnosis and treatment in Mumbai, helping patients understand what sciatica is, why it happens, and treatment options.",
      "url": "https://www.spinesurgeonmumbai.com/sciatica",
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
          "name": "Is sciatica permanent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Most cases improve with treatment."
          }
        },
        {
          "@type": "Question",
          "name": "Can sciatica go away on its own?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, many patients recover without surgery."
          }
        },
        {
          "@type": "Question",
          "name": "Is walking good for sciatica?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, gentle walking helps recovery."
          }
        },
        {
          "@type": "Question",
          "name": "Does sciatica affect both legs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usually only one leg is affected."
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
                                <h1>What Is Sciatica and Why Does It Happen?</h1>
                                <img class="blog-hero-img" src="https://s3.ap-south-1.amazonaws.com/cdn1.cr/spinesurgeon-mumbai/blog/sciatic-nerve-img.webp" alt="What Is Sciatica and Why Does It Happen?">
                                <p>Pain that starts in the <a href="{{ route('back-pain-blog') }}">lower back</a> and travels down the leg can be alarming.</p>
                                <p>Many patients describe it as sharp, burning, or electric-like pain.</p>
                                <p>This type of pain is commonly called <a href="{{ route('sciatica-pain-treatment-mumbai') }}">sciatica</a>, and understanding its cause helps reduce fear and guide proper treatment.</p>
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Quick Answer: What Is Sciatica?</h2>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Sciatica is pain caused by irritation of the sciatic nerve</li>
                                <li style="list-style-type: disc; padding: 5px 0;">It usually starts in the lower back or buttock</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain travels down one leg</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Most cases improve with non-surgical treatment</li>
                            </ul>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>What Is the Sciatic Nerve?</h2>
                            <p>The sciatic nerve is:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">The largest nerve in the body</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Formed by nerves from the lower spine</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Responsible for sensation and movement of the leg</li>
                            </ul>
                            <p>When this nerve is compressed or irritated, sciatica occurs.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Why Does Sciatica Happen?</h2>
                            
                            <p><b>1. Slipped (Herniated) Disc</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Most common cause</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Disc presses on the sciatic nerve</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Causes leg pain and numbness</li>
                            </ul>
                            <p>Learn more about <a href="{{ route('herniated-disc-treatment-india') }}">slipped disc treatment</a>.</p>

                            <p><b>2. Spine Degeneration</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Age-related disc and joint changes</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Narrowing of nerve passages</li>
                            </ul>
                            <p>Learn about <a href="{{ route('back-pain-blog') }}">age-related back pain</a> and treatment options.</p>

                            <p><b>3. Muscle Spasm or Tight Muscles</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Piriformis muscle irritation</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Can press on the sciatic nerve</li>
                            </ul>

                            <p><b>4. Spinal Canal Narrowing</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Reduced space for nerves</li>
                                <li style="list-style-type: disc; padding: 5px 0;">More common in older adults</li>
                            </ul>
                            <p>This condition is also known as <a href="{{ route('spinal-stenosis-treatment-mumbai') }}">spinal stenosis</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Common Symptoms of Sciatica</h2>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain radiating from back to leg</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Tingling or pins-and-needles sensation</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Numbness in leg or foot</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Weakness in leg muscles</li>
                            </ul>
                            <p>Sciatica usually affects one side of the body.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>When Should You Worry About Sciatica?</h2>
                            <p>Seek medical attention if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain is severe or worsening</li>
                                <li style="list-style-type: disc; padding: 5px 0;">There is progressive weakness</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Walking becomes difficult</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Bladder or bowel control is affected</li>
                            </ul>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>How Is Sciatica Diagnosed?</h2>
                            <p>Diagnosis includes:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Medical history</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Physical examination</li>
                                <li style="list-style-type: disc; padding: 5px 0;">MRI scan (only if symptoms persist or worsen)</li>
                            </ul>
                            <p>Most patients do not need immediate imaging. Consult <a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a> for expert <a href="{{ route('back-pain-specialist-mumbai') }}">spine diagnosis</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Treatment Options for Sciatica</h2>
                            <p><b>Conservative Treatment (First Line)</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain-relief medications</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Physiotherapy</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Stretching and strengthening exercises</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Activity modification</li>
                            </ul>
                            <p>Many patients find relief with <a href="{{ route('sciatica-pain-treatment-mumbai') }}">conservative sciatica treatment</a>.</p>

                            <p><b>Advanced Non-Surgical Treatment</b></p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Targeted nerve injections</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Guided spine rehabilitation</li>
                            </ul>

                            <p><b>Surgical Treatment (Rare Cases)</b></p>
                            <p>Surgery is considered only if:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Pain persists despite treatment</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Significant weakness develops</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Daily life is severely affected</li>
                            </ul>
                            <p>When surgery is needed, <a href="{{ route('minimally-invasive-vs-open-spine-surgery') }}">minimally invasive spine surgery</a> offers faster recovery. Learn about <a href="{{ route('sciatica-pain-treatment-mumbai') }}">sciatica surgery options</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>How Long Does Sciatica Take to Heal?</h2>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Mild cases: 2–4 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Moderate cases: 6–8 weeks</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Chronic cases may take longer but still improve with care</li>
                            </ul>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Can Sciatica Be Prevented?</h2>
                            <p>Yes, prevention includes:</p>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;">Regular exercise</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Core muscle strengthening</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Good posture</li>
                                <li style="list-style-type: disc; padding: 5px 0;">Avoiding prolonged sitting</li>
                            </ul>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Frequently Asked Questions</h2>
                            <p><b>Is sciatica permanent?</b></p>
                            <p>No. Most cases improve with treatment.</p>
                            
                            <p><b>Can sciatica go away on its own?</b></p>
                            <p>Yes, many patients recover without surgery. Learn about <a href="{{ route('sciatica-pain-treatment-mumbai') }}">non-surgical sciatica treatment</a>.</p>
                            
                            <p><b>Is walking good for sciatica?</b></p>
                            <p>Yes, gentle walking helps recovery. Combined with <a href="{{ route('back-pain-blog') }}">back pain exercises</a>, it can improve symptoms.</p>
                            
                            <p><b>Does sciatica affect both legs?</b></p>
                            <p>Usually only one leg is affected.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Call to Action</h2>
                            <p>If leg pain or numbness is limiting your daily activities, early consultation with a <a href="{{ route('back-pain-specialist-mumbai') }}">spine specialist</a> like <a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a> can help relieve symptoms and prevent worsening. Consult at <a href="{{ route('best-hospital-spine-surgery-mumbai') }}">Bombay Hospital or Lilavati Hospital</a> in Mumbai. <a href="{{ route('contact') }}">Book your consultation</a> today for expert <a href="{{ route('sciatica-pain-treatment-mumbai') }}">sciatica treatment</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Medical Disclaimer</h2>
                            <p>This information is for educational purposes only and does not replace professional medical advice.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

