@php($title = 'डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईतील पाठीच्या वेदना उपचार')

@section('meta_desc')डॉ. विशाल कुंदनानी यांच्या मदतीने पाठीच्या वेदनेपासून आराम मिळवा. मुंबईत प्रभावी वेदना
व्यवस्थापनासाठी सर्वसमावेशक काळजी.@endsection

@section('meta_keywords',
    'पाठीच्या वेदना उपचार मुंबई, डॉ. विशाल कुंदनानी, स्पाइन स्पेशालिस्ट मुंबई, स्पाइन सर्जन मुंबई, स्पाइन क्लिनिक मुंबई,
    मायक्रो एंडोस्कोपिक स्पाइन सर्जरी डॉक्टर मुंबई, स्पाइन रोग डॉक्टर मुंबई, स्पाइन सर्जरी स्पेशालिस्ट मुंबई, टॉप स्पाइन
    डॉक्टर बांद्रा, स्पाइन स्पेशालिस्ट बांद्रा, स्पाइन उपचार मुंबई, स्पाइन रोग उपचार मुंबई')

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalWebPage",
        "name": "Expert Back Pain Treatment in Mumbai by Dr. Vishal Kundnani",
        "description": "Get specialized treatment for back pain with Dr. Vishal Kundnani Spine Specialist Mumbai. Advanced spine care and pain management solutions in Mumbai.",
        "url": "https://www.spinesurgeonmumbai.com/back-pain.php",
        "author": {
            "@type": "Person",
            "name": "Dr. Vishal Kundnani",
            "jobTitle": "Spine Surgeon",
            "worksFor": {
                "@type": "MedicalOrganization",
                "name": "Spine Surgeon Mumbai",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Mumbai",
                    "addressRegion": "Maharashtra",
                    "addressCountry": "IN"
                }
            }
        },
        "provider": {
            "@type": "MedicalOrganization",
            "name": "Spine Surgeon Mumbai",
            "medicalSpecialty": "Spine Surgery"
        },
        "mainEntity": {
            "@type": "MedicalCondition",
            "name": "Back Pain",
            "description": "Back pain is one of the most common medical problems, affecting 8 out of 10 people at some point during their lives. It can range from a dull, constant ache to a sudden, sharp pain that makes it hard to move.",
            "possibleTreatment": {
                "@type": "MedicalTherapy",
                "name": "Back Pain Treatment",
                "description": "Comprehensive treatment options for back pain including physical therapy, medications, and surgical intervention when necessary."
            }
        }
    }
</script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
                "@type": "Question",
                "name": "What are the common causes of back pain?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Common causes include: Muscle or ligament strain, Bulging or ruptured disks, Arthritis, Osteoporosis, Poor posture, Heavy lifting, Sudden movements, and Stress or emotional tension."
                }
            },
            {
                "@type": "Question",
                "name": "What are the symptoms of back pain?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Symptoms may include: Muscle ache, Shooting or stabbing pain, Pain that radiates down your leg, Limited flexibility or range of motion, Inability to stand straight, and Pain that worsens with movement, lifting, or standing."
                }
            },
            {
                "@type": "Question",
                "name": "When should I see a doctor for back pain?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You should seek medical attention if: The pain is severe or persistent, You have numbness or tingling, The pain follows an injury, You have difficulty moving, You experience weakness in your legs, or The pain is accompanied by fever or other concerning symptoms."
                }
            }
        ]
    }
</script>
    @extends('layouts.default')

@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>आम्ही <span>काय करतो</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">मुख्यपृष्ठ</a></li>
                    <li><a href="{{ route('back-pain') }}">मागचे दुखणे</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('back-pain') }}" class="language-btn {{ request()->is('back-pain') && !request()->is('back-pain-*') ? 'active' : '' }}">
                                        ENGLISH
                                    </a>
                                    <a href="{{ route('back-pain-h') }}" class="language-btn {{ request()->is('back-pain-h') ? 'active' : '' }}">
                                        HINDI
                                    </a>
                                    <a href="{{ route('back-pain-m') }}" class="language-btn {{ request()->is('back-pain-m') ? 'active' : '' }}">
                                        MARATHI
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="drtoafndrb col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">

                <div class="cliclskil1 mt-3">

                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h1 class="back_">मुंबईतील पाठीच्या वेदना डॉक्टर</h1>

                        <!-- Main Image Section (Responsive) -->
                        <div class=" ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/back-pain-treatment.jpg') }}"
                                alt="Back Pain Treatment in Mumbai by Dr. Vishal Kundnani"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            पाठदुखी काय आहे?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    सध्या कार्यरत <a
                                                        href="{{ route('spine-tip-of-the-day-back-pain') }}"><b>पाठदुखी</b></a>
                                                    म्हणजे गळ्यातील वेदना होणे, ज्यामुळे कार्यक्षमता गमावली जाते आणि <a
                                                        href="https://www.healthline.com/health/back-pain/disability-for-back-pain#what-you-need-to-apply"><b>अशक्तपणा</b></a>
                                                    होतो. गळ्यातील वेदना ही एक सामान्य तक्रार आहे आणि सर्दी नंतर दुसऱ्या
                                                    क्रमांकावर असते. असे मानले जाते की सामान्य लोकसंख्येच्या 85% लोकांना
                                                    त्यांच्या आयुष्यात किमान एक वेळा पाठदुखी होईल.
                                                </li>
                                            </ul>
                                            <div class="container ba_image mt-4">
                                                <img src="{{ asset('resources/assets/images/back-pain.jpg') }}"
                                                    alt="Back Pain Treatment in Mumbai by Dr. Vishal Kundnani"
                                                    class="img-fluid rounded shadow-sm"
                                                    style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            पाठदुखीची कारणे काय आहेत?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p><b>खालच्या पाठदुखीसाठी धोका असलेल्या कारणांमध्ये हे समाविष्ट आहे:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वय:
                                                    हे वयाच्या सामान्य जर्जर होण्याच्या प्रक्रियेद्वारे होतं.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">जीवनशैली:
                                                    ताण, मानसिक ताण, चुकीचा पोश्चर - लांब वेळ उभे राहणे किंवा चुकीच्या
                                                    पद्धतीने बसणे - या सर्व गोष्टी पाठदुखीला कारणीभूत होऊ शकतात, तसेच
                                                    अत्यधिक शारीरिक काम, उचलणे, ताकद वापरून हालचाल करणे, वाकणे, किंवा अजीब
                                                    वागणूक देखील पाठदुखीला कारणीभूत ठरू शकतात.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चोट
                                                    आणि अपघात: स्नायू, लिगामेंट्स, किंवा मऊ ऊतीमध्ये झालेली दुखापत पाठदुखीला
                                                    कारणीभूत होऊ शकते. पाठीच्या हाडांचा फ्रॅक्चर किंवा कार अपघातामुळे होणारा
                                                    अपघात देखील सामान्य कारण आहे. जर तुम्हाला ऑस्टियोपोरोसिस (हाडांची
                                                    कमकुवतता) असेल तर हाड तुटण्याची शक्यता जास्त असते.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मोटापा:
                                                    वजन जास्त असणे पाठीवर दबाव आणि ताण आणते, विशेषतः खालच्या भागावर.
                                                    अतिरिक्त वजन नेण्यामुळे ऑस्टियोपोरोसिस (हाडांची कमकुवतता),
                                                    ऑस्टिओआर्थ्रायटिस (जोडांतील वेदना), रुमेटॉयड आर्थ्रायटिस (ऑटोइम्यून
                                                    रोग), डीजेनेरेटिव डिस्क रोग, स्पाइनल स्टेनोसिस, आणि स्पॉंडायलोलिस्थेसिस
                                                    सारख्या इतर आरोग्य समस्यांना वفاق होतो.</li>
                                            </ul>
                                            <p><b>पाठदुखी विशिष्ट पाठीच्या समस्यांमुळे देखील होऊ शकते:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्लिप
                                                    डिस्क / डिस्क बुळा / बुळलेल्या डिस्क.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated" data-wow-iteration="infinite"
                                                        alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल
                                                    स्टेनोसिस / लंबर स्पाइनल स्टेनोसिस.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फॅसेट
                                                    आर्थ्रायटिस / पाठीतील आर्थ्रायटिस.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॉंडायलोसिस.
                                                </li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">प्राथमिक
                                                    पाठीचे ट्यूमर्स.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल
                                                    मेटास्टेटिक ट्यूमर्स.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीच्या
                                                    संक्रमण.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीचा
                                                    तपेदिक / स्पाइन TB.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीचा
                                                    फ्रॅक्चर.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मेटाबॉलिक
                                                    कारणे - ऑस्टेमलॅसिया – व्हिटॅमिन डीची कमतरता.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            पाठीच्या वेदनांच्या शरीर रचनांविषयी काय आहे?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>मानव पाठीमध्ये 33 हाडे (व्हर्टेब्राए) असतात, जे डिस्कने गहाणलेले असतात. ह्या
                                            हाडांना तीन भागांत विभागले जाते: गळा (सर्विकल स्पाइन), मध्य पाठीचा भाग (थोरासिक
                                            स्पाइन), आणि खालचा पाठीचा भाग (लंबर स्पाइन). पाठीचा भाग आपल्या टाच्यापर्यंत
                                            खालच्या हाडांपर्यंत जातो. हाडांमध्ये डिस्क्स किंवा गहाण असतात, जे शॉक शोषक
                                            म्हणून कार्य करतात. डिस्क हाडांना सुरक्षित ठेवते आणि चालणे, उचलणे, वळणे
                                            यासारख्या दैनंदिन क्रियाकलापांमधून होणारे धक्के शोषून घेतात. प्रत्येक डिस्क दोन
                                            भागात विभागलेली असते - एक सौम्य, जेलीप्रमाणे अंतर्गत भाग (न्यूक्लियस पुल्पोसोस)
                                            आणि एक कठोर बाह्य रिंग (अॅन्युलस फायब्रोसिस). फॅसेट जोड आहेत तुमच्या
                                            व्हर्टेब्रावरच्या मागील भागावर. या जोडांची (ज्याप्रमाणे तुमच्या शरीरातील इतर
                                            जोडांची) हालचाल आणि लवचिकतेसाठी महत्त्वपूर्ण भूमिका आहे. व्हर्टेब्र आणि डिस्क
                                            एकत्र येऊन पाठीच्या मज्जातंतूंना मार्ग देणारी एक सुरंग तयार करतात. पाठीमध्ये
                                            स्नायू, लिगामेंट्स आणि रक्तवाहिन्याही असतात. स्नायू म्हणजे शारीरिक हालचालींसाठी
                                            ऊर्जा निर्माण करणारे ऊतक. लिगामेंट्स म्हणजे हाडांना जोडणारे मजबूत, लवचिक बंध.
                                        </p>
                                        <img class="serv_img" src="{{ asset('resources/assets/img/Capture.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            पाठीच्या वेदनांशी संबंधित सामान्य लक्षणे काय आहेत?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>पाठदुखी किंवा गळ्यातील वेदना – वेदनांचा प्रकार, कालावधी, पुनर्प्राप्ती, आणि
                                                नैसर्गिक प्रक्रिया हे काय कारणीभूत आहे आणि ते कुठे प्रभाव पाडते यावर अवलंबून
                                                असते. पाठदुखीशी संबंधित सामान्य तक्रारी म्हणजे –</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गाठलेला
                                                    गळा, गळ्यातील कडकपणा, गळ्यातील कठोरता.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सकाळचा
                                                    कडकपणा.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्नायूंचे
                                                    संकोचन.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाय
                                                    दुखणे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पुढे
                                                    वाकताना पाठीमध्ये वेदना.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दीर्घकाळ
                                                    बसल्यावर किंवा कायम काम केल्यावर पाठदुखी.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गळ्याशी
                                                    संबंधित पाठदुखी.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वाकताना
                                                    पाठदुखी.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पायांमध्ये
                                                    वेदना.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लघवी
                                                    किंवा मल पास करताना अडचणी.</li>
                                            </ul>
                                            <p>जर पाठदुखी कंबरेच्या वेदना, खांद्याची वेदना, हाताचा संकोचन किंवा हातातील
                                                कमकुवतपणा संबंधित असेल तर एक स्पाइन विशेषज्ञ किंवा जवळच्या डॉक्टरांशी संपर्क
                                                साधावा. डॉ. विशाल कुंदनानी हे मुंबईतील एक उत्तम स्पाइन सर्जन आहेत.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            {{-- ------- --}}
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            जर मला पाठीचा दुखापत असेल तर मला नेहमीच पाठीच्या डॉक्टराला भेटावे का? पाठीच्या
                                            दुखापतीसाठी डॉक्टरांचा सल्ला कधी घ्यावा? आणि मी माझ्या पाठीचा दुखापत घरगुती
                                            उपायांनी बरे करू शकतो का?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>पाठीच्या दुखापतीचे बहुतेक रुग्ण साध्या वेदना व्यवस्थापन उपायांद्वारे
                                                सुधारतात. तथापि, जर तुमचा पाठीचा दुखापत ३ आठवड्यांपेक्षा जास्त काळ टिकत असेल
                                                तर तुम्हाला पाठीच्या डॉक्टराला आणि स्पाइन स्पेशालिस्टला भेटावे आणि खालील
                                                कोणत्याही आपत्कालीन चिन्हांसह (RED FLAGS) पाठीच्या दुखापतीसाठी त्वरित लक्ष
                                                द्यावे:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    वेदना लक्षणीयपणे वाढत आहे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    वेदना दररोजच्या कामात अडथळा आणत आहे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    तीव्र लक्षणे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    उच्चांक ताप आणि सामान्य लक्षणे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    खांद्याच्या दुखापतीसह किंवा हातात दुखापत आणि कमजोरी किंवा झंझावतपण.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    हात आणि खांद्यामधील कमजोरी, झंझावतपण किंवा झंझावतपण.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    लघवी किंवा मलाशय नियंत्रणाची हानी.</li>
                                            </ul>
                                            <p>जर पाठीचा दुखापत RED FLAG चिन्हांसह संबंधित असेल – खांद्याचा दुखापत, हाताची
                                                झंझावतपण किंवा हाताची कमजोरी, तर आपल्याला पाठीच्या स्पेशालिस्ट किंवा जवळच्या
                                                पाठीच्या डॉक्टरांना भेटावे. डॉ. विशाल कुंदनानी हे मुंबईतील एक उत्तम पाठीचे
                                                स्पेशालिस्ट आहेत आणि भारतातील एक उत्तम स्पाइन सर्जन आहेत.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            पाठीच्या दुखापतीसाठी उपचाराचे पर्याय काय आहेत?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>पाठीच्या दुखापतीसाठी उपचाराचे विविध पर्याय आहेत, जे लक्षणांच्या तीव्रतेवर आणि
                                                कालावधीवर अवलंबून असतात.</p>
                                            <p><b>आमच्या <a href="{{ route('home') }}">मुंबईतील अत्याधुनिक स्पाइन
                                                        केंद्रात</a>, आम्ही खालील व्यापक उपचार पर्याय प्रदान करतो:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    औषधे आणि औषधांचा वापर.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    शारीरिक थेरपी.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पाठीचे ब्रेसिंग.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पाठीसाठी इंजेक्शन्स.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पाठीचे शस्त्रक्रिया.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पाठीच्या दुखापतीसाठी फिजिओथेरपी आणि व्यायाम सहायक असतात.</li>
                                            </ul>
                                            <p>स्वत:साठी योग्य आणि सर्वोत्तम उपचार पर्याय योजना करण्यासाठी तुम्हाला पाठीच्या
                                                डॉक्टरांशी भेटून पाठीच्या विशेष तपासणीसाठी सल्ला घ्यावा. तुम्हाला पाठीच्या
                                                स्पेशालिस्टच्या सल्ल्याची आवश्यकता आहे किंवा जवळच्या पाठीच्या डॉक्टरांशी
                                                संपर्क करा. डॉ. विशाल कुंदनानी हे मुंबईतील एक उत्तम पाठीचे स्पेशालिस्ट आहेत
                                                आणि भारतातील एक उत्तम स्पाइन सर्जन आहेत.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            पाठीच्या दुखापतीसाठी औषधे आणि उपचार -
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    ऍसिटामिनोफेन: तुमचा डॉक्टर याला ऍनाल्जेसिक म्हणू शकतो, पण आम्ही बहुतेक
                                                    वेळा ऍसिटामिनोफेन औषधे वेदनाशामक म्हणून ओळखतो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    एनएसएआयडी (नॉन-स्टेरॉइडल अँटी-इन्फ्लेमेटरी ड्रग्स): सूज कमी करते (किंवा
                                                    सूज) आणि वेदना कमी करते.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    मसल रिलॅक्संट्स: जर तुमच्याकडे मसल स्पॅझममुळे दीर्घकालीन पाठीचा दुखापत
                                                    असेल तर तुम्हाला मसल रिलॅक्संट्सची आवश्यकता असू शकते, जे स्पॅझम थांबवू
                                                    शकतात.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    अँटी-डिप्रेसंट्स: कदाचित हे आश्चर्यकारक वाटेल, पण अँटी-डिप्रेसंट्स वेदना
                                                    कमी करण्यासाठी प्रभावी औषधे असू शकतात कारण ते वेदना संदेशांना
                                                    मेंदूपर्यंत पोहोचण्यापासून अडवतात. ते तुमच्या शरीरातील एंडोर्फिन्सचे
                                                    उत्पादन देखील वाढवू शकतात, जे एक नैसर्गिक वेदना निवारक आहे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    ओपिओइड्स: अत्यंत गंभीर प्रकरणांमध्ये आणि केवळ काळजीपूर्वक निरीक्षणाखाली,
                                                    तुमच्या डॉक्टरांनी एक ओपिओइड (जसे की मॉर्फिन किंवा कोडिन) देखील लिहून
                                                    दिली जाऊ शकते.</li>
                                            </ul>
                                            <h3>औषधाचा इशारा:</h3>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    सर्व औषधांसोबत, तुम्हाला तुमच्या डॉक्टरांच्या सल्ल्याचे अचूक पालन करणे
                                                    आवश्यक आहे. तुमच्या डॉक्टरांचा सल्ला न घेता ओव्हर-द-काउंटर आणि
                                                    प्रिस्क्राइब केलेली औषधे कधीही एकत्र करू नका.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    कोणतीही औषधं तुमच्या पाठीच्या डॉक्टर, स्पाइन सर्जन किंवा स्पाइन
                                                    स्पेशालिस्टच्या सल्ल्याशिवाय घेऊ नका. डॉ. विशाल कुंदनानी हे मुंबईतील एक
                                                    उत्तम पाठीचे स्पेशालिस्ट आहेत आणि भारतातील एक उत्तम स्पाइन सर्जन आहेत.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- ---------- --}}
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                            पाठीच्या दुखापतीसाठी शस्त्रक्रिया कधी करावी लागते?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingEight">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>पाठीच्या दुखापतीचे बहुतेक रुग्ण नॉन-सर्जिकल उपचार (जसे की औषधे) यावर चांगला
                                                प्रतिसाद देतात –</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पाठीच्या दुखापतीसाठी शस्त्रक्रियेचे सूचनाएँ :
                                                    <br>तयार केलेल्या विशिष्ट कारणानुसार नॉन-सर्जिकल उपचारांचा प्रतिकूल
                                                    प्रतिसाद किंवा अंशत: प्रतिसाद.
                                                    <br>प्रगत रॅडिक्युलोपॅथी, हातातील वेदना, खांद्यातील वेदना, झंझावतपण आणि
                                                    पायांमध्ये झंझावतपण.
                                                    <br>हात किंवा पायातील शक्ती किंवा संवेदना गमावणे किंवा लघवी किंवा मलाशय
                                                    नियंत्रण गमावणे.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingNine">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            स्लिप डिस्क / हर्नियेटेड डिस्क / डिस्क हर्निएशन साठी फिजिओथेरपी काय आहे?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingNine">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>फिजिओथेरपीला पाठीच्या दुखापतीच्या उपचारात एक महत्त्वपूर्ण भूमिका आहे. हे शरीर
                                                कसे सुदृढ करावे आणि दुखाच्या प्रसंगामध्ये अधिक दुखापती टाळण्यासाठी तसेच
                                                उपचारासाठी मदत करते. विविध प्रकारच्या फिजिकल थेरपी तंत्र आहेत. पॅसिव्ह आणि
                                                ॲक्टिव्ह उपचार.</p>
                                            <p>पॅसिव्ह उपचार शरीराला आराम देतात आणि त्यात डीप टिशू मसाज, गरम आणि थंड उपचार,
                                                इलेक्ट्रिकल स्टिम्युलेशन (TENS), आणि हायड्रोथेरपी यांचा समावेश आहे. ॲक्टिव्ह
                                                उपचारात सक्रिय स्ट्रेचिंग आणि मजबूत करणारे व्यायाम, धडाची स्थिरता, आणि कोअर
                                                स्ट्रेंथनिंग यांचा समावेश आहे.</p>
                                            <p><b>पॅसिव्ह उपचार:-</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    डीप टिशू मसाज: डीप टिशू मसाज जाड स्नायूंच्या ताण आणि स्पॅझम्सला आराम
                                                    देतो, ज्यामुळे प्रभावित क्षेत्रातील स्नायू हलविणे टळते.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    गरम आणि थंड उपचार: गरम आणि थंड उपचारांचा प्रत्येकाचा एक फायदेशीर संच
                                                    असतो, आणि तुमचा फिजिकल थेरपिस्ट त्यांना चांगले परिणाम मिळवण्यासाठी एकत्र
                                                    वापरू शकतो. हे सूज, स्नायूंचे स्पॅझम, आणि वेदना कमी करतो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    हायड्रोथेरपी: हायड्रोथेरपी वेदना आरामदायकपणे कमी करते आणि स्नायू
                                                    आरामदायक करतो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    TENS (ट्रान्सक्युटेनियस इलेक्ट्रिकल नर्व स्टिम्युलेशन): इलेक्ट्रिकल
                                                    चालणी वापरून स्नायूंना उत्तेजित करतो आणि स्नायूंच्या स्पॅझम्सला कमी
                                                    करतो, तसेच शरीरातील नैसर्गिक वेदना निवारक, एंडोर्फिन्सच्या मुक्तीला
                                                    उत्तेजन देतो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    अल्ट्रासाउंड: रक्त परिसंचरण वाढवून, अल्ट्रासाउंड स्नायूंचे संकुचन, सूज,
                                                    कठोरपणा, आणि वेदना कमी करण्यात मदत करतो. हे ध्वनी लहरींना तुमच्या
                                                    स्नायूंच्या ऊतीत गुळगुळीतपणे पाठवते, ज्यामुळे रक्ताभिसरण आणि उपचार
                                                    सुधारतात.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    ट्रॅक्शन: पाठीवर गुरुत्वाकर्षणाचा प्रभाव कमी करतो. त्याचा उद्देश डिस्क
                                                    हर्निएशन कमी करणे आहे आणि तो सामान्यत: ग्रीवा किंवा लंबर स्पाइनमध्ये
                                                    केला जातो.</li>
                                            </ul>
                                            <p><b>ॲक्टिव्ह उपचार:-</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पुन्हा दुखापतीला कमी करण्यासाठी मदत करतो, परंतु तुमच्या एकंदर
                                                    आरोग्यासाठीही फायदेशीर आहे.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    कोअर स्थिरता: अनेक लोकांना हे समजत नाही की त्यांचे कोअर मजबूत करणे
                                                    त्यांच्या पाठीच्या आरोग्यासाठी किती महत्त्वाचे आहे. तुमचे कोअर (उदर)
                                                    स्नायू तुमच्या पाठीच्या स्नायूंना पाठीला समर्थन देण्यास मदत करतात.
                                                    जेव्हा तुमचे कोअर स्नायू कमजोर असतात, तेव्हा ते तुमच्या पाठीच्या
                                                    स्नायूंवर अतिरिक्त दबाव आणते. तुमचा फिजिकल थेरपिस्ट तुम्हाला कोअर
                                                    स्थिरता वाढवण्यासाठी व्यायाम शिकवू शकतो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    लवचिकता: योग्य स्ट्रेचिंग आणि लवचिकता तंत्र शिकणे तुम्हाला एरोबिक आणि
                                                    स्ट्रेंथ व्यायामांसाठी तयार करेल. लवचिकता तुमच्या शरीराला जास्त चांगले
                                                    हलवण्यासाठी मदत करते आणि कठोरपणा टाळतो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    स्नायूंचे मजबूतीकरण: मजबूत स्नायू तुमच्या पाठीसाठी एक चांगला समर्थन
                                                    प्रणाली असतात आणि वेदना अधिक चांगल्या प्रकारे सहन करू शकतात. आणि पाठीचे
                                                    स्ट्रेचिंग आणि स्नायूंचे मजबूतीकरण करण्यासाठी तसेच पेल्विक टिल्टसह,
                                                    ज्यामुळे तुम्हाला एक न्यूट्रल स्पाइन स्थिती मिळवण्यास मदत होते.</li>
                                            </ul>
                                            <p>पाठीच्या दुखापतीच्या नॉन-सर्जिकल व्यवस्थापनाचे हे पर्याय मुंबईतील स्पाइन
                                                क्लिनिक – स्लिप डिस्क उपचारासाठी मुंबईतील सर्वोत्तम स्पाइन क्लिनिक येथे
                                                उपलब्ध आहेत. डॉ. विशाल कुंदनानी हे मुंबईतील सर्वोत्तम पाठीचे कन्सल्टंट आहेत
                                                आणि ते मुंबईतील स्पाइन स्पेशालिस्ट म्हणून भेटण्यासाठी उपलब्ध आहेत. डॉ. विशाल
                                                कुंडनानी हे मुंबईतील सर्वोत्तम पाठीचे स्पेशालिस्ट आणि गोरेगाव, कंदिवली आणि
                                                मलाड येथील सर्वोत्तम स्पाइन कन्सल्टंट आहेत.</p>
                                            <p>डॉ. विशाल कुंदनानी हे पाठीच्या दुखापतीसाठी शस्त्रक्रिया करणारे सर्वोत्तम
                                                स्पाइन सर्जन आहेत आणि ते मुंबईतील स्पाइन क्लिनिक आणि इतर विविध
                                                रुग्णालयांमध्ये सल्ल्यासाठी आणि शस्त्रक्रियेसाठी उपलब्ध आहेत. डॉ. विशाल
                                                कुंडनानी हे पाठीच्या रुग्णांसाठी एक विचारशील दृष्टीकोन ठेवणारे सर्वोत्तम
                                                स्पाइन स्पेशालिस्ट आहेत, ज्यांनी एक प्रामाणिक आणि नैतिक दृष्टिकोन घेतला आहे.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTen" aria-expanded="false"
                                            aria-controls="collapseTen">
                                            घरच्या पाठीच्या दुखापतीसाठी उपाय
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTen">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    गळा आणि खांद्याच्या दुखापती अनेक प्रकारांनी वर्गीकृत केल्या जाऊ शकतात.
                                                    काही लोक फक्त पाठीच्या दुखापतीचा अनुभव घेतात किंवा फक्त खांद्याच्या
                                                    दुखापतीचा, तर काही लोक दोन्ही भागात वेदना अनुभवतात.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- ---- --}}
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEleven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseEleven" aria-expanded="false"
                                            aria-controls="collapseEleven">
                                            पाठीच्या दुखापतीला कारण काय आहे?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingEleven">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>पाठीच्या दुखापतीचे कारणे खालील प्रमाणे आहेत:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    हाडे किंवा सांध्यांमध्ये असामान्यता.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    स्लिप डिस्क / डिस्क बुळग / हर्नियेटेड डिस्क.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    ट्रॉमा.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    चुकीची पोस्चर.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    विकारजनक रोग.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    ट्युमर.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    स्नायूंचा ताण.</li>
                                            </ul>
                                            <p>तुमच्या समस्येचे नेमके कारण समजून घेण्यासाठी तुम्ही जवळच्या स्पाइन डॉक्टर
                                                किंवा स्पाइन स्पेशालिस्टला भेटावे. डॉ. विशाल कुंदनानी हे मुंबईतील एक उत्तम
                                                स्पाइन स्पेशालिस्ट आणि भारतातील एक उत्तम स्पाइन सर्जन आहेत.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwelve">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwelve" aria-expanded="false"
                                            aria-controls="collapseTwelve">
                                            पायांच्या वेदनांना काय कारणे आहेत?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwelve">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>पायांच्या वेदना खालील कारणांमुळे होऊ शकतात:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    दाबलेले स्नायू (रॅडिक्युलोपॅथी म्हणून ओळखले जाते)</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पाठीतील स्लिप डिस्क</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    जास्त कष्ट केल्यामुळे स्नायूंचा ताण</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    ओव्हरयूजमुळे टेंडनायटिस</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    विस्थापन</li>
                                            </ul>
                                            <p>तुमच्या समस्येचे नेमके कारण समजून घेण्यासाठी तुम्ही जवळच्या स्पाइन डॉक्टर
                                                किंवा स्पाइन स्पेशालिस्टला भेटावे. डॉ. विशाल कुंदनानी हे मुंबईतील एक उत्तम
                                                स्पाइन स्पेशालिस्ट आणि भारतातील एक उत्तम स्पाइन सर्जन आहेत.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThirteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThirteen" aria-expanded="false"
                                            aria-controls="collapseThirteen">
                                            पाठीच्या दुखापतीचे निदान कसे केले जाते?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThirteen">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    एक्स-रे: साधे एक्स-रे पाठीच्या हाडांमधील अंतर कमी होणे, संधिवातासारखे
                                                    रोग, ट्युमर, स्लिप डिस्क, पाठीचा कॅनाल संकुचित होणे, फ्रॅक्चर आणि
                                                    पाठीच्या कणाचे अस्थिरता दाखवू शकतात.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    MRI: मॅग्नेटिक रेजोनन्स इमेजिंग हा एक नॉन-इव्हेझिव्ह प्रक्रिया आहे जी
                                                    न्यूरल (स्नायू-संबंधी) घटकांचे तपशील, तसेच टेंडन्स आणि लिगामेंट्ससंबंधी
                                                    समस्यांचे निदान करू शकते.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    मायलोग्राफी / CT स्कॅनिंग: हा कधी कधी MRI च्या पर्यायी म्हणून वापरला
                                                    जातो.</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    इलेक्ट्रोडायग्नोस्टिक स्टडीज: इलेक्ट्रोमायोग्राफी (EMG) आणि नर्व कंडक्शन
                                                    व्हेलोसिटी (NCV) कधीकधी पाठी आणि पायांच्या वेदनांचे, हातातील वेदना,
                                                    संवेदनशून्यता आणि झंझावतपणाचे निदान करण्यासाठी वापरले जातात.</li>
                                            </ul>
                                            <p>तुमच्यासाठी कोणती तपासणी आवश्यक आहे हे ठरवण्यासाठी जवळच्या स्पाइन डॉक्टर
                                                किंवा स्पाइन स्पेशालिस्टला भेटा. डॉ. विशाल कुंदनानी हे मुंबईतील एक उत्तम
                                                स्पाइन स्पेशालिस्ट आणि भारतातील एक उत्तम स्पाइन सर्जन आहेत.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFourteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFourteen" aria-expanded="false"
                                            aria-controls="collapseFourteen">
                                            पाठीच्या दुखापतीचे उपचार कसे केले जातात?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFourteen">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                        class="wow flipInX animated animated"
                                                        data-wow-iteration="infinite" alt="pic"
                                                        style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    सॉफ्ट टिश्यू पाठीच्या दुखापतीचे उपचार सहसा वेदनांच्या स्रोतावर अवलंबून
                                                    असतात. वेदना स्थानिक गरम किंवा बर्फाच्या अनुप्रयोगाने देखील उपचार केल्या
                                                    जाऊ शकतात. स्नायू आरामदायक करण्यासाठी आणि अगदी अँटी-डिप्रेसंट्स जसे औषध
                                                    देखील उपयुक्त असू शकतात. स्थानिक कोर्टिकोस्टेरॉइड इंजेक्शन्स खूप उपयुक्त
                                                    ठरू शकतात. गळ्याच्या आणि खांद्याच्या वेदनांसाठी व्यायाम मदत करू शकतात.
                                                    जेव्हा नर्व रूट्स किंवा स्पाइन कॉर्ड यांचा समावेश असतो, तेव्हा
                                                    शस्त्रक्रिया आवश्यक असू शकते. तुमच्यासाठी सर्वोत्तम उपचार पर्याय
                                                    ठरवण्यासाठी तुम्ही मुंबईतील स्पाइन डॉक्टर किंवा स्पाइन स्पेशालिस्टला
                                                    भेटावे. डॉ. विशाल कुंदनानी हे भारतातील सर्वोत्तम स्पाइन स्पेशालिस्ट
                                                    आहेत.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------- --}}
                            <div class="spine-expert-section mt-4">
                                <h2>मुंबईतील विशेषज्ञ पाठीच्या दुखापतीचे उपचार</h2>
                                <p><a href="{{ route('spine-tip-of-the-day-backpain') }}">पाठीच्या दुखापतीसाठी उपचार</a>
                                    घेताना, योग्य स्पाइन स्पेशालिस्ट निवडणे अत्यंत महत्त्वाचे आहे. डॉ. विशाल कुंदनानी,
                                    मुंबईतील प्रसिद्ध स्पाइन सर्जन, १५ वर्षांचा अनुभव घेऊन जटिल स्पाइनल स्थितीचे उपचार करत
                                    आहेत. मुंबई इन्स्टिट्यूट ऑफ स्पाइन सर्जरीचे संचालक आणि लिलावती हॉस्पिटलमधील प्रमुख
                                    स्पाइन स्पेशालिस्ट म्हणून, त्यांनी ५००० हून अधिक स्पाइन शस्त्रक्रिया यशस्वीरित्या पार
                                    केली आहेत.</p>

                                <div class="container ba_image mt-4">
                                    <img src="{{ asset('resources/assets/images/expert-back-pain-treatment-mumbai.png') }}"
                                        alt="Back Pain Treatment in Mumbai by Dr. Vishal Kundnani"
                                        class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                                </div>

                                <h3>मुंबईतील आमच्या स्पाइन सर्जरी केंद्राची निवड का करावी?</h3>
                                <ul>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                            class="wow flipInX animated" data-wow-iteration="infinite"
                                            alt="pic">मुंबईतील अत्याधुनिक स्पाइन सर्जरी सुविधाएं</li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                            class="wow flipInX animated" data-wow-iteration="infinite" alt="pic">कमी
                                        आक्रमक स्पाइन सर्जरी तंत्रज्ञान</li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                            class="wow flipInX animated" data-wow-iteration="infinite"
                                            alt="pic">मुंबईतील सर्वोत्तम स्पाइन सर्जन कडून सर्वसमावेशक स्पाइन देखभाल
                                    </li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                            class="wow flipInX animated" data-wow-iteration="infinite"
                                            alt="pic">पाठीच्या दुखापतींच्या सर्व प्रकारांसाठी अत्याधुनिक उपचार</li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                            class="wow flipInX animated" data-wow-iteration="infinite"
                                            alt="pic">प्रत्येक रुग्णासाठी वैयक्तिकृत स्पाइन उपचार योजना</li>
                                </ul>


                                <h3>मुंबईतील अत्याधुनिक स्पाइन सर्जरी उपचार</h3>
                                <p>आमचे स्पाइन सर्जरी केंद्र मुंबईमध्ये सर्वसमावेशक उपचार पर्याय उपलब्ध करतो, ज्यामध्ये कमी
                                    आक्रमक स्पाइन सर्जरी, मायक्रो सर्जरी, आणि अत्याधुनिक नॉन-सर्जिकल हस्तक्षेप समाविष्ट
                                    आहेत. <a href="{{ route('home') }}">डॉ. कुदनानी</a>, जे मुंबईतील सर्वश्रेष्ठ स्पाइन
                                    सर्जन्सपैकी एक म्हणून ओळखले जातात, ते विविध पाठीच्या स्थितींच्या उपचारासाठी अत्याधुनिक
                                    शस्त्रक्रिया तंत्रज्ञानाचा वापर करतात.</p>


                                <div class="spine-expertise mt-3">
                                    <h4>तज्ञता क्षेत्रे:</h4>
                                    <ul>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated" data-wow-iteration="infinite"
                                                alt="pic">जटिल स्पाइन सर्जरी</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated" data-wow-iteration="infinite"
                                                alt="pic">कमी आक्रमक स्पाइन प्रक्रिया</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated" data-wow-iteration="infinite"
                                                alt="pic">गर्दन आणि पाठीच्या खालच्या भागातील उपचार</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated" data-wow-iteration="infinite"
                                                alt="pic">स्पाइन विकृतीचे सुधारणा</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                                class="wow flipInX animated" data-wow-iteration="infinite"
                                                alt="pic">उत्तम पाठीच्या वेदना व्यवस्थापन</li>
                                    </ul>

                                </div>

                                <p class="mt-3">मुंबईतील सर्वोत्तम स्पाइन सर्जन शोधणाऱ्यांसाठी, <a
                                        href="{{ route('about-doctor') }}">डॉ. विशाल कुंदनानींच्या</a> तज्ञतेची आणि
                                    रुग्ण-केंद्रित दृष्टिकोनामुळे त्यांना एक विश्वासार्ह निवड मानली जाते. त्यांचे स्पाइन
                                    सर्जरी सेंटर मुंबईत अत्याधुनिक तंत्रज्ञानाने सुसज्ज आहे आणि अनुभवी आरोग्य व्यावसायिकांनी
                                    सुसज्ज आहे, जे उत्कृष्ट स्पाइन देखभाल प्रदान करण्यासाठी समर्पित आहेत.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">

                        @include('includes.what-we-do-sidebar-m')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .cliclskil1 ul {
            list-style: none;
            padding-left: 0;
        }

        .cliclskil1 ul li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .cliclskil1 ul li img {
            position: absolute;
            left: 0;
            top: 12px;
            width: 20px;
            height: 20px;
        }
    </style>
@stop
