<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spine Clinic Mumbai - Minimally Invasive Spine Surgery</title>
    <link rel="stylesheet" href="{{ asset('resources/assets/landing-page/css/style2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-1hctYcZMWvx6bMpiKFFitvolG/G5hgbf+5Q5e0siJmq9hw3rroWAtxEvsC0BpvyOuk+qS0bkkCm1cWUGXcYFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .doctor-section .contact-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .doctor-section .contact-col-6 {
            flex: 1 1 calc(50% - 10px);
            max-width: calc(50% - 10px);
        }

        @media (max-width: 768px) {
            .doctor-section .contact-col-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .doctor-section .doctor-info .doctor-subheading {
            margin-top: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .doctor-section .doctor-info .doctor-highlight,
        .doctor-section .doctor-info .doctor-description {
            margin-bottom: 1rem;
        }

        .doctor-section .doctor-info .doctor-specialization-list {
            margin-bottom: 1rem;
            padding-left: 1.25rem;
        }

        .doctor-section .doctor-info .doctor-specialization-list li {
            margin-bottom: 0.35rem;
        }

        @media (max-width: 576px) {
            .doctor-section .doctor-info {
                margin-top: 20px;
            }

            .doctor-section .doctor-info .doctor-subheading {
                margin-top: 1rem;
            }

            .doctor-section .doctor-info p,
            .doctor-section .doctor-info ul {
                margin-bottom: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header Navigation -->
    <!-- <header class="header">
        <div class="container">
            <div class="logo">
                <div class="logo-icon"></div>
                <span>Spine Clinic Mumbai</span>
            </div>
            <nav class="nav-menu">
                <a href="#home">Home</a>
                <a href="#why-choose">Why Choose</a>
                <a href="#what-we-treat">Conditions</a>
                <a href="#procedure">Procedure</a>
                <a href="#doctor">Doctor</a>
                <a href="#location">Location</a>
            </nav>
            <div class="header-cta">
                <a href="tel:+919619100123" class="btn-call">Call Now</a>
            </div>
        </div>
    </header> -->

    <!-- Sticky Appointment Form -->
    <aside class="sticky-form">
        <div class="form-container">
            <h3>Book  Consultation</h3>
            <form id="appointmentForm" class="appointment-form">
                <div class="form-group">
                    <input type="text" id="patientName" placeholder="Patient Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="mobileNumber" class="mobile-input" placeholder="Mobile Number" required pattern="[0-9]{10}" inputmode="numeric" maxlength="10" title="Please enter a 10-digit Indian mobile number">
                </div>
                <div class="form-group">
                    <select id="selectCity" required>
                        <option value="">Select City</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="pune">Pune</option>
                        <option value="delhi">Delhi</option>
                        <option value="bangalore">Bangalore</option>
                    </select>
                </div>
                <button type="submit" class="btn-submit">Book  Appointment</button>
            </form>
            <!-- <div class="form-rating">
                <p>We are rated</p>
                <div class="stars">
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star">★</span>
                </div>
            </div> -->
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Banner Section -->
        <section id="home" class="banner-section">
    <div class="banner-overlay"></div>
    <div class="banner-content">
        <div class="banner-text">
            <h1 class="banner-headline">Get Back to a Pain-Free Life with Expert Spine Surgery!</h1>
            <p class="banner-subtext">Small incision. Quicker recovery. Expert spinal care in Mumbai.</p>

            <div class="banner-cta">
                <button type="button" class="cta-button appointment" data-bs-toggle="modal" data-bs-target="#appointmentModal" aria-label="Book Appointment" style="border: none;  outline: none;">
                    <span class="cta-icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
                    <span>Book Appointment</span>
                </button>
            </div>
        </div>

        <div class="banner-image">
            <div class="doctor-image-placeholder">
                <img src="{{ asset('resources/assets/landing-page/images/dr-vishal.jpg') }}" alt="Dr. Vishal Kundnani">
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content appointment-modal-custom">

    <div class="modal-header appointment-modal-header-custom d-flex justify-content-between align-items-center">
    <h3 class="modal-title mb-0" id="appointmentModalLabel" style="font-size: 25px; font-weight: 600;font-bold: 700;">Book  Consultation</h3>

    <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close"style="border: none; background: transparent; outline: none;">
        <i class="fa-solid fa-times"></i>
    </button>
</div>


      <div class="modal-body appointment-modal-body-custom">
        <form id="appointmentFormModal" class="appointment-form">

          <div class="form-group" style="border: 1px solid #949292; border-radius: 8px;" >
            <input type="text" id="patientNameModal" name="patientName" placeholder="Patient Name" required>
          </div>

          <div class="form-group" style="border: 1px solid #949292; border-radius: 8px;">
            <input type="tel" id="mobileNumberModal" name="mobileNumber" class="mobile-input" placeholder="Mobile Number" required pattern="[0-9]{10}" inputmode="numeric" maxlength="10" title="Please enter a 10-digit Indian mobile number">
          </div>

          <div class="form-group" style="border: 1px solid #949292; border-radius: 8px; "            >
            <select id="selectCityModal" name="selectCity" required>
              <option value="">Select City</option>
              <option value="mumbai">Mumbai</option>
              <option value="pune">Pune</option>
              <option value="delhi">Delhi</option>
              <option value="bangalore">Bangalore</option>
            </select>
          </div>

          <button type="submit" class="btn-submit">Book Appointment</button>

        </form>
      </div>

    </div>
  </div>
</div>

        <!-- Why Choose Section -->
        <section id="why-choose" class="section why-choose-section">
            <div class="container">
                <h2 class="section-title">Why Choose Spine Clinic Mumbai?</h2>
                <p class="section-intro">Trusted expertise, modern techniques, and compassionate care—every step of your spine treatment is handled with precision.</p>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon"><img src="resources\assets\landing-page\images\careexpert.png" alt="Expert care" class="why-choose-img"></div>
                        <div class="feature-card-content">
                            <h5>Expert Care with Dr. Vishal Kundnani </h5>
                            <p class="feature-description">Over 20,000 successful spine surgeries and 5,000+ microsurgeries performed!</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><img src="resources\assets\landing-page\images\relevant-equipment.png" alt="Advanced treatments" class="why-choose-img"></div>
                        <div class="feature-card-content">
                            <h5>Advanced Treatment Options </h5>
                            <p class="feature-description">We use the latest minimally invasive techniques for faster recovery and less pain.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><img src="resources\assets\landing-page\images\consultatntdr.png" alt="Personalized plan" class="why-choose-img"></div>
                        <div class="feature-card-content">
                            <h5>Personalized Consultation</h5>
                            <p class="feature-description">Get a tailored treatment plan designed just for you.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><img src="resources\assets\landing-page\images\postcare.png" alt="Post operative care" class="why-choose-img"></div>
                        <div class="feature-card-content">
                            <h5>Comprehensive Post-Operative Care –</h5>
                            <p class="feature-description">Our dedicated care ensures you heal properly and quickly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Treat Section -->
        <section id="what-we-treat" class="section what-we-treat-section">
            <div class="container">
                <h2 class="section-title">What We Treat</h2>
                <p class="section-intro">We offer effective treatments for various spine conditions, including:</p>
                <div class="conditions-list">
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Degenerative-Disc-Disease-img.png') }}" alt="Degenerative disc disease severe arthritis" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <h4>Minimally Invasive Spine Surgery (MISS)</h4>
                            <p>Say goodbye to long recovery times! Smaller incisions, faster recovery, and less pain — that’s the power of MISS.</p>
                            <a href="#appointmentForm" class="condition-cta">Book your consultation now!</a>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Spinal-Stenosis-img.png') }}" alt="Spinal Stenosis narrowing of the spinal canal" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <h4>Slip Disc Treatment</h4>
                            <p>Struggling with sciatica or leg pain? We specialize in treating herniated or slipped discs with precision and care.</p>
                            <a href="tel:+919619100123" class="condition-cta">Get relief today — Call now!</a>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Spondylolisthesis-img.png') }}" alt="Spondylolisthesis vertebra shifting out of place" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <h4>Microendoscopic Spine Surgery</h4>
                            <p>Experience minimal scarring, less pain, and quicker recovery with our advanced microendoscopic techniques.</p>
                            <a href="tel:+919619100123" class="condition-cta">Ready to feel better? Contact us now!</a>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Herniated-Bulging-Discs-img.png') }}" alt="Herniated or Bulging Discs causing leg or arm pain (sciatica)" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <h4>Endoscopic Spine Surgery</h4>
                            <p>Using the latest technology, we treat spinal conditions with tiny incisions for less risk and faster healing.</p>
                            <a href="#appointmentForm" class="condition-cta">Want to learn more? Schedule your appointment!</a>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Scoliosis-Kyphosis-img.png') }}" alt="Scoliosis or Kyphosis" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <h4>Spinal Fusion Surgery</h4>
                            <p>If you’re dealing with spinal instability or severe arthritis, our expert spinal fusion surgery helps restore function and eliminate pain.</p>
                            <a href="#appointmentForm" class="condition-cta">Book your consultation today!</a>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Recurrent-Disc-Problems-img.png') }}" alt="Recurrent Disc Problems after prior surgery" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <h4>Scoliosis Surgery</h4>
                            <p>Whether you're a child or adult, we specialize in correcting spinal deformities with minimally invasive techniques.</p>
                            <a href="#appointmentForm" class="condition-cta">Start your journey to confidence—contact us now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What to Expect Section -->
        <section id="procedure" class="section procedure-section">
            <div class="container">
                <h2 class="section-title">What to Expect During the Procedure</h2>
                <div class="procedure-steps">
                    <div class="step-card">
                        <div class="step-number">01</div>
                        <h3>Small Incisions</h3>
                        <p>Small incisions replace large cuts of traditional surgery</p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">02</div>
                        <h3>Specialized Instruments</h3>
                        <p>Specialised instruments and cameras access the affected area</p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">03</div>
                        <h3>Targeted Surgery</h3>
                        <p>Surgery targets disc removal, nerve decompression, or vertebra stabilization</p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">04</div>
                        <h3>Quick Recovery</h3>
                        <p>Shorter recovery time and less pain post-operatively</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Meet Doctor Section -->
        <section id="doctor" class="section doctor-section">
            <div class="container">
                <div class="doctor-content">
                    <div class="doctor-image-wrapper">
                        <div class="doctor-photo-placeholder">
                            <img src="{{ asset('resources/assets/landing-page/images/dr-vishal.jpg') }}" alt="Dr. Vishal Kundnani performing surgery">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <h2 class="section-title text-left">Meet Dr. Vishal Kundnani</h2>
                        <p class="doctor-highlight"><strong>MS (Ortho) · FASSI · FNUS · FNAMS</strong></p>
                        <h4 class="doctor-subheading">Specialization</h4>
                        <ul class="doctor-specialization-list">
                            <li>Minimal Invasive Spine Surgery</li>
                            <li>Cervical Spine &amp; Scoliosis Surgery</li>
                            <li>Microendoscopic Spine Surgery</li>
                        </ul>
                        <p class="doctor-description" style="font-size: 0.95rem; line-height: 1.7; text-align: justify;">Dr. Vishal Kundnani—gold medalist throughout his scholar years—is fellowship-trained in spine surgery from internationally reputed centres in the UK, Singapore, Japan, Australia, Malaysia, and Korea. He has treated over 20,000 spine patients non-surgically using advanced slip-disc protocols, performed 5,000+ microsurgeries, minimally invasive procedures for sciatica, and laser surgeries for lumbar and cervical conditions. As Director &amp; Head of Spine Surgery at Lilavati Hospital and Head of the Mumbai Institute of Spine Surgery at Bombay Hospital, he pioneers complex spine, robotic, and navigation-assisted surgeries, innovates awake day-care MISS, and has 100+ international scientific publications.</p>
                    </div>
                </div>
                <div class="doctor-cta">
                    <div class="consultation-row" style="margin-top: 30px;">
                        <h3>Consultation</h3>
                    </div>
                    <div class="contact-options contact-row">
                        <div class="contact-link dual-phone contact-col-6">
                            <span class="contact-icon" aria-hidden="true"><i class="fa-solid fa-phone"></i></span>
                            <div class="contact-text">
                                <span>Call us at</span>
                                <div class="phone-list">
                                    <a href="tel:+919619100123">+91 96191 00123</a>
                                    <span class="divider">/</span>
                                    <a href="tel:+919619300123">+91 96193 00123</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-link dual-email contact-col-6">
                            <span class="contact-icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                            <div class="contact-text">
                                <span>Email us at</span>
                                <div class="email-list">
                                    <a href="mailto:spineclinicmumbai@gmail.com">spineclinicmumbai@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ready to Take Next Step Section -->
        <section id="next-step" class="section next-step-section">
            <div class="container">
                <h2 class="section-title">Ready to Take the Next Step?</h2>
                <p class="section-intro">Don't let spine pain limit your life. Contact us today for a consultation and find out if minimally invasive spine surgery is the right solution for you.</p>
                <div class="next-step-cta">
                    <div class="cta-row-secondary">
                        <div class="cta-col-6-secondary">
                            <a href="tel:+919619100123" class="cta-button phone">
                                <span class="cta-icon" aria-hidden="true"><i class="fa-solid fa-phone"></i></span>
                                <span class="sr-only">Call us</span>
                                <span>+91 9619100123</span>
                            </a>
                        </div>
                        <div class="cta-col-6-secondary">
                            <button type="button" class="cta-button email" data-bs-toggle="modal" data-bs-target="#appointmentModal" aria-label="Book Appointment">
                                <!-- <span class="cta-icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                                <span class="sr-only">Email us</span> -->
                                <span>Book Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section id="reviews" class="section reviews-section">
            <div class="container">
                <div class="reviews-header">
                    <h2 class="section-title">Patients Reviews</h2>
                    <p class="section-intro">Hear from patients who trusted Dr. Vishal Kundnani with their spine care.</p>
                </div>
                <div class="reviews-grid">
                    <div class="review-card">
                        <div class="reviewer-info">
                            <div>
                                <h4 class="reviewer-name">Chirag Bhagwati</h4>
                                <div class="reviewer-meta">Local Guide · 13 reviews · 26 photos</div>
                                <div class="review-rating">
                                    <span class="stars" aria-label="5 star rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="review-score">5.0</span>
                                </div>
                            </div>
                            <span class="review-date">3 weeks ago · New</span>
                        </div>
                        <p class="review-text">I had a severe pain in my lower back (L5-S1) for two and a half months. I consulted three doctors but felt no relief, so I searched for the best spine surgeon on Google and discovered Dr. Vishal Kundnani. After booking an appointment at Lilavati Hospital and showing my MRI, he examined me and recommended surgery right away. He performed micro endoscopic surgery at Lilavati, and by that evening Dr. Sukan from his team had me walking again—my pain was completely gone, and I was discharged the next day. It has been 15 days now, and I still have no pain. What a doctor! Thank you, Dr. Kundnani, for giving me a new life, and thanks to Dr. Sukan and the entire supporting team.</p>
                        <a class="review-readmore" href="https://maps.app.goo.gl/zppQExXQMe1auhoj9" target="_blank" rel="noopener">Read more</a>
                    </div>
                    <div class="review-card">
                        <div class="reviewer-info">
                            <div>
                                <h4 class="reviewer-name">Sudhir Patel</h4>
                                <div class="reviewer-meta">2 reviews</div>
                                <div class="review-rating">
                                    <span class="stars" aria-label="5 star rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="review-score">5.0</span>
                                </div>
                            </div>
                            <span class="review-date">1 month ago</span>
                        </div>
                        <p class="review-text">I had severe pain in my lower back (L5-S1) for a month. My physio Ruchi Jain referred me to Dr. Vishal Kundnani. After examining me and my reports, the doctor clearly recommended surgery and performed a micro endoscopic procedure. After surgery my pain disappeared completely. What a doctor! Thank you, doctor, for giving me a new life, and thanks to the supporting staff as well.</p>
                        <a class="review-readmore" href="https://maps.app.goo.gl/zppQExXQMe1auhoj9" target="_blank" rel="noopener">Read more</a>
                    </div>
                    <div class="review-card">
                        <div class="reviewer-info">
                            <div>
                                <h4 class="reviewer-name">Jeet Poptani</h4>
                                <div class="reviewer-meta">2 reviews</div>
                                <div class="review-rating">
                                    <span class="stars" aria-label="5 star rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="review-score">5.0</span>
                                </div>
                            </div>
                            <span class="review-date">1 month ago</span>
                        </div>
                        <p class="review-text">For a long time I had a stubborn backache that wouldn’t go away. I live in London and went through numerous tests; everything came back fine, yet the pain persisted. That’s when I decided to travel to India and meet Dr. Vishal Kundnani. After re-running key tests, he prescribed medication and, most importantly, guided me on diet, exercise, and posture. I’ve followed his advice for three months, and the pain has completely disappeared. I’m grateful for Dr. Kundnani’s holistic guidance—thank you, Jeet.</p>
                        <a class="review-readmore" href="https://maps.app.goo.gl/zppQExXQMe1auhoj9" target="_blank" rel="noopener">Read more</a>
                    </div>
                </div>
                <div class="review-map-cta">
                    <a class="review-map-button" href="https://maps.app.goo.gl/zppQExXQMe1auhoj9" target="_blank" rel="noopener">Read More Reviews</a>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section id="location" class="section location-section">
            <div class="footer-locations  py-4 pb-5">
                <div class="container">
                    <div class="header_title">
                        <h3>Our Locations</h3>
                    </div>
                    <div class="tab">
                        <button class="tablinks active" onclick="openLocation(event, 'bandra')">Bandra</button>
                        <button class="tablinks" onclick="openLocation(event, 'churchgate')">Churchgate</button>
                        <button class="tablinks" onclick="openLocation(event, 'malad')">Malad</button>
                        <button class="tablinks" onclick="openLocation(event, 'borivali')">Borivali</button>
                        <button class="tablinks" onclick="openLocation(event, 'khar')">Khar</button>
                    </div>
                    <div id="bandra" class="tabcontent" style="display: block;">
                        <div class="location-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="location-info">
                                        <h4><i class="fa-solid fa-location-dot me-2"></i> Bandra</h4>
                                        <p><strong>Lilavati Hospital</strong><br>Room 8/9, OPD block, Ground Floor, Bandra Reclamation Rd, Bandra West, Mumbai - 400050</p>
                                        <hr>
                                        <p><i class="fa-solid fa-phone-volume me-1"></i><a href="tel:+919619100123" class="text-white">+91 9619100123</a> | <a href="tel:+918657500555" class="text-white">+91 8657500555</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60340.56329035408!2d72.829178!3d19.051194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9faabf6f16b%3A0x5b0ba6b0e93ff7df!2sDr%20Vishal%20Kundnani!5e0!3m2!1sen!2sin!4v1746782504288!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="churchgate" class="tabcontent">
                        <div class="location-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="location-info">
                                        <h4><i class="fa-solid fa-location-dot me-2"></i> Churchgate</h4>
                                        <p><strong>Bombay Hospital</strong><br>Room no 128 - 1st floor MRC building, Marine Lines, Mumbai - 400020</p>
                                        <hr>
                                        <p><i class="fa-solid fa-phone-volume me-1"></i><a href="tel:+919619200123" class="text-white">+91 9619200123</a> | <a href="tel:+918657500666" class="text-white">+91 8657500666</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30190.21876873941!2d72.835515!3d18.941247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1bf22eac233%3A0xf1be984e0768c18e!2sDr.%20Vishal%20Kundnani%20-%20Best%20Spine%20Surgeon%20in%20Mumbai%20%7C%20Spine%20Specialist%20Doctor%20in%20Mumbai%20%7C%20Neck%20%26%20Back%20Pain%20Doctor!5e0!3m2!1sen!2sin!4v1746782545964!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="malad" class="tabcontent">
                        <div class="location-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="location-info">
                                        <h4><i class="fa-solid fa-location-dot me-2"></i> Malad</h4>
                                        <p><strong>Spine Clinic</strong><br>1st Floor, Onkar Towers, Opp. Oberoi Mall, Pimpripada Rd, Malad East, Mumbai - 400063</p>
                                        <hr>
                                        <p><i class="fa-solid fa-phone-volume me-1"></i><a href="tel:+919619100123" class="text-white">+91 9619100123</a> | <a href="tel:+918657500555" class="text-white">+91 8657500555</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15073.258530130865!2d72.8640188010371!3d19.1814553659143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7a826ae2fd3%3A0x98a2725d2ec7274!2sDr.%20Vishal%20Kundnani%20-%20Best%20Spine%20Specialist%20in%20Mumbai%20%7C%20Spine%20Surgeon%20in%20Mumbai%20%7C%20Back%20Pain%2C%20Sciatica%2C%20Slip%20Disc%20Doctor!5e0!3m2!1sen!2sin!4v1746782574170!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="borivali" class="tabcontent">
                        <div class="location-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="location-info">
                                        <h4><i class="fa-solid fa-location-dot me-2"></i> Borivali</h4>
                                        <p><strong>Spine Clinic</strong><br>2nd Floor, Devkrupa CHS, Shimpoli Signal, SV Road, beside Pulse Diagnostic, Borivali West, Mumbai - 400092</p>
                                        <hr>
                                        <p><i class="fa-solid fa-phone-volume me-1"></i><a href="tel:+919619200123" class="text-white">+91 9619200123</a> | <a href="tel:+918657500666" class="text-white">+91 8657500666</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15069.476055830744!2d72.853849!3d19.222743!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b931e2c885%3A0xd31dbc87ae1b347f!2sDr.%20Vishal%20Kundnani%20-%20Best%20Spine%20Surgeon%20in%20Mumbai%2C%20Spine%20Specialist%20in%20Mumbai%2C%20Spinal%20Clinic%2C%20Back%20Pain%2C%20Spine%20Doctor%20Mumbai!5e0!3m2!1sen!2sin!4v1746782601615!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="khar" class="tabcontent">
                        <div class="location-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="location-info">
                                        <h4><i class="fa-solid fa-location-dot me-2"></i> Khar</h4>
                                        <p><strong>Spine Clinic</strong><br>2nd Floor, Corinthian, Linking Rd, opposite DBS Bank, Khar West, Mumbai, Maharashtra 400052</p>
                                        <hr>
                                        <p><i class="fa-solid fa-phone-volume me-1"></i><a href="tel:+919619300123" class="text-white">+91 9619300123</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482656.0854108907!2d72.834207!3d19.074697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c93287e059a5%3A0xccacaea029ee0af0!2sDr.%20Vishal%20Kundnani%20-%20Best%20Spine%20Surgeon%20in%20Mumbai%20%7C%20Spine%20Specialist%20in%20Mumbai!5e0!3m2!1sen!2sin!4v1746784585275!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faqs" class="section faq-section">
            <div class="container">
                <h2 class="section-title">Frequently Asked Questions (FAQs)</h2>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>What is minimally invasive spine surgery (MISS)?</span>
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>MINIMALLY INVASIVE spine surgery means smaller incisions, less pain, and quicker recovery. This technique helps treat spine conditions like herniated discs and sciatica.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>How long does it take to recover from spine surgery?</span>
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Recovery times vary depending on the surgery, but most patients return to normal activities much faster than with traditional surgery.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Can I get a spine surgery consultation today?</span>
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>YES! Call us NOW to schedule your appointment or email us for immediate assistance.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>What if my slip disc is causing severe pain?</span>
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Our expert team can treat your slip disc with the latest minimally invasive techniques to get you back to pain-free living. Book your consultation today!</p>
                        </div>
                    </div>
                </div>
                <div class="book-appointment-cta faq-cta-embed">
                    <h2 class="cta-title">Get the Spine Care You Deserve – Book Now!</h2>
                    <p class="cta-description">Don't let pain control your life any longer. Book your appointment with Dr. Vishal Kundnani today, and take the first step toward a pain-free future!</p>
                    <div class="cta-action-row">
                        <a href="tel:+919619100123" class="cta-button cta-inline-btn phone-btn">
                            <span class="btn-icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="btn-text">
                                <strong>CALL NOW</strong>
                                <span>+91 96191 00123</span>
                            </span>
                        </a>
                        <button type="button" class="cta-button cta-inline-btn schedule-btn" data-bs-toggle="modal" data-bs-target="#appointmentModal" aria-label="Schedule your consultation today">
                            <span class="btn-icon"><i class="fas fa-calendar-check"></i></span>
                            <span class="btn-text">
                                <strong>SCHEDULE</strong>
                                <span>Your consultation today!</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="{{ asset('resources/assets/js/footer.js') }}"></script>
    <script>
        // Handle form submission in modal
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('appointmentFormModal');
            const modal = document.getElementById('appointmentModal');
            const mobileInputs = document.querySelectorAll('.mobile-input');

            mobileInputs.forEach((input) => {
                input.addEventListener('input', function () {
                    this.value = this.value.replace(/\D/g, '').slice(0, 10);
                });
            });
            
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Thank you! Your appointment request has been submitted. We will contact you shortly.');
                    
                    // Close modal using Bootstrap
                    const bootstrapModal = bootstrap.Modal.getInstance(modal);
                    if (bootstrapModal) {
                        bootstrapModal.hide();
                    }
                    
                    // Reset form
                    form.reset();
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>