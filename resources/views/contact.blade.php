@php($title = ' Dr. Vishal Kundnani- Best Spine Doctor In Bandra')

@section('meta_desc')Dr. Vishal Kundnani is Bandra's top spine doctor, providing expert care and treatment for all
spine-related conditions. @endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalWebPage",
      "name": "About Dr. Vishal Kundnani",
      "description": "Learn about Dr. Vishal Kundnani's qualifications, experience, and expertise as Mumbai's leading spine surgeon",
      "url": "https://spinesurgeonmumbai.com/about-doctor.php",
      "about": {
        "@type": "Person",
        "name": "Dr. Vishal Kundnani",
        "jobTitle": "Chief Spine Surgeon",
        "description": "Gold medalist and fellowship-trained spine surgeon with 15+ years of experience and 5000+ successful surgeries",
        "knowsAbout": [
          "Spine Surgery",
          "Minimal Invasive Spine Surgery",
          "Scoliosis Correction",
          "Cervical Spine Surgery"
        ],
        "worksFor": {
          "@type": "MedicalBusiness",
          "name": "Spine Clinic Mumbai"
        },
        "award": [
          "Gold Medalist",
          "Fellowship in Spine Surgery"
        ],
        "alumniOf": [
          "UK",
          "Singapore",
          "Japan",
          "Australia",
          "Malaysia",
          "Korea"
        ],
        "hasCredential": [
          "MS (Ortho)",
          "FASSI",
          "FNUS",
          "FNAMS"
        ]
      },
      "provider": {
        "@type": "MedicalBusiness",
        "name": "Spine Clinic Mumbai",
        "medicalAudience": "Medical"
      }
    }
    </script>

    @extends('layouts.default')
@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>Contact <span>Us</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">Dr.</a></li>
                    <li><a href="{{ route('contact') }}">Vishal Kundnani</a></li>
                </ul>
            </div>
        </div>
    </div>




    <section class="aloviacntub col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">

                <div class="aloviacntubs col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <!-- <h3><i class="fa fa-map-marker"></i>Reach Us On</h3>
                                            <h2>Spine Clinic Mumbai, Malad</h2>
                                            <p class="hnialovia">2nd floor, Corinthian, Spine clinic, Linking Rd, Opposite DBS Bank, Khar, Khar West, Mumbai, Maharashtra 400052.
                                            </p>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15073.8454655137!2d72.861355!3d19.175041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7a826ae2fd3%3A0x98a2725d2ec7274!2sDr.%20Vishal%20Kundnani!5e0!3m2!1sen!2sin!4v1710935176820!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                    <h3><a href="tel:+919619100123" target="_blank"><i class="fa fa-phone"></i>+91 9619100123</a>/<a
                            href="tel:+919619300123 " target="_blank">+91 9619300123 </a></h3>
                    <p><a href="mailto:spineclinicmumbai@gmail.com" target="_blank"><i
                                class="fa fa-envelope"></i>spineclinicmumbai@gmail.com</a></p>
                    <h3>Follow us on social media :</h3>
                    <h6>
                        <a href="https://www.facebook.com/spineclinicmumbai" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/spinespecialistvishal/" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                        <a href="https://wa.me/+919619100123" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://www.youtube.com/watch?v=-jag5Tw1URs" target="_blank"><i
                                class="fa fa-youtube-play"></i></a>
                        <a href="https://www.linkedin.com/in/dr-vishal-kundnani-654676b?originalSubdomain=in"
                            target="_blank"><i class="fa fa-linkedin"></i></a>

                    </h6>

                    <h3 class="time">Consulting Hours</h3>
                    <p>Monday to Saturday - 06:00PM to 09:00PM </p>
                    <p>Sunday - By Appointment</p>

                </div>

                <div class="aloviacntubs col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3>Feel Free To Get In Touch &amp;<span>Book Appointment !</span></h3>
                    <div class="contact_enq col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <form method="post" action="#!">

                            <div class="form-group col-lg-6 col-lg-6 col-sm-12 col-xs-12">
                                <input type="name" class="form-control" id="name" placeholder="Name" name="name"
                                    required="">
                            </div>

                            <div class="form-group col-lg-6 col-lg-6 col-sm-12 col-xs-12">
                                <input type="email" class="form-control" id="email" placeholder="Email Id"
                                    name="email" required="">
                            </div>

                            <div class="form-group col-lg-6 col-lg-6 col-sm-12 col-xs-12">
                                <input type="text" class="form-control" placeholder="Mobile No" id="mobile"
                                    onkeypress="return isNumber(event)" minlength="10" maxlength="10" required="">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="form-control" placeholder="Query" id="query"
                                    required="">
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea name="textarea-257" cols="40" rows="10" id="message"
                                    class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Message*"
                                    spellcheck="false"></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-sm-12 col-xs-12 text-center">
                                <input type="submit" onclick="whatsapp()" class="form-control submit" value="Submit">
                            </div>

                        </form>

                    </div>



                </div>


            </div>
        </div>
    </section>


    <script>
        function whatsapp() {
            var name = document.getElementById("name").value;
            var mobile = document.getElementById("mobile").value;
            var email = document.getElementById("email").value;
            var query = document.getElementById("query").value;
            var message = document.getElementById("message").value;

            var whatsappurl = "https://wa.me/+919619100123?text=" +
                "Name of Customer :" + name + "%0a" +
                "Mobile No. :" + mobile + "%0a" +
                "Email ID :" + email + "%0a" +
                "Query :" + query + "%0a" +
                "Message :" + message;

            window.open(whatsappurl, "_blank").focus();
        }
    </script>




@stop
