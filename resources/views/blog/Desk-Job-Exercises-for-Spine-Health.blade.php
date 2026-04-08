@php($title = "Desk Job Exercises for Spine Health")

@section('meta_desc')
Spending long hours at a desk can take a toll on your spine. Learn simple desk job exercises for spine health, tips for maintaining posture, and when to seek professional help from Dr. Vishal Kundnani.
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
                        <p class="bold-text">Dedicated <a href="{{ route('laser-spine-surgery-is-it-safe-and-effective') }}">laser spine surgeon in Mumbai</a>.</p>
                        <a href="tel:+919619100123"><img src="{{ asset('resources/assets/img/call-us-blog-button.png') }}" alt="Call Dr. Vishal"></a>
                        <a href="{{ route('contact') }}"><img src="{{ asset('resources/assets/img/book-btn.png') }}" alt="Book Appointment" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-profile-details">

                        <div class="row">
                            <div class="sec-blog-design pt-5">
                                <h1><b>Desk Job Exercises for Spine Health</b></h1>
                                <img class="blog-hero-img" src="{{ asset('resources/assets/img/blog/Desk-Job-Exercises-for-Spine-Health.png') }}" alt="Desk Job Exercises for Spine Health" style="max-height: 500px; width: auto; margin: 0 auto;">
                                <p>Spending long hours at a desk can take a toll on your spine, especially when you have to sit for extended periods. This can lead to poor posture, <a href="{{ route('back-pain') }}">back pain</a>, and other spine-related issues. However, incorporating simple exercises into your daily routine can help alleviate discomfort, improve posture, and maintain spine health.</p>
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2><b>Why Spine Health Matters for Desk Job Workers</b></h2>
                            <p>Sitting for hours at a desk can cause the spine to become misaligned, leading to poor posture, back pain, and even long-term damage. When sitting, it’s easy to slouch, which puts additional pressure on the spinal discs, muscles, and ligaments. Over time, this can result in conditions like lower back pain, neck pain, or even <a href="{{ route('herniated-disc') }}">herniated discs</a>.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2><b>Essential Desk Job Exercises for Spine Health</b></h2>

                            <div class="gallery1 shorts-card" style="margin-top: 20px; margin-bottom: 20px; max-width: 400px; margin-left: auto; margin-right: auto;">
                                <iframe width="100%" height="550"
                                    src="https://youtube.com/embed/ZOo2j_uxiMs" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                <h1 style="font-size: 18px; color: #ffffff; text-align: center; padding: 10px;">Exercises for Spine Health: Tips from Dr. Vishal Kundnani</h1>
                            </div>
                            
                            <h3 class="pt-3"><b>Seated Spinal Twist</b></h3>
                            <p>Sit up straight in your chair with your feet flat on the ground. Slowly twist your upper body to the right while keeping your hips forward. Hold for 15-30 seconds and then repeat on the left side. This stretch helps increase spinal mobility and reduces stiffness.</p>

                            <h3 class="pt-3"><b>Neck Stretches</b></h3>
                            <p>To prevent <a href="{{ route('neck-pain') }}">neck stiffness</a>, gently tilt your head to one side, bringing your ear toward your shoulder. Hold for 15-30 seconds and repeat on the other side. Perform this exercise regularly to keep your neck muscles relaxed and avoid strain.</p>

                            <h3 class="pt-3"><b>Shoulder Rolls</b></h3>
                            <p>Sitting tall, roll your shoulders forward in a circular motion for 10 repetitions. Afterward, roll them backward. This simple exercise helps release tension in the upper back and shoulders, which often become tight during desk work.</p>

                            <h3 class="pt-3"><b>Cat-Cow Stretch</b></h3>
                            <p>Sit upright and place your hands on your knees. Inhale and arch your back (Cow), then exhale and round your back (Cat). Repeat this stretch 5-10 times to help improve spinal flexibility and reduce <a href="{{ route('back-pain') }}">lower back stiffness</a>.</p>

                            <h3 class="pt-3"><b>Seated Forward Bend</b></h3>
                            <p>While seated, extend your legs straight out in front of you, keeping your feet flat. Slowly hinge at the hips and reach your hands toward your feet. Hold for 15-30 seconds. This stretch helps to elongate the spine and release tension in the lower back and hamstrings.</p>

                            <h3 class="pt-3"><b>Chair Squats</b></h3>
                            <p>Stand in front of your chair with your feet shoulder-width apart. Slowly lower your body, as though you were going to sit down, but stop just before you reach the chair. Hold for a few seconds, then return to a standing position. This <a href="{{ route('exercises') }}">exercise</a> helps strengthen the legs and support the spine.</p>

                            <h3 class="pt-3"><b>Wrist and Finger Stretches</b></h3>
                            <p>Spending time typing or using a mouse can cause wrist strain. Stretch your wrists and fingers by extending your arm in front of you and gently pulling back on your fingers with the other hand. Hold for 15-30 seconds on each hand.</p>

                            <h3 class="pt-3"><b>Pelvic Tilts</b></h3>
                            <p>While seated, place your feet flat on the floor and gently tilt your pelvis forward and backward. This small movement can help activate the lower back and <a href="{{ route('patient-education') }}">improve posture</a>.</p>
                        </div>


                        <div class="sec-blog-design pt-5">
                            <h2><b>Tips for Maintaining Spine Health at Your Desk</b></h2>
                            <ul>
                                <li style="list-style-type: disc; padding: 5px 0;"><b>Proper Desk Setup:</b> Ensure that your desk, chair, and computer are set up to promote good posture. Your screen should be at eye level, your shoulders should be relaxed, and your knees should be at a 90-degree angle when sitting.</li>
                                <li style="list-style-type: disc; padding: 5px 0;"><b>Take Frequent Breaks:</b> Stand up, walk around, and stretch every 30 to 60 minutes to reduce the strain on your spine.</li>
                                <li style="list-style-type: disc; padding: 5px 0;"><b>Strengthen Core Muscles:</b> Incorporate core-strengthening exercises into your routine to support your spine and improve posture.</li>
                            </ul>

                            <div class="gallery1 shorts-card" style="margin-top: 20px; margin-bottom: 20px; max-width: 400px; margin-left: auto; margin-right: auto;">
                                <iframe width="100%" height="550"
                                    src="https://youtube.com/embed/Wmn4UTE0dO4?si=dDt1P6d_f4RgtH80" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                <h1 style="font-size: 18px; color: #ffffff; text-align: center; padding: 10px;">Benefits of Standing Desks for Spine Health: Tips from Spine Surgeon | Dr. Vishal Kundnani</h1>
                            </div>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2><b>When to Seek Professional Help</b></h2>
                            <p>If you’re experiencing chronic back pain, neck pain, or discomfort despite doing exercises, it might be time to consult a spine specialist. Conditions like herniated discs, <a href="{{ route('sciatica') }}">sciatica</a>, or <a href="{{ route('degenerative-disc-disease') }}">degenerative disc disease</a> may require medical attention.</p>
                        </div>

                        <div class="sec-blog-design pt-5">
                            <h2><b>Consult Dr. Vishal Kundnani for Spine Health</b></h2>
                            <p>If you’re experiencing persistent back or <a href="{{ route('neck-pain') }}">neck pain</a> and need expert advice, consider consulting <a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a>, a leading <a href="{{ route('minimal-invasive-spine-surgery') }}">Minimal Invasive Spine Surgery</a> Specialist. Dr. Kundnani specializes in Cervical Spine and <a href="{{ route('scoliosis') }}">Scoliosis Surgery</a>, <a href="{{ route('micro-endoscopic-minimal-invasive-spine-surgery') }}">Microendoscopic Spine Surgery</a>, and is the Director & Head of Spine Surgery at the Center of Excellence in Spine Surgery, Lilavati Hospital, Bandra, Mumbai.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
