@php($title = 'डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईतील कायफोसिस उपचार')

@section('meta_desc')
    डॉ. विशाल कुंदनानी स्पाइन स्पेशालिस्ट यांच्या मदतीने मुंबईत कायफोसिसचा प्रभावी उपचार मिळवा. मुंबईत स्पाइन आरोग्यासाठी तज्ञ काळजी आणि उपाय.
@endsection

@section('meta_keywords',
    'कायफोसिस उपचार मुंबई, डॉ. विशाल कुंदनानी, स्पाइन स्पेशालिस्ट मुंबई, स्पाइन सर्जन मुंबई,
    स्पाइन क्लिनिक मुंबई, मायक्रो एंडोस्कोपिक स्पाइन सर्जरी डॉक्टर मुंबई, स्पाइन रोग डॉक्टर मुंबई, स्पाइन सर्जरी
    स्पेशालिस्ट मुंबई, टॉप स्पाइन डॉक्टर बांद्रा, स्पाइन स्पेशालिस्ट बांद्रा, स्पाइन उपचार मुंबई, स्पाइन रोग उपचार
    मुंबई')

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "Top Treatment for Kyphosis in Mumbai by Dr. Vishal Kundnani",
  "description": "Get effective treatment for kyphosis from Dr. Vishal Kundnani Spine Specialist in Mumbai. Expert care and solutions in Mumbai for spine health.",
  "url": "https://www.spinesurgeonmumbai.com/kyphosis-m.php",
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
    "name": "Kyphosis",
    "description": "Kyphosis is a spinal deformity characterized by an excessive forward rounding of the upper back. While some kyphosis is normal in the thoracic spine, excessive curvature (more than 40-45 degrees) is considered abnormal.",
    "possibleTreatment": {
      "@type": "MedicalTherapy",
      "name": "Kyphosis Treatment",
      "description": "Comprehensive treatment options for kyphosis including physical therapy, bracing, and surgical intervention when necessary."
    }
  }
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is kyphosis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kyphosis is a spinal deformity where there is an excessive forward rounding of the upper back. While some kyphosis is normal in the thoracic spine (20-40 degrees), excessive curvature (more than 40-45 degrees) is considered abnormal."
      }
    },
    {
      "@type": "Question",
      "name": "What are the types of kyphosis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Common types include: Postural kyphosis (round back), Scheuermann's Kyphosis, Congenital Kyphosis, and Kyphosis caused by conditions like osteoporosis, spinal trauma, or degenerative diseases."
      }
    },
    {
      "@type": "Question",
      "name": "What are the treatment options for kyphosis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Treatment options include: Physical therapy and exercise, spinal braces for pain relief, medications for underlying conditions, and surgery for severe cases. Surgery may be recommended for progressive pain, curve progression, cosmetic concerns, or neurological symptoms."
      }
    }
  ]
}
</script>
@endsection

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
                    <li><a href="{{ route('kyphosis-m') }}">कायफोसिस</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('kyphosis') }}" class="language-btn {{ request()->is('kyphosis') && !request()->is('kyphosis-*') ? 'active' : '' }}">इंग्रजी</a>
                                    <a href="{{ route('kyphosis-h') }}" class="language-btn {{ request()->is('kyphosis-h') ? 'active' : '' }}">हिंदी</a>
                                    <a href="{{ route('kyphosis-m') }}" class="language-btn {{ request()->is('kyphosis-m') ? 'active' : '' }}">मराठी</a>
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
                        <h1>कायफोसिस म्हणजे काय?</h1>
                        <p class="mt-1">"कायफोसिस" हा शब्द कशेरुकामध्ये असलेल्या वक्राच्या प्रकाराचे वर्णन करतो. कायफोटिक वक्र 'सामान्यपणे' थोरॅसिक कशेरुकामध्ये (छातीच्या भागातील कशेरुकाचा भाग) असतो. कायफोटिक वक्र "C" अक्षरासारखा दिसतो ज्यामध्ये C चे उघडणे पुढच्या दिशेने असते. थोरॅसिक कशेरुक वक्र असावा अशी अपेक्षा असली तरी, जर एखाद्या व्यक्तीच्या थोरॅसिक कशेरुकामधील वक्र 40 ते 45 अंशांपेक्षा जास्त असेल, तर ते असामान्य मानले जाते - किंवा कशेरुक विकृती.</p>
                        <p><b>सामान्य शरीररचना</b></p>
                        <p>थोरॅसिक कशेरुकामध्ये नैसर्गिकरित्या काही कायफोसिस असतो. कायफोटिक कशेरुक विकृतीचा अर्थ खरोखर कशेरुकामध्ये खूप जास्त कायफोटिक वक्र आहे. थोरॅसिक कशेरुक तुमच्या कशेरुकाच्या मधल्या 12 कशेरुकांपासून बनलेला आहे. थोरॅसिक कशेरुकामधील सामान्य वक्राचे प्रमाण संपूर्ण थोरॅसिक कशेरुकामध्ये 20 ते 40 अंश मानले जाते. "सामान्य" वक्राचे प्रमाण व्यक्तीपासून व्यक्तीपर्यंत बदलते म्हणून एक श्रेणी आहे.</p>
                        <p>कायफोसिसमध्ये वेगवेगळी लक्षणे आणि तीव्रतेची पातळी असू शकते, पाठीच्या आकारातील मामूली बदलांपासून ते गंभीर विकृती, नसांच्या समस्या आणि क्रॉनिक वेदना पर्यंत.</p>
                        <h1>कायफोसिसची लक्षणे आणि कारणे:</h1>
                        <p class="mt-1"><b>चिन्हे आणि लक्षणे यामध्ये समाविष्ट असू शकतात</b></p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीच्या वेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सायटिका</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पॅराप्लेजिया</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कॉस्मेटिक विकृती</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वाकलेली मुद्रा</li>
                        </ul>
                        <h1>कारणे</h1>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पोस्चरल कायफोसिस, किंवा "गोल पाठ"</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">श्यूअरमनचा कायफोसिस</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">जन्मजात कायफोसिस</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पॅरालिटिक डिसऑर्डर</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक आघात</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">ऑस्टिओपोरोसिस</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">क्षयरोग</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॉन्डिलोसिस</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दाहक (अँकिलोसिंग स्पॉन्डिलायटिस)</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक ट्यूमर</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियानंतरचा कायफोसिस</li>
                        </ul>
                        <h1>कायफोसिसची गुंतागुंत / चाचणी आणि निदान:</h1>
                        <p class="mt-1"><b>गुंतागुंत</b></p>
                        <p>बहुतेक लोकांमध्ये कायफोसिसचा सौम्य प्रकार असतो, परंतु कायफोसिस कधीकधी गुंतागुंत निर्माण करू शकतो, ज्यामध्ये हे समाविष्ट आहे:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फुफ्फुस आणि हृदयाचे कार्य बिघडणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीच्या समस्या</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सहज थकवा येणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">खराब कॉस्मेटिक देखावा</li>
                        </ul>
                        <h1>चाचणी आणि निदान</h1>
                        <p class="mt-1">वैद्यकीय इतिहास: यामध्ये रुग्णाशी आणि रुग्णाच्या पालकांशी बोलणे आणि रुग्णाच्या नोंदी तपासणे यांचा समावेश होतो जेणेकरून कशेरुक वक्र निर्माण करणाऱ्या वैद्यकीय समस्या शोधता येतील, उदाहरणार्थ, जन्मजात दोष, आघात, किंवा कायफोसिसशी संबंधित असू शकणारे इतर विकार.</p>
                        <p>शारीरिक परीक्षा: यामध्ये रुग्णाच्या पाठीच्या, छातीच्या, श्रोणीच्या, पायांच्या, पायांच्या आणि त्वचेच्या पाहणीचा समावेश होतो. याचा अर्थ प्रथम तुमच्या पाठीच्या परीक्षणातून आणि तुम्ही कसे हलत असाल याचे निरीक्षण करून कशेरुक कसा वक्र आहे याची "मानसिक प्रतिमा" मिळवण्याचा प्रयत्न करणे. तुमचे डॉक्टर तुम्ही काही दिशांमध्ये कसे वाकत असाल याची लवचिकता पाहतील. न्यूरोलॉजिकल परीक्षा केली जाते ज्यामध्ये स्नायूंची कमकुवतपणा, सुन्नता, असामान्य प्रतिक्रिया X-रे मूल्यांकन तपासले जाते. कशेरुकाचा X-रे कायफोसिसच्या निदानाची पुष्टी करू शकतो. X-रे वर कायफोसिसचे परिमाण आणि प्रकार मोजले जाते.</p>
                        <p>प्रकरणानुसार अतिरिक्त इमेजिंग चाचण्या शिफारस केल्या जाऊ शकतात.</p>
                        <h1>यामध्ये हे समाविष्ट आहे:</h1>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चुंबकीय अनुनाद इमेजिंग (MRI)</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">संगणकीय टोमोग्राफी (CT स्कॅन)</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">हाड स्कॅन, EMG/NCV</li>
                        </ul>
                        <p class="mt-1"><b>उपचार</b></p>
                        <p>कायफोसिसच्या उपचारासाठी विविध पर्याय आहेत. शक्य असल्यास, कायफोसिसच्या उपचाराचा पहिला पर्याय नेहमी रूढिवादी असतो. सामान्यतः शिफारस केलेल्या रूढिवादी उपचारामध्ये हे समाविष्ट आहे: औषधे, व्यायाम, आणि कशेरुकाला आधार देण्यासाठी काही प्रकारचे ब्रेस. औषधे स्वतः कायफोसिस दुरुस्त करू शकत नाहीत. ते अंतर्निहित स्थितीच्या उपचारासाठी सल्ला दिले जातात.</p>
                        <p><b>शारीरिक चिकित्सा</b></p>
                        <p>शारीरिक चिकित्सा आणि व्यायाम हे प्रौढ कायफोसिसच्या उपचाराचा महत्त्वाचा भाग आहे. चांगल्या प्रकारे डिझाइन केलेला व्यायाम कार्यक्रम अनेक रुग्णांमध्ये वेदना आराम देऊ शकतो. शारीरिक चिकित्सक तुमच्या प्रकरणासाठी योग्य व्यायाम दिनचर्या विकसित करेल. तुम्ही योजनेला चिकटून राहणे आवश्यक आहे.</p>
                        <p><b>कशेरुक ब्रेस</b></p>
                        <p>कशेरुक ब्रेसचा वापर काही वेदना आराम देऊ शकतो. तथापि, प्रौढांमध्ये, ते कशेरुक सरळ करत नाही.</p>
                        <p><b>शल्यक्रिया</b></p>
                        <p>खालील परिस्थितींमध्ये शल्यक्रिया शिफारस केली जाऊ शकते:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">प्रगतिशील / सतत पाठीच्या वेदना / मानेच्या वेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वक्राची प्रगती</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कॉस्मेटिक देखावा</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सायटिका</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पॅराप्लेजिया</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक स्टेनोसिस</li>
                        </ul>
                        <p class="mt-1">मुख्य शल्यक्रिया प्रक्रिया म्हणजे विकृती दुरुस्ती म्हणजे स्कोलिओसिस दुरुस्ती, डिकंप्रेशन, कशेरुक इन्स्ट्रुमेंटेशन, आणि वक्राचे कशेरुक फ्यूजन.</p>
                        <p>शल्यक्रियेबद्दल विचार करणाऱ्या रुग्ण आणि पालकांना खालील प्रश्न विचारायचे असू शकतात:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेपासून काय फायदे आहेत?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेपासून काय धोके आहेत?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेसाठी कोणत्या तंत्रांचा वापर केला जाईल?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेनंतर कशेरुक स्थिर ठेवण्यासाठी कोणते उपकरणे वापरली जातील?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चीरे कुठे केले जातील?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेनंतर कशेरुक कितपत सरळ असेल?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">रुग्णालयात किती काळ राहावे लागेल?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेपासून बरे होण्यास किती वेळ लागेल?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेनंतर क्रॉनिक पाठीच्या वेदना आहेत का?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">रुग्णाची वाढ मर्यादित होईल का?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक कितपत लवचिक राहील?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेनंतर वक्र वाईट होऊ शकतो किंवा प्रगती करू शकतो का?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">अतिरिक्त शल्यक्रिया आवश्यक असू शकते का?</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शल्यक्रियेनंतर रुग्ण आपल्याला हवे असलेले सर्व काम करू शकेल का?</li>
                        </ul>
                        <p class="mt-1">कशेरुक शल्यक्रियेच्या गुंतागुंतांमध्ये रक्तस्राव, संसर्ग, वेदना, नसांचे नुकसान किंवा सपाट पाठ यांचा समावेश होऊ शकतो. क्वचित, हाड बरे होत नाही आणि दुसरी शल्यक्रिया आवश्यक असू शकते.</p>
                        <h1>कायफोसिस दुरुस्ती शल्यक्रिया म्हणजे काय?</h1>
                        <p class="mt-1">कायफोसिस विकृतीच्या व्यवस्थापनासाठी विविध पर्याय आहेत जे कायफोसिसच्या परिमाण आणि तीव्रतेवर अवलंबून असतात. कायफोसिसच्या व्यवस्थापनाचे विविध पर्याय आहेत</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">इन सिटू कशेरुक फ्यूजन</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पॉन्टेस ऑस्टिओटॉमी / स्मिथ पीटरसन ऑस्टिओटॉमी</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पेडिकल सबट्रॅक्शन ऑस्टिओटॉमी</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कशेरुक स्तंभ रिसेक्शन शल्यक्रिया</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.we-treat-m')
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
