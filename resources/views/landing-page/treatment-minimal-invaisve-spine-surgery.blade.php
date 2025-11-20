<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spine Clinic Mumbai - Minimally Invasive Spine Surgery</title>
    <link rel="stylesheet" href="{{ asset('resources/assets/landing-page/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-1hctYcZMWvx6bMpiKFFitvolG/G5hgbf+5Q5e0siJmq9hw3rroWAtxEvsC0BpvyOuk+qS0bkkCm1cWUGXcYFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
            <h3>Book FREE Consultation</h3>
            <form id="appointmentForm" class="appointment-form">
                <div class="form-group">
                    <input type="text" id="patientName" placeholder="Patient Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="mobileNumber" placeholder="Mobile Number" required>
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
                    <h1 class="banner-headline">Get Back to Life with Minimally Invasive Spine Surgery</h1>
                    <p class="banner-subtext">Small incision. Quicker recovery. Expert spinal care in Mumbai.</p>
                    <div class="banner-cta">
                        <div class="cta-row">
                            <div class="cta-col-6">
                                <a href="tel:+919619100123" class="cta-button phone">
                                    <span class="cta-icon" aria-hidden="true"><i class="fa-solid fa-phone"></i></span>
                                    <span class="sr-only">Call us</span>
                                    <span> +91 96191 00123</span>
                                </a>
                            </div>
                            <div class="cta-col-6">
                                <a href="mailto:spineclinicmumbai@gmail.com" class="cta-button email">
                                    <span class="cta-icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                                    <span class="sr-only">Email us</span>
                                    <span>spineclinicmumbai@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-image">
                    <div class="doctor-image-placeholder">
                        <img src="{{ asset('resources/assets/landing-page/images/dr-vishal.jpg') }}" alt="Dr. Vishal Kundnani">
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Section -->
        <section id="why-choose" class="section why-choose-section">
            <div class="container">
                <h2 class="section-title">Why Choose Minimally Invasive Spine Surgery?</h2>
                <p class="section-intro">When back pain or neck discomfort disrupts your daily life, consider minimally invasive spine surgery (MISS). This modern technique allows for:</p>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon"><img src="{{ asset('resources/assets/landing-page/images/smaller-scars.png') }}" alt="" class="why-choose-img"></div>
                        <h3>Smaller Scars</h3>
                        <p>Less tissue trauma with minimal incisions</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><img src="{{ asset('resources/assets/landing-page/images/reduce-pain.png') }}" alt="" class="why-choose-img"></div>
                        <h3>Reduced Pain</h3>
                        <p>Less post-operative pain and need for strong medications</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><img src="{{ asset('resources/assets/landing-page/images/faster-recovery.png') }}" alt="" class="why-choose-img"></div>
                        <h3>Faster Recovery</h3>
                        <p>Shorter hospital stays and quicker return to normal life</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><img src="{{ asset('resources/assets/landing-page/images/lower-risk.png') }}" alt="" class="why-choose-img"></div>
                        <h3>Lower Risk</h3>
                        <p>Reduced risk of complications like infections or blood loss</p>
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
                            <img src="{{ asset('resources/assets/landing-page/images/Herniated-Bulging-Discs-img.png') }}" alt="Herniated or Bulging Discs causing leg or arm pain (sciatica)" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <p>Herniated or bulging discs causing leg or arm pain (sciatica)</p>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Spinal-Stenosis-img.png') }}" alt="Spinal Stenosis narrowing of the spinal canal" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <p>Spinal stenosis (narrowing of the spinal canal)</p>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Spondylolisthesis-img.png') }}" alt="Spondylolisthesis vertebra shifting out of place" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <p>Spondylolisthesis (vertebra shifting out of place)</p>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Degenerative-Disc-Disease-img.png') }}" alt="Degenerative disc disease severe arthritis" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <p>Degenerative disc disease, severe arthritis</p>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Scoliosis-Kyphosis-img.png') }}" alt="Scoliosis or Kyphosis" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <p>Scoliosis or kyphosis (in selected cases)</p>
                        </div>
                    </div>
                    <div class="condition-item">
                        <div class="condition-media">
                            <img src="{{ asset('resources/assets/landing-page/images/Recurrent-Disc-Problems-img.png') }}" alt="Recurrent Disc Problems after prior surgery" loading="lazy">
                        </div>
                        <div class="condition-content">
                            <p>Recurrent disc problems after prior surgery</p>
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
                        <p class="doctor-description">Dr. Vishal Kundnani is a Senior Spine Surgeon at Spine Clinic Mumbai, with years of experience in minimally invasive spine surgery. He specialises in tailored spine care, helping patients return to normal life with quicker recovery
                            times and minimal discomfort.</p>
                        <div class="doctor-cta">
                            <h3>Consultation:</h3>
                            <div class="contact-options">
                                <div class="contact-link dual-phone">
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
                                <div class="contact-link dual-email">
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
                            <a href="mailto:spineclinicmumbai@gmail.com" class="cta-button email">
                                <span class="cta-icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                                <span class="sr-only">Email us</span>
                                <span>spineclinicmumbai@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section id="location" class="section location-section">
            <div class="container">
                <div class="location-wrapper">
                    <div class="location-card">
                        <p class="location-label">Visit Us</p>
                        <h2 class="location-title">Spine Clinic Mumbai</h2>
                        <p class="location-address">
                            2nd Floor, Corinthian, Spine Clinic, Linking Road, opposite DBS Bank, Khar West, Mumbai, Maharashtra 400052
                        </p>
                        <div class="location-highlights row">
                            <div class="location-chip">
                                <i class="fa-solid fa-train-subway" aria-hidden="true"></i> Easy access from major suburbs
                            </div>
                            <div class="location-chip">
                                <i class="fa-solid fa-square-parking" aria-hidden="true"></i> Free parking available
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>



    <!-- <script src="js/script.js"></script> -->
</body>

</html>