@php($title = "Spine FAQs | Dr Vishal Kundnani | Back Pain, Sciatica, Slipped Disc & Spine Specialist Mumbai")

@section('meta_desc')
Answers to common questions about back pain, slipped disc, sciatica, cervical spine disorders and spine treatment by Dr Vishal Kundnani at Lilavati Hospital and Bombay Hospital serving Bandra and South Mumbai.
@endsection

@section('meta_keywords', "Spine FAQs, back pain specialist, sciatica treatment, slipped disc specialist, Dr Vishal Kundnani, spine surgeon Mumbai")

@extends('layouts.default')

@section('content')
<section class="spine-faqs-section pt-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="blog-profile">
                    <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.webp') }}" alt="Dr. Vishal Kundnani">
                    <h3>Dr. Vishal Kundnani</h3>
                    <span>MS (Ortho) FASSI, FNUS, FNAMS.</span><br>
                    <p class="bold-text">Dedicated spine specialist and spine surgeon in Mumbai.</p>
                    <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.webp') }}" alt="Call Dr. Vishal"></a>
                    <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.webp') }}" alt="Book Appointment" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="blog-profile-details spine-faqs-content">

                    <div class="row">
                        <div class="sec-blog-design pt-5">
                            <h1 class="modern-faq-title">Spine FAQs By Dr Vishal Kundnani</h1>
                            <img class="blog-hero-img" src="{{ asset('/resources/assets/img/blog/spine-faqs-by-dr-vishal-kundnani.png') }}" alt="Spine FAQs By Dr Vishal Kundnani">
                        </div>
                    </div>

                    <div class="modern-faq-container pt-5">
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">1. Which doctor should I consult for persistent back pain in Bandra or South Mumbai?</h3>
                            <div class="modern-faq-answer">
                                <p>Persistent <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a> associated with leg pain, numbness, tingling or weakness may benefit from specialist evaluation. Patients frequently search for Dr Vishal Kundnani spine specialist Bandra, Dr Vishal Kundnani spine surgeon South Mumbai, or back pain specialist near Lilavati Hospital when looking for assessment of spinal conditions.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">2. When should I see Dr Vishal Kundnani for sciatica symptoms?</h3>
                            <div class="modern-faq-answer">
                                <p><a href="{{ route('sciatica') }}" class="faq-interlink">Sciatica</a> symptoms such as pain extending into the leg, numbness, tingling or weakness that persist despite initial treatment may require further assessment. Patients commonly search for Dr Vishal Kundnani sciatica treatment Bandra and Dr Vishal Kundnani sciatica specialist South Mumbai.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">3. Can sciatica improve without surgery?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. Many patients improve with physiotherapy, medications, rehabilitation and activity modification. The appropriate treatment approach depends on symptoms, examination findings and imaging correlation.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">4. Does every slipped disc need surgery?</h3>
                            <div class="modern-faq-answer">
                                <p>No. Most slipped discs improve without surgery. Patients frequently searching Dr Vishal Kundnani <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}" class="faq-interlink">slipped disc</a> treatment Bandra are often looking for guidance regarding whether conservative treatment or intervention may be appropriate.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">5. What are the warning signs of a slipped disc?</h3>
                            <div class="modern-faq-answer">
                                <p>Common symptoms include:</p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> lower <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a></li>
                                    <li><i class="fa fa-check-circle"></i> pain extending into the leg</li>
                                    <li><i class="fa fa-check-circle"></i> numbness</li>
                                    <li><i class="fa fa-check-circle"></i> tingling</li>
                                    <li><i class="fa fa-check-circle"></i> weakness</li>
                                    <li><i class="fa fa-check-circle"></i> walking difficulty</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">6. Can neck pain cause hand numbness?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. <a href="{{ route('spondylosis') }}" class="faq-interlink">Cervical disc</a> problems or <a href="{{ route('spondylosis') }}" class="faq-interlink">cervical spondylosis</a> can sometimes irritate nerves supplying the arm and hand. Patients commonly search for Dr Vishal Kundnani cervical spine specialist Bandra and Dr Vishal Kundnani Bombay Hospital cervical spine specialist.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">7. Which doctor treats pain going down the leg?</h3>
                            <div class="modern-faq-answer">
                                <p>Pain radiating into the leg can occur because of spinal <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">nerve compression</a> and may require specialist evaluation. Patients frequently search for Dr Vishal Kundnani spine surgeon Bandra or Dr Vishal Kundnani spine specialist South Mumbai.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">8. What spine conditions are commonly evaluated by Dr Vishal Kundnani?</h3>
                            <div class="modern-faq-answer">
                                <p>Common conditions include:</p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> slipped disc</li>
                                    <li><i class="fa fa-check-circle"></i> sciatica</li>
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('spondylosis') }}" class="faq-interlink">cervical disc</a> disorders</li>
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">spinal stenosis</a></li>
                                    <li><i class="fa fa-check-circle"></i> scoliosis</li>
                                    <li><i class="fa fa-check-circle"></i> spine fractures</li>
                                    <li><i class="fa fa-check-circle"></i> spinal deformities</li>
                                    <li><i class="fa fa-check-circle"></i> degenerative spinal conditions</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">9. Can spine problems be treated without surgery?</h3>
                            <div class="modern-faq-answer">
                                <p>Many patients improve with:</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> physiotherapy</li>
                                    <li><i class="fa fa-check-circle"></i> rehabilitation</li>
                                    <li><i class="fa fa-check-circle"></i> activity modification</li>
                                    <li><i class="fa fa-check-circle"></i> medications</li>
                                    <li><i class="fa fa-check-circle"></i> image-guided procedures</li>
                                </ul>
                                </p>
                                <p>Treatment is individualized based on diagnosis and symptoms.
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">10. What types of spine procedures are performed for selected patients?</h3>
                            <div class="modern-faq-answer">
                                <p>Treatment options may include:</p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('minimal-invasive-spine-surgery') }}" class="faq-interlink">minimally invasive spine surgery</a></li>
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('micro-endoscopic-minimal-invasive-spine-surgery') }}" class="faq-interlink">endoscopic spine surgery</a></li>
                                    <li><i class="fa fa-check-circle"></i> microscopic spine surgery</li>
                                    <li><i class="fa fa-check-circle"></i> cervical spine surgery</li>
                                    <li><i class="fa fa-check-circle"></i> lumbar spine surgery</li>
                                    <li><i class="fa fa-check-circle"></i> revision spine surgery</li>
                                </ul>
                                </p>
                                <p>Patients commonly search for Dr Vishal Kundnani minimally invasive spine surgery Bandra and Dr Vishal Kundnani spine surgeon Bombay Hospital.
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">11. Why does my lower back pain keep returning?</h3>
                            <div class="modern-faq-answer">
                                <p>Recurring lower <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a> may occur due to disc problems, posture-related strain, spinal degeneration, muscle imbalance or <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">nerve compression</a>. Persistent symptoms may benefit from specialist evaluation to determine the underlying cause. Patients commonly searching for Dr Vishal Kundnani spine specialist Bandra, Dr Vishal Kundnani spine specialist South Mumbai, or a back pain specialist near Lilavati Hospital are often looking for assessment of recurring spine symptoms.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">12. Why do I have pain going down my leg?</h3>
                            <div class="modern-faq-answer">
                                <p>Pain extending from the lower back into the buttock or leg frequently occurs because of irritation of spinal nerves and may be associated with <a href="{{ route('sciatica') }}" class="faq-interlink">sciatica</a> or <a href="{{ route('degenerative-disc-disease') }}" class="faq-interlink">lumbar disc</a> problems. Patients frequently search for Dr Vishal Kundnani sciatica treatment Bandra when persistent leg pain begins affecting walking or daily activity.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">13. Why do I have tingling or numbness in my legs?</h3>
                            <div class="modern-faq-answer">
                                <p>Leg tingling or numbness may occur when spinal nerves become compressed by slipped discs, <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">spinal stenosis</a> or degenerative changes. Symptoms that persist or worsen deserve evaluation.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">14. Can severe lower back pain be serious?</h3>
                            <div class="modern-faq-answer">
                                <p>Many episodes improve naturally, but severe pain associated with weakness, numbness, balance problems or walking difficulty may require further assessment.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">15. Why does sitting make my back pain worse?</h3>
                            <div class="modern-faq-answer">
                                <p>Prolonged sitting increases pressure within spinal discs and can aggravate underlying <a href="{{ route('degenerative-disc-disease') }}" class="faq-interlink">lumbar disc</a> conditions. Symptoms that repeatedly return may require evaluation by a spine specialist.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">16. What is a slipped disc?</h3>
                            <div class="modern-faq-answer">
                                <p>A <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}" class="faq-interlink">slipped disc</a> occurs when disc material protrudes and irritates nearby nerves, producing lower <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a>, sciatica, numbness or weakness. Patients commonly search for Dr Vishal Kundnani slipped disc treatment Bandra and Dr Vishal Kundnani slipped disc specialist South Mumbai when symptoms persist.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">17. What are the early symptoms of a slipped disc?</h3>
                            <div class="modern-faq-answer">
                                <p>Early symptoms may include:</p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> lower <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a></li>
                                    <li><i class="fa fa-check-circle"></i> pain radiating into the leg</li>
                                    <li><i class="fa fa-check-circle"></i> tingling</li>
                                    <li><i class="fa fa-check-circle"></i> numbness</li>
                                    <li><i class="fa fa-check-circle"></i> weakness</li>
                                </ul>
                                </p>
                                <p>Many patients initially notice symptoms during prolonged sitting, travel or lifting activities.
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">18. What is sciatica?</h3>
                            <div class="modern-faq-answer">
                                <p><a href="{{ route('sciatica') }}" class="faq-interlink">Sciatica</a> refers to pain caused by irritation or compression of spinal nerves, usually producing pain extending into the buttock or leg. Patients commonly search for Dr Vishal Kundnani sciatica treatment Bandra or Dr Vishal Kundnani sciatica specialist South Mumbai for persistent symptoms.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">19. What is cervical spondylosis?</h3>
                            <div class="modern-faq-answer">
                                <p><a href="{{ route('spondylosis') }}" class="faq-interlink">Cervical spondylosis</a> refers to age-related changes involving the discs and joints of the neck. Symptoms may include neck pain, arm pain, tingling or hand numbness.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">20. What is spinal stenosis?</h3>
                            <div class="modern-faq-answer">
                                <p><a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">Spinal stenosis</a> refers to narrowing around spinal nerves that can produce pain, heaviness in the legs and walking difficulty, particularly in older adults.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">21. Can sciatica improve without surgery?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. Many patients improve through physiotherapy, medications, activity modification and structured rehabilitation. Treatment decisions are individualized according to symptoms and clinical findings.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">22. Does every slipped disc require surgery?</h3>
                            <div class="modern-faq-answer">
                                <p>No. Most slipped discs improve without surgery. Patients searching for Dr Vishal Kundnani spine surgeon Bandra or Dr Vishal Kundnani Bombay Hospital are often seeking guidance regarding whether surgery is actually required.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">23. What is the best treatment for cervical disc problems?</h3>
                            <div class="modern-faq-answer">
                                <p>Treatment depends on symptoms and may include physiotherapy, rehabilitation, medications and selected procedures where appropriate.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">24. What is minimally invasive spine surgery?</h3>
                            <div class="modern-faq-answer">
                                <p><a href="{{ route('minimal-invasive-spine-surgery') }}" class="faq-interlink">Minimally invasive spine surgery</a> uses specialized techniques designed to minimize tissue disruption while addressing the underlying spinal problem. Patients commonly search for Dr Vishal Kundnani minimally invasive spine surgery Bandra for these treatment options.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">25. What is endoscopic spine surgery?</h3>
                            <div class="modern-faq-answer">
                                <p><a href="{{ route('micro-endoscopic-minimal-invasive-spine-surgery') }}" class="faq-interlink">Endoscopic spine surgery</a> uses specialized visualization systems and smaller access pathways in selected conditions.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">26. When should I see a spine surgeon?</h3>
                            <div class="modern-faq-answer">
                                <p>Persistent pain, weakness, numbness, walking difficulty or symptoms affecting quality of life deserve evaluation.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">27. Should I get an MRI before consultation?</h3>
                            <div class="modern-faq-answer">
                                <p>MRI findings are useful but do not determine treatment alone. Symptoms, examination findings and function remain equally important.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">28. Should I seek a second opinion before spine surgery?</h3>
                            <div class="modern-faq-answer">
                                <p>Many patients seek additional evaluation when symptoms persist, recommendations differ or surgery is being considered.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">29. Is surgery always the first option?</h3>
                            <div class="modern-faq-answer">
                                <p>No. Many spinal conditions improve with conservative treatment and rehabilitation.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">30. How are treatment decisions individualized?</h3>
                            <div class="modern-faq-answer">
                                <p>Treatment decisions are based on symptoms, examination findings, imaging studies and individual patient goals rather than scans alone.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">31. Which spine specialist treats back pain near Lilavati Hospital?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients commonly search for Dr Vishal Kundnani spine specialist Bandra, Dr Vishal Kundnani Lilavati Hospital, or Dr Vishal Kundnani <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a> specialist near Lilavati Hospital for assessment of spinal conditions including back pain, sciatica and <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}" class="faq-interlink">slipped disc</a> symptoms.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">32. Which specialist evaluates sciatica in Bandra?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients frequently search for Dr Vishal Kundnani <a href="{{ route('sciatica') }}" class="faq-interlink">sciatica</a> treatment Bandra when leg pain and nerve symptoms affect daily activity.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">33. Which spine specialist evaluates cervical spine disorders in South Mumbai?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients commonly search for Dr Vishal Kundnani cervical spine specialist South Mumbai and Dr Vishal Kundnani Bombay Hospital for evaluation of <a href="{{ route('neck-pain-we-treat') }}" class="faq-interlink">neck pain</a> and cervical spine symptoms.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">34. Which specialist evaluates chronic back pain in South Mumbai?</h3>
                            <div class="modern-faq-answer">
                                <p>Persistent symptoms are commonly evaluated by a <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a> specialist South Mumbai, especially when symptoms affect work, mobility or daily activity.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">35. Which spine conditions commonly require specialist evaluation?</h3>
                            <div class="modern-faq-answer">
                                <p>Conditions commonly assessed include:</p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}" class="faq-interlink">slipped disc</a></li>
                                    <li><i class="fa fa-check-circle"></i> sciatica</li>
                                    <li><i class="fa fa-check-circle"></i> cervical spine disorders</li>
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">spinal stenosis</a></li>
                                    <li><i class="fa fa-check-circle"></i> scoliosis</li>
                                    <li><i class="fa fa-check-circle"></i> spinal deformity</li>
                                    <li><i class="fa fa-check-circle"></i> spine fractures</li>
                                    <li><i class="fa fa-check-circle"></i> degenerative spinal conditions</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">36. Can spine problems cause weakness in the legs?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. Compression of spinal nerves can sometimes affect muscle strength and produce weakness in the legs. Weakness associated with pain, numbness or walking difficulty deserves evaluation because early identification may influence treatment decisions.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">37. How do I know if my symptoms are due to nerve compression?</h3>
                            <div class="modern-faq-answer">
                                <p>Symptoms that may suggest nerve involvement include:</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> pain radiating into the arm or leg</li>
                                    <li><i class="fa fa-check-circle"></i> tingling</li>
                                    <li><i class="fa fa-check-circle"></i> numbness</li>
                                    <li><i class="fa fa-check-circle"></i> weakness</li>
                                    <li><i class="fa fa-check-circle"></i> altered sensation</li>
                                </ul>
                                </p>
                                <p>Persistent symptoms may require specialist assessment.
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">38. Why does my pain increase while walking?</h3>
                            <div class="modern-faq-answer">
                                <p>Pain worsening with walking may sometimes occur due to lumbar <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">spinal stenosis</a> or <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">nerve compression</a>. This is particularly common in older adults who notice leg heaviness or reduced walking tolerance.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">39. Why does my back pain become worse at night?</h3>
                            <div class="modern-faq-answer">
                                <p>Night pain can occur for several reasons including posture, inflammation, degenerative changes and mechanical strain. Persistent night pain should be assessed in the appropriate clinical context.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">40. Can spinal problems affect balance?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. Certain cervical or lumbar spine conditions affecting nerves or the spinal cord can occasionally contribute to balance difficulty.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">41. Which spine specialist treats back pain near Lilavati Hospital?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients commonly search for Dr Vishal Kundnani spine specialist Bandra, Dr Vishal Kundnani Lilavati Hospital, or Dr Vishal Kundnani <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a> specialist near Lilavati Hospital for evaluation of lower back pain, <a href="{{ route('sciatica') }}" class="faq-interlink">sciatica</a> and spinal disorders.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">42. Which specialist evaluates sciatica in Bandra?</h3>
                            <div class="modern-faq-answer">
                                <p>Persistent leg pain, numbness or symptoms extending below the knee frequently prompt patients to search for Dr Vishal Kundnani <a href="{{ route('sciatica') }}" class="faq-interlink">sciatica</a> treatment Bandra and Dr Vishal Kundnani spine surgeon Bandra for further assessment.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">43. Which doctor evaluates slipped disc problems in Bandra?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients commonly search for Dr Vishal Kundnani <a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}" class="faq-interlink">slipped disc</a> treatment Bandra when symptoms such as lower <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a>, leg pain or tingling interfere with work or daily activity.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">44. Which spine specialist evaluates cervical spine problems in South Mumbai?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients commonly search for Dr Vishal Kundnani cervical spine specialist South Mumbai or Dr Vishal Kundnani Bombay Hospital when evaluating <a href="{{ route('neck-pain-we-treat') }}" class="faq-interlink">neck pain</a>, hand numbness or arm symptoms.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">45. Which specialist evaluates chronic back pain in South Mumbai?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients searching for a <a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">back pain</a> specialist South Mumbai often seek evaluation for persistent symptoms that have not improved despite medications, physiotherapy or previous treatment.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">46. Which spine surgeon practices in South Mumbai?</h3>
                            <div class="modern-faq-answer">
                                <p>Patients frequently search for Dr Vishal Kundnani spine surgeon South Mumbai or Dr Vishal Kundnani spine specialist Bombay Hospital while seeking evaluation for slipped discs, <a href="{{ route('sciatica') }}" class="faq-interlink">sciatica</a>, stenosis or complex spinal conditions.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">47. Which spine conditions commonly require specialist evaluation?</h3>
                            <div class="modern-faq-answer">
                                <p>Conditions commonly evaluated include:</p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> slipped disc</li>
                                    <li><i class="fa fa-check-circle"></i> sciatica</li>
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('spondylosis') }}" class="faq-interlink">cervical disc</a> disorders</li>
                                    <li><i class="fa fa-check-circle"></i> <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">spinal stenosis</a></li>
                                    <li><i class="fa fa-check-circle"></i> scoliosis</li>
                                    <li><i class="fa fa-check-circle"></i> spine fractures</li>
                                    <li><i class="fa fa-check-circle"></i> spinal deformity</li>
                                    <li><i class="fa fa-check-circle"></i> degenerative spine disorders</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">48. Can spine problems affect walking?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. Compression of nerves or <a href="{{ route('spinal-stenosis-we-treat') }}" class="faq-interlink">spinal stenosis</a> can affect walking tolerance and may produce heaviness, pain or weakness in the legs.</p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">49. Can neck problems cause arm symptoms?</h3>
                            <div class="modern-faq-answer">
                                <p>Yes. Cervical spine conditions may sometimes produce arm pain, numbness, tingling or weakness because of nerve irritation.</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                            </div>
                        </div>
                        <div class="modern-faq-item">
                            <h3 class="modern-faq-question">50. How are treatment decisions individualized for spine problems?</h3>
                            <div class="modern-faq-answer">
                                <p>Treatment decisions are based on several factors including:</p>
                                <p><a href="{{ route('back-pain-we-treat') }}" class="faq-interlink">Read more about our treatments</a></p>
                                <ul class="modern-faq-list">
                                    <li><i class="fa fa-check-circle"></i> symptoms</li>
                                    <li><i class="fa fa-check-circle"></i> examination findings</li>
                                    <li><i class="fa fa-check-circle"></i> MRI or imaging findings</li>
                                    <li><i class="fa fa-check-circle"></i> neurological status</li>
                                    <li><i class="fa fa-check-circle"></i> functional limitation</li>
                                    <li><i class="fa fa-check-circle"></i> patient goals</li>
                                </ul>
                                </p>
                                <p>Patients frequently seeking evaluation with Dr Vishal Kundnani spine specialist Bandra or Dr Vishal Kundnani spine specialist South Mumbai are often looking for individualized treatment approaches rather than one standard solution for every condition.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop