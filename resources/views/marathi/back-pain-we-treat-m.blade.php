@php($title = 'डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईतील पाठीच्या वेदनेचा सर्वोत्तम उपचार')

@section('meta_desc')
    डॉ. विशाल कुंदनानी यांच्या मुंबईतील सर्वोत्तम उपचारांसह पाठीच्या वेदनेतून आराम मिळवा. मुंबईत प्रभावी वेदना व्यवस्थापनासाठी सर्वसमावेशक काळजी.
@endsection

@section('meta_keywords',
    'पाठीच्या वेदना उपचार मुंबई, डॉ. विशाल कुंदनानी, स्पाइन स्पेशालिस्ट मुंबई, स्पाइन सर्जन मुंबई,
    स्पाइन क्लिनिक मुंबई, मायक्रो एंडोस्कोपिक स्पाइन सर्जरी डॉक्टर मुंबई, स्पाइन रोग डॉक्टर मुंबई, स्पाइन सर्जरी
    स्पेशालिस्ट मुंबई, टॉप स्पाइन डॉक्टर बांद्रा, स्पाइन स्पेशालिस्ट बांद्रा, स्पाइन उपचार मुंबई, स्पाइन रोग उपचार
    मुंबई')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalWebPage",
            "name": "Back Pain Treatment in Mumbai by Dr. Vishal Kundnani",
            "description": "Get expert treatment for various types of back pain from Dr. Vishal Kundnani Spine Specialist in Mumbai. Comprehensive care and solutions for all back pain conditions.",
            "url": "https://www.spinesurgeonmumbai.com/back-pain-we-treat-m.php",
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
                "description": "Back pain is a common condition that can affect people of all ages. It can range from a dull, constant ache to a sudden, sharp pain that makes it difficult to move.",
                "possibleTreatment": {
                    "@type": "MedicalTherapy",
                    "name": "Back Pain Treatment",
                    "description": "Comprehensive treatment options for back pain including physical therapy, pain management, and surgical intervention when necessary."
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
                    "name": "What are the common types of back pain?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Common types include: Acute back pain (short-term), Chronic back pain (long-term), Lower back pain, Upper back pain, and pain caused by specific conditions like herniated discs, spinal stenosis, or sciatica."
                    }
                },
                {
                    "@type": "Question",
                    "name": "When should I see a doctor for back pain?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You should see a doctor if: The pain persists for more than a few weeks, the pain is severe and doesn't improve with rest, you experience numbness or tingling, you have difficulty walking or standing, or if the pain is accompanied by other symptoms like fever or weight loss."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What are the treatment options for back pain?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Treatment options include: Physical therapy and exercise, pain medications, spinal injections, lifestyle modifications, and in severe cases, surgical intervention. The treatment plan is customized based on the cause and severity of the pain."
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
                <h2>आम्ही <span>उपचार करतो</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">मुख्यपृष्ठ</a></li>
                    <li><a href="{{ route('back-pain-we-treat-m') }}">पाठीच्या वेदना</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('back-pain-we-treat') }}" class="language-btn {{ request()->is('back-pain-we-treat') && !request()->is('back-pain-we-treat-*') ? 'active' : '' }}">
                                        इंग्रजी
                                    </a>
                                    <a href="{{ route('back-pain-we-treat-h') }}" class="language-btn {{ request()->is('back-pain-we-treat-h') ? 'active' : '' }}">
                                        हिंदी
                                    </a>
                                    <a href="{{ route('back-pain-we-treat-m') }}" class="language-btn {{ request()->is('back-pain-we-treat-m') ? 'active' : '' }}">
                                        मराठी
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
                        <h2><strong>मुंबईत पाठीच्या वेदनेचा उपचार</strong></h2>
                        <div class=" ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/back-pain-treatment.jpg') }}"
                                alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत पाठीच्या वेदनेचा उपचार"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <h1>पाठीच्या वेदना म्हणजे काय?</h1>
                        <p class="mt-1">खालच्या पाठीच्या/मध्य पाठीच्या भागातील वेदना ज्यामुळे कार्यक्षमतेचे नुकसान होते. <a
                                href="https://spinesurgeonmumbai.com/spine-tip-of-the-day-back-pain.php"
                                target="_blank">पाठीतील वेदना</a> ही
                            केवळ एक सामान्य तक्रार नाही तर आजारी अनुपस्थितीमध्ये सामान्य सर्दीच्या नंतर दुसऱ्या क्रमांकावर आहे. असे
                            मानले जाते की सामान्य लोकसंख्येपैकी सुमारे 85% लोकांना त्यांच्या आयुष्यात <a
                                href="https://www.mayoclinic.org/diseases-conditions/back-pain/symptoms-causes/syc-20369906"
                                target="_blank"><b>पाठीच्या वेदना</b></a>चा किमान एक एपिसोड होईल.</p>
                        <h2>पाठीच्या वेदनांची कारणे काय आहेत?</h2>
                        <p class="mt-1"><b>खालच्या पाठीच्या वेदनांचे जोखीम घटक असू शकतात:</b></p>
                        <p><b>वय वाढत जाणे :</b> सामान्य वय-संबंधित अधोगामी प्रक्रियेचा भाग म्हणून.</p>
                        <p><b>जीवनशैली :</b> ताण आणि भावनिक ताण, चुकीची मुद्रा - दीर्घ काळ उभे राहणे किंवा
                            चुकीच्या पद्धतीने बसणे—पाठीच्या वेदना होऊ शकतात, जड शारीरिक काम, उचलणे किंवा जोरदार हालचाल, वाकणे,
                            किंवा अवघड स्थिती खरोखर तुमच्या पाठीला दुखवू शकतात.</p>
                        <div class="container ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/risk-factor-for-low-back-pain.jpg') }}"
                                alt="खालच्या पाठीच्या वेदनांचे जोखीम घटक: डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत पाठीच्या वेदनेचा उपचार"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <p><b>दुखापती आणि अपघात :</b> स्नायूंची, अस्थिबंधनांची, किंवा मऊ ऊतकांची दुखापत पाठीच्या वेदना होऊ शकतात.
                            पडण्यात किंवा कार अपघातात कशेरुक हाडातील फ्रॅक्चर देखील एक सामान्य कारण आहे. जर तुम्हाला ऑस्टिओपोरोसिस असेल, एक
                            स्थिती जी तुमची हाडे कमकुवत करते, तर तुम्ही हाड तोडण्यास अधिक प्रवृत्त आहात.</p>
                        <p><b>स्थूलता :</b> जास्त वजन असणे पाठीवर, विशेषतः खालच्या पाठीवर दबाव आणि ताण आणते. जास्त
                            वजन वाहणे इतर आरोग्य स्थिती वाढवते जसे की ऑस्टिओपोरोसिस (कमकुवत हाडे), ऑस्टिओआर्थरायटिस (सांध्याच्या वेदना),
                            रुमॅटॉइड आर्थरायटिस (स्व-प्रतिरक्षा रोग), अधोगामी डिस्क रोग (वय वाढत जाणे विभागात वर्णन केलेले),
                            कशेरुक स्टेनोसिस, आणि स्पॉन्डिलोलिस्थेसिस.</p>

                        <!-- Back pain is also caused by a specific spinal condition like -->


                        <h3>पाठीच्या वेदना विशिष्ट कशेरुक स्थितीमुळे देखील होतात जसे की :</h3>
                        <div class="container ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/causes-of-back-pain.jpg') }}"
                                alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत पाठीच्या वेदनांची कारणे"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्लिप
                                डिस्क
                            </li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक
                                स्टेनोसिस</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फॅसेटेड
                                आर्थरायटिस</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॉन्डिलोसिस
                            </li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">प्राथमिक
                                कशेरुक ट्यूमर</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक
                                मेटास्टॅटिक ट्यूमर</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">संक्रमण
                            </li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">क्षयरोग
                            </li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक
                                फ्रॅक्चर</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चयापचय
                                कारण- ऑस्टिओमलेशिया</li>
                        </ul>



                        <!-- Back pain is also caused by a specific spinal condition like end -->



                        <h3 class="mt-2">पाठीच्या कशेरुकाची शरीररचना काय आहे?</h3>
                        <p class="mt-1">मानवी कशेरुक 33 हाडांनी (कशेरुक) बनलेली असते जी डिस्कद्वारे कुशन केली जातात.
                            हे कशेरुक प्रदेशानुसार विभागलेले आहेत: मान (सर्वायकल कशेरुक), मध्य पाठ (थोरॅसिक कशेरुक), आणि खालची पाठ
                            (लंबर कशेरुक). खालच्या टोकावर कशेरुक सॅक्रमच्या टर्मिनल हाडावर आणि कोक्सीक्सवर समाप्त होतो, ज्याला सामान्यतः
                            तुमची टेलबोन म्हणतात. या हाडांमध्ये डिस्क असतात. डिस्क चालणे, उचलणे आणि वाकणे यासारख्या
                            दैनंदिन क्रियाकलापांमधून येणाऱ्या झटक्यांना शोषून घेऊन हाडांचे रक्षण करतात. प्रत्येक डिस्कचे दोन भाग असतात – एक मऊ,
                            जेलीसारखा आतील भाग (न्यूक्लियस पल्पस) आणि एक कठोर बाह्य रिंग (अन्युलस फाइब्रोसिस). फॅसेट सांधे तुमच्या कशेरुकांच्या
                            मागच्या बाजूला (पाठ) असतात. हे सांधे (तुमच्या शरीरातील सर्व सांध्यांप्रमाणे) हालचालीत मदत करतात आणि
                            लवचिकतेसाठी खूप महत्वाचे आहेत. एकत्रितपणे, कशेरुक आणि डिस्क एक सुरंग बनवतात ज्यातून कशेरुक रज्जू
                            आणि नसा जातात. कशेरुकामध्ये स्नायू, अस्थिबंधने आणि रक्तवाहिन्या देखील असतात. स्नायू हे ऊतक आहेत जे
                            हालचालीसाठी शक्ती जनरेटर म्हणून काम करतात. अस्थिबंधने मजबूत, लवचिक फाइब्रस ऊतकांचे बँड आहेत जे
                            हाडांना एकत्र जोडतात.</p>
                        <h2>पाठीच्या वेदनांशी संबंधित सामान्य लक्षणे काय आहेत?</h2>
                        <div class="container ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/common-symptoms-of-back-pain.jpg') }}"
                                alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत पाठीच्या वेदनांची सामान्य लक्षणे"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <p class="mt-1">खालच्या पाठीच्या वेदना – प्रकार वैशिष्ट्य, कालावधी, पुनर्प्राप्ती आणि नैसर्गिक अभ्यासक्रम यावर अवलंबून असतो
                            काय
                            वेदना निर्माण करत आहे आणि ते तुमच्या कशेरुकाला कुठे प्रभावित करत आहे. पाठीच्या वेदनांशी संबंधित सामान्य तक्रारी आहेत:
                        </p>
                        <ul class="mb-1">
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सकाळची
                                अकडणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॅसम
                            </li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">बाजूंमध्ये
                                वेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">बसण्यात,
                                पुढे वाकण्यात अडचण</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दीर्घकाळ
                                बसणे किंवा जमिनीच्या पातळीवरील क्रियाकलाप करण्यात वेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चालण्यात
                                आणि झोपण्यात अडचण देखील एक सामान्य प्रस्तुतीकरण आहे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीच्या
                                वेदनांशी संबंधित लक्षणे म्हणजे पायातील वेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पायांमध्ये
                                सुन्नता/कमकुवतपणा</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मूत्र
                                किंवा मल विसर्जनात अडचण आणि चालण्यात अडचण</li>
                        </ul>

                        <h3>मला कधी वैद्यकीय सल्ला घ्यावा लागेल? मी माझ्या पाठीच्या वेदनांचा घरगुती उपायांनी उपचार करू शकतो का?</h3>
                        <p class="mt-1">बहुतेक पाठीच्या वेदना रुग्ण साध्या वेदना व्यवस्थापन उपायांनी बरे होतील. तथापि
                            जर तुमच्या पाठीच्या वेदना टिकून राहत असतील तर वैद्यकीय मदत घ्यावी आणि जर तुमच्याकडे खालील आपत्कालीन चिन्हांपैकी कोणतेही पाठीच्या वेदनांसह असतील तर तत्काळ लक्ष द्यावे:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वेदना
                                लक्षणीयरीत्या वाढत आहे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वेदना
                                दैनंदिन क्रियाकलापांना प्रभावित करते</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गंभीर
                                लक्षणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">संबंधित
                                ताप किंवा संविधानिक लक्षणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मांडी
                                किंवा
                                पायात कमकुवतपणा किंवा सुन्नता</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">हात
                                किंवा हातात कमकुवतपणा, झुनझुनी, किंवा सुन्नता</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मल
                                किंवा मूत्राशय नियंत्रणाचे नुकसान</li>
                        </ul>
                        <h3>पाठीच्या वेदनांसाठी उपचार पर्याय काय आहेत?</h3>
                        <div class="container ba_image mt-4">

                            <img src="{{ asset('resources/assets/images/treatment-options-for-back-pain.jpg') }}"
                                alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत पाठीच्या वेदनांसाठी उपचार पर्याय"
                                class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">

                        </div>
                        <p class="mt-1">लक्षणांच्या तीव्रते आणि कालावधीवर अवलंबून पाठीच्या वेदनांच्या उपचारासाठी विविध पर्याय आहेत.</p>
                        <p><b>ते एक किंवा अनेकांपासून बनलेले असू शकतात;-</b></p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">औषधे
                                आणि
                                दवा</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शारीरिक
                                चिकित्सा</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक
                                ब्रेसिंग</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक
                                इंजेक्शन</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक
                                शल्यक्रिया</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फिजिओथेरपी
                            </li>
                        </ul>
                        <p class="mt-1">पाठीच्या वेदनांतून आरामासाठी औषधे, दवा: औषधे एकटी तुमच्या पाठीच्या वेदनांचे अंतिम समाधान नाही, तथापि
                            आपत्कालीन काळात किंवा गंभीर वेदनेच्या काळात ही औषधे तुम्हाला पीडा कमी करण्यात मदत करू शकतात.</p>
                        <p>एसिटामिनोफेन: तुमचे डॉक्टर याला एनाल्जेसिक म्हणू शकतात, परंतु आपल्यापैकी बहुतेक एसिटामिनोफेन औषधांना वेदना निवारक म्हणून संदर्भित करतो. तथापि, ते सूज कमी करण्यात मदत करत नाहीत.</p>
                        <p>NSAIDs (नॉन-स्टेरॉइडल अँटी-इन्फ्लेमेटरी ड्रग्स): हे सूज (किंवा दाह) कमी करण्यात मदत करतील तर
                            तुमच्या वेदना कमी करतात; NSAIDs एसिटामिनोफेनपेक्षा वेगळे कसे आहेत हा मार्ग आहे. जर ओव्हर-द-काउंटर
                            NSAID तुमच्यासाठी पर्याय असेल, तर तुमच्याकडे निवडण्यासाठी पुष्कळ आहे. तुम्ही इबुप्रोफेन, एस्पिरिन वापरू शकता; तथापि कोणतेही औषध घेण्यापूर्वी वैद्यकीय सल्ला घ्या.</p>
                        <p>स्नायू शिथिलता: जर तुम्हाला स्नायू स्पॅसममुळे क्रॉनिक पाठीच्या वेदना असतील, तर तुम्हाला स्नायू शिथिलता आवश्यक असू शकते,
                            जे स्पॅसम थांबवण्यात मदत करेल</p>
                        <p>अँटी-डिप्रेसेंट्स: जितके आश्चर्यकारक वाटू शकते, अँटी-डिप्रेसेंट्स वेदनांच्या उपचारासाठी प्रभावी औषधे असू शकतात
                            कारण ते मेंदूकडे जाणाऱ्या वेदना संदेशांना अडवतात. ते तुमच्या शरीराच्या
                            एंडॉर्फिन्स, एक नैसर्गिक वेदना निवारकाच्या उत्पादन वाढवण्यात देखील मदत करू शकतात.</p>
                        <p>ओपिओइड्स: सर्वात अत्यंत प्रकरणांमध्ये, आणि केवळ सावधानीपूर्वक देखरेखीखाली, तुमचे डॉक्टर
                            मॉर्फिन किंवा कोडीन सारखे ओपिओइड देखील लिहू शकतात.</p>
                        <p>औषध चेतावणी: सर्व औषधांसह, तुम्ही तुमच्या डॉक्टराच्या सल्ल्याचे अचूकपणे पालन केले पाहिजे.
                            तुमच्या डॉक्टराशी सल्लामसलत न करता ओव्हर-द-काउंटर आणि निर्धारित औषधे कधीही मिसळू नका.</p>


                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.we-treat-m')

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop