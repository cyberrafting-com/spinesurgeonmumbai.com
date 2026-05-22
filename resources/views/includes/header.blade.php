<header class="header col-lg-12 col-md-12 col-sm-12 col-xs-12 affix1" data-spy="affix1" data-offset-top="75">
    <div class="main_menu">
        <nav class="navbar navbar-default navbar-fixed-top1">

            <div class="frt_logo">
                <div class="container-fluid">
                    <div class="row ">

                        <div class="header_info1 col-lg-3 col-md-4 col-sm-4  hidden-xs aos-init" data-aos="fade-down-left"
                            data-aos-duration="1000">
                            <ul>
                                <li class="logo hidden-xs"><a href="{{ route('home') }}"><img
                                            src="{{ asset('resources/assets/img/logo.webp') }}"></a></li>
                            </ul>
                        </div>

                        <div class="header_info last col-lg-9 col-md-8 col-sm-8 hidden-xs">
                            <ul class="frt_apt">

                                <li><a href="https://maps.app.goo.gl/oMFuPmruYruNtxZj8" target="_blank"><img
                                            src="{{ asset('resources/assets/img/hosp1.webp') }}"></a>
                                </li>
                                <li><a href="https://maps.app.goo.gl/TibKTFfYJu5vEvLu6" target="_blank"><img
                                            src="{{ asset('resources/assets/img/hosp2.webp') }}"></a>
                                </li>
                                <li><a href="https://maps.app.goo.gl/fPbJwfP7CjRbG3di9" target="_blank"><img
                                            src="{{ asset('resources/assets/img/hosp3.webp') }}"></a>
                                </li>
                                <li><a href="https://maps.app.goo.gl/L9q391kQJ3KiywYi9" target="_blank"><img
                                            src="{{ asset('resources/assets/img/hosp4.webp') }}"></a>
                                </li>
                                <li><a href="https://maps.app.goo.gl/n8Kpwd7sZp8mbEMMA" target="_blank"><img
                                            src="{{ asset('resources/assets/img/hosp5.webp') }}"></a>
                                </li>

                            </ul>

                            <ul class="sec_call">

                                <li><i class="fa fa-envelope"></i><a href="mailto:spineclinicmumbai@gmail.com"
                                        target="_blank">spineclinicmumbai@gmail.com</a>
                                    <span>||</span>
                                </li>
                                <li><i class="fa fa-phone"></i><a href="tel:+919619100123" target="_blank">+91
                                        9619100123</a>
                                    <span>||</span>
                                </li>
                                <!--<li><i class="fa fa-phone"></i><a href="tel:+919619200123" target="_blank">+91 9619200123</a>-->
                                <!--    <span>||</span>-->
                                <!--</li>-->
                                <li><i class="fa fa-phone"></i><a href="tel:+919619300123" target="_blank">+91
                                        9619300123</a>
                                    <span>||</span>
                                </li>
                                <li><a href="
                                    {{ route('contact') }}"
                                        class="appoint">Book Appointment</a></li>

                            </ul>
                        </div>

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand hidden-lg hidden-md hidden-sm col-sm-6 col-xs-9" href="#"><img
                                    src="{{ asset('resources/assets/img/logo.webp') }}" /></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="menu_bg affix" data-spy="affix" data-offset-top="75">
                <div class="container">
                    <div class="row ">

                        <div id="navbar" class="navbar-collapse collapse col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="nav navbar-nav">

                                <li class=""><a href="{{ route('home') }}">Home</a></li>
                                <li class="dropdown active"><a class="dropbtn" href="#">About Us</a>
                                    <ul class="dropdown-content">
                                        <!--<li><a href="#">Spine Clinic</a></li>-->
                                        <li><a href="{{ route('spine-team') }}">Spine Team</a></li>
                                        <li><a href="{{ route('about-doctor') }}">Dr. Vishal Kundnani</a></li>
                                        <li><a href="{{ route('scoliosis-india-foundation') }}">Scoliosis India
                                                Foundation</a></li>
                                        <li><a
                                                href="{{ route('about-mumbai-institute-of-spine-surgery') }}">M.I.S.S</a>
                                        </li>
                                        <li><a
                                                href="{{ route('about-centre-of-excellence-in-spine-surgery') }}">C.E.S.S</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a class="dropbtn" href="#">What We Do</a>
                                    <ul class="dropdown-content columns2">
                                        <li><a href="{{ route('back-pain') }}">Back Pain</a></li>
                                        <li><a href="{{ route('neck-pain') }}">Neck Pain</a></li>
                                        <li><a href="{{ route('herniated-disc') }}">Herniated Disc</a></li>
                                        <li><a href="{{ route('spinal-fusion') }}">Spinal Fusion</a></li>
                                        <li><a href="{{ route('spinal-stenosis') }}">Spinal Stenosis</a></li>
                                        <li><a href="{{ route('spinal-injections') }}">Spinal Injections</a></li>
                                        <li><a href="{{ route('spondylolisthesis') }}">Spondylolisthesis</a></li>
                                        <li><a href="{{ route('physiotherapy-in-spine') }}">Physiotherapy In Spine</a>
                                        </li>
                                        <li><a href="{{ route('exercises') }}">Exercises</a></li>
                                        <li><a href="{{ route('minimal-invasive-spine-surgery') }}">Minimal Invasive
                                                Spine Surgery
                                                –
                                                General</a></li>
                                        <li><a href="{{ route('micro-endoscopic-minimal-invasive-spine-surgery') }}">Micro
                                                Endoscopic
                                                Minimal Invasive Spine Surgery</a></li>
                                        <li><a href="{{ route('common-spinal-stenosis-questions') }}">Common Spinal
                                                Stenosis
                                                Questions</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a class="dropbtn" href="#">We Treat</a>
                                    <ul class="dropdown-content columns2">
                                        <li><a href="{{ route('acute-low-back-pain') }}">Acute Low back Pain</a></li>
                                        <li><a href="{{ route('ankylosing-spondylitis') }}">Ankylosing Spondylitis</a>
                                        </li>
                                        <li><a href="{{ route('back-pain-we-treat') }}">Back Pain</a></li>
                                        <li><a href="{{ route('back-pain-in-pregnancy') }}">Back Pain in Pregnancy</a>
                                        </li>
                                        <li><a href="{{ route('degenerative-disc-disease') }}">Degenerative Disc
                                                Disease</a></li>
                                        <li><a href="{{ route('facet-syndrome') }}">Facet Syndrome</a></li>
                                        <li><a href="{{ route('failed-back-syndrome') }}">Failed Back Syndrome</a>
                                        </li>
                                        <li><a href="{{ route('kyphosis') }}">Kyphosis</a></li>
                                        <li><a href="{{ route('lumbar-spondylosis') }}">Lumbar Spondylosis</a></li>
                                        <li><a href="{{ route('lumbarisation-and-sacralisation') }}">Lumbarisation and
                                                Sacralisation</a></li>
                                        <li><a href="{{ route('neck-pain-we-treat') }}">Neck Pain</a></li>
                                        <li><a href="{{ route('osteoporosis') }}">Osteoporosis</a></li>
                                        <li><a href="{{ route('sciatica') }}">Sciatica</a></li>
                                        <li><a href="{{ route('scoliosis') }}">Scoliosis</a></li>
                                        <li><a href="{{ route('what-is-a-slipped-disc-herniated-disc') }}">Slip Disc</a></li>
                                        <li><a href="{{ route('spinal-stenosis-we-treat') }}">Spinal Stenosis</a></li>
                                        <li><a href="{{ route('spondylolysis-and-spondylolisthesis') }}">Spondylolysis
                                                and
                                                Spondylolisthesis</a></li>
                                        <li><a href="{{ route('spondylosis') }}">Spondylosis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a class="dropbtn" href="#">Gallery</a>
                                    <ul class="dropdown-content">
                                        <li><a href="{{ route('image-gallery') }}">Image Gallery</a></li>
                                        <li><a href="{{ route('video-gallery') }}">Video Gallery</a></li>
                                        <li><a href="{{ route('patient-education') }}">Patient Education</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a class="dropbtn" href="#">Case
                                        Gallery</a>
                                    <ul class="dropdown-content">
                                        <li><a href="{{ route('case-of-slip-disc') }}">Case of Slip Disc</a></li>
                                        <li><a href="{{ route('case-of-minimal-invasive-spine') }}">Case of Minimal
                                                Invasive Spine
                                                Surgery</a></li>
                                        <li><a href="{{ route('case-of-mis-tlif-spinal-fusion') }}">Case of MIS TLIF –
                                                Spinal
                                                Fusion</a></li>
                                        <li><a href="{{ route('case-of-spinal-stenosis') }}">Case of Spinal
                                                Stenosis</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('media') }}">Media</a></li>
                                <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                                <li class="hidden"><a href="{{ route('blog.best-spine-surgeons-mumbai-2026-editorial-guide') }}">Best Spine Surgeons Mumbai (2026 Editorial Guide)</a></li>
                                <li class=""><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                <li class=""><a href="{{ route('faq') }}">Faq</a></li>
                                <li class=""><a href="{{ route('contact') }}">Contact Us</a></li>

                            </ul>

                        </div>

                    </div>

                </div>
            </div>

        </nav>
    </div>
</header>