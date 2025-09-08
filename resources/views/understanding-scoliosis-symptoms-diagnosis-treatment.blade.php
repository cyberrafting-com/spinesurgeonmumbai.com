@php($title = 'Understanding Scoliosis: Symptoms, Diagnosis, and Treatment | Dr. Vishal Kundnani')

@section('meta_desc')
    Learn about scoliosis symptoms, diagnosis, and effective treatment options with Dr. Vishal Kundnani in Mumbai. Book a consultation today!
@endsection

@section('meta_keywords',
    'Scoliosis symptoms, scoliosis treatment Mumbai, scoliosis diagnosis, best scoliosis surgeon Mumbai, Dr. Vishal Kundnani, spine surgery Mumbai')

@section('schema')
    <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "MedicalBusiness",
    "name": "Dr. Vishal Kundnani - Scoliosis Specialist",
    "description": "Dr. Vishal Kundnani is a top scoliosis surgeon in Mumbai, offering advanced treatment options like minimally invasive surgery and robotic-assisted spinal correction.",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Lilavati Hospital, Bandra West",
        "addressLocality": "Mumbai",
        "addressRegion": "Maharashtra",
        "postalCode": "400050",
        "addressCountry": "IN"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-9619100123",
        "contactType": "Customer Service",
        "areaServed": "IN",
        "availableLanguage": "English"
    },
    "sameAs": [
        "https://www.lilavathihospital.com",
        "https://www.bombayhospital.com"
    ],
    "medicalSpecialty": "Spine Surgery",
    "url": "https://www.lilavathihospital.com/dr-vishal-kundnani"
    }
    </script>
@endsection


@extends('layouts.default')

@section('content')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar/Profile -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="blog-profile">
                        <img src="{{ asset('resources/assets/img/dr-vishal-blog-profile.jpg') }}" alt="Dr. Vishal Kundnani" class="img-responsive mb-3">
                        <h3>Dr. Vishal Kundnani</h3>
                        <span>MS (Ortho), FASSI, FNUS, FNAMS</span>
                        <p class="bold-text">India's most trusted spine surgeon, expert in minimally invasive scoliosis surgery.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="Call Now"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="Book Appointment" class="img-responsive mt-2"></a>
                    </div>
                </div>
                <!-- Main Content -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="blog-profile-details">
                        <div class="sec-blog-design pt-5">
                            <h1>Understanding Scoliosis: Symptoms, Diagnosis, and Treatment</h1>
                            <img src="{{ asset('resources/assets/img/blog/scoliosis-symptoms-img.png') }}" alt="Understanding Scoliosis" class="img-responsive mb-4">
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>What is Scoliosis?</h2>
                            <p><a href="{{ route('scoliosis') }}">Scoliosis</a> is a condition in which the spine curves sideways, often forming an "S" or "C" shape. This condition can affect people of all ages, from children to adults. Early detection is crucial in preventing the condition from worsening. While mild cases might go unnoticed, more pronounced curvatures can cause visible deformities and lead to physical symptoms, including discomfort and movement difficulties.<br>
                            Scoliosis can be caused by a variety of factors. In many cases, it is idiopathic, meaning the cause is unknown, but it can also result from other conditions like muscular dystrophy, cerebral palsy, or birth defects. In adolescents, scoliosis is commonly diagnosed during growth spurts, which is why regular check-ups are essential during this period.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Common Symptoms of Scoliosis</h2>
                            <p>Some of the early signs of scoliosis may include:</p>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Uneven shoulders or shoulder blades</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>One hip higher than the other</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Visible curve or tilt of the back</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><a href="{{ route('back-pain') }}">Back pain</a> or discomfort, especially after physical activity</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Fatigue or muscle weakness after prolonged activity</p>
                            </div>
                            
                            <p>In some cases, scoliosis can progress without significant pain, but if left untreated, it can lead to more severe complications such as difficulty breathing or problems with posture.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Diagnosis of Scoliosis</h2>
                            <p>The diagnosis of scoliosis begins with a thorough physical examination. During the examination, the doctor will observe the posture, alignment of the back, and any visible signs of curvature. If scoliosis is suspected, imaging tests like X-rays are used to assess the degree of curvature and determine whether the condition is progressing.<br>
                            Scoliosis is typically classified into three categories based on the severity of the curve:</p>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Mild Scoliosis (less than 25 degrees)</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Moderate Scoliosis (25–45 degrees)</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Severe Scoliosis (more than 45 degrees)</p>
                            </div>
                            
                            <p>Once diagnosed, doctors will evaluate the patient's age and growth potential to determine the most appropriate treatment approach.</p>
                            <p>At our <a href="{{ route('about-mumbai-institute-of-spine-surgery') }}">Mumbai Institute of Spine Surgery (M.I.S.S)</a>, we use advanced diagnostic techniques to ensure accurate assessment of scoliosis cases.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Treatment Options for Scoliosis</h2>
                            <p>The treatment plan for scoliosis depends on the severity of the condition and the age of the patient. Treatment options include:</p>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Observation and Exercises:</strong> For mild scoliosis, doctors may recommend regular monitoring and exercises that help improve posture and strengthen the muscles supporting the spine. <a href="{{ route('physiotherapy-in-spine') }}">Physical therapy</a> can also help with flexibility and reduce pain.</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Bracing:</strong> For moderate scoliosis, a brace may be recommended, especially if the patient is still growing. The brace helps prevent the curve from worsening and can be worn under clothing for most of the day.</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Surgical Intervention:</strong> In more severe cases, or if the curve is progressing, surgery may be necessary to correct the spine's curvature. Traditional open surgery can be used, but modern advancements have led to the development of <a href="{{ route('minimal-invasive-spine-surgery') }}">minimally invasive scoliosis surgery</a>, which is less traumatic and offers a quicker recovery time.</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Minimally Invasive Surgery:</strong> <a href="{{ route('micro-endoscopic-minimal-invasive-spine-surgery') }}">Minimally invasive surgery</a> uses smaller incisions and advanced imaging technology to correct the spinal curve with greater precision. This technique offers several benefits over traditional surgery, including:</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Faster recovery times</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Less pain and discomfort</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Smaller scars and less blood loss</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p>Reduced risk of complications</p>
                            </div>
                            
                            <div class="cat-service-inner pt-5">
                                <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                                <p><strong>Robotic-Assisted Surgery:</strong> Robotic systems allow for even greater precision in scoliosis surgery. Using 3D imaging and tailored implants, robotic-assisted surgery ensures optimal alignment of the spine, improving both safety and long-term outcomes.</p>
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Scoliosis Treatment Centers in India</h2>
                            <p>Patients from various cities including Mumbai, Delhi, Pune, Nashik, Thane, Navi Mumbai, Raipur, Indore, Bhopal, Jaipur, and others can access top-quality scoliosis treatment at leading hospitals such as Lilavati Hospital, Bombay Hospital, Breach Candy Hospital, and Saifee Hospital.</p>
                            <p>Our <a href="{{ route('about-centre-of-excellence-in-spine-surgery') }}">Centre of Excellence in Spine Surgery (C.E.S.S)</a> provides comprehensive care for all spine-related conditions including scoliosis.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Why Choose Dr. Vishal Kundnani for Scoliosis Treatment?</h2>
                            <p>Dr. Vishal Kundnani is the Director and Head of Spine Services at Lilavati and Bombay Hospitals. He is considered one of the leading scoliosis specialists in India, known for his expertise in both traditional and minimally invasive scoliosis surgeries. With over 15 years of experience, Dr. Kundnani offers personalized treatment plans that are tailored to each patient's specific needs. His advanced surgical techniques ensure the best possible outcomes with minimal recovery time.</p>
                            <p>Learn more about our <a href="{{ route('spine-team') }}">spine team</a> and their expertise in treating various spine conditions including <a href="{{ route('herniated-disc') }}">herniated disc</a>, <a href="{{ route('spinal-stenosis') }}">spinal stenosis</a>, and <a href="{{ route('spondylolisthesis') }}">spondylolisthesis</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2>Schedule Your Consultation</h2>
                            <p>If you or your child is experiencing symptoms of scoliosis, don't wait to get professional advice. Early intervention can significantly improve outcomes and prevent further complications.<br>
                            <strong>📞 Call: <a href="tel:9619100123">9619100123</a>, <a href="tel:9619200123">9619200123</a>, <a href="tel:9619300123">9619300123</a></strong> to consult Dr. Vishal Kundnani, the best scoliosis surgeon in Mumbai and India.</p>
                            <p>Visit our <a href="{{ route('contact') }}">contact page</a> for more information or to schedule an appointment. You can also explore our <a href="{{ route('testimonials') }}">patient testimonials</a> and <a href="{{ route('case-of-minimal-invasive-spine') }}">case studies</a> to learn about successful scoliosis treatments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
