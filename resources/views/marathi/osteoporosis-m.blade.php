@php($title = 'डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईतील ऑस्टिओपोरोसिस उपचार')

@section('meta_desc')
    डॉ. विशाल कुंदनानी यांच्या मदतीने ऑस्टिओपोरोसिसचा प्रभावी उपचार मिळवा. मुंबईत हाडांच्या आरोग्यासाठी तज्ञ काळजी आणि उपाय.
@endsection

@section('meta_keywords',
    'ऑस्टिओपोरोसिस उपचार मुंबई, डॉ. विशाल कुंदनानी, स्पाइन स्पेशालिस्ट मुंबई, स्पाइन सर्जन मुंबई,
    स्पाइन क्लिनिक मुंबई, मायक्रो एंडोस्कोपिक स्पाइन सर्जरी डॉक्टर मुंबई, स्पाइन रोग डॉक्टर मुंबई, स्पाइन सर्जरी
    स्पेशालिस्ट मुंबई, टॉप स्पाइन डॉक्टर बांद्रा, स्पाइन स्पेशालिस्ट बांद्रा, स्पाइन उपचार मुंबई, स्पाइन रोग उपचार
    मुंबई')

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "Top Treatment for Osteoporosis in Mumbai by Dr. Vishal Kundnani",
  "description": "Find effective osteoporosis treatment with Dr.Vishal Kundnani Spine Surgeon in Mumbai. Expert care and solutions for bone health in Mumbai.",
  "url": "https://www.spinesurgeonmumbai.com/osteoporosis-m.php",
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
    "name": "Osteoporosis",
    "description": "Osteoporosis is a condition that weakens bones, making them fragile and more likely to break. It is common in older adults, especially women, and often goes undetected until a fracture occurs.",
    "possibleTreatment": {
      "@type": "MedicalTherapy",
      "name": "Osteoporosis Treatment",
      "description": "Comprehensive treatment options for osteoporosis including medications, dietary changes, exercise, and lifestyle modifications to strengthen bones and prevent fractures."
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
      "name": "What is osteoporosis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Osteoporosis is a condition that causes bones to become weak and brittle, increasing the risk of fractures. It is often called a 'silent disease' because bone loss occurs without symptoms."
      }
    },
    {
      "@type": "Question",
      "name": "What are the risk factors for osteoporosis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Risk factors include: Aging, being small and thin, family history, certain medications, being a white or Asian woman, and having osteopenia (low bone density)."
      }
    },
    {
      "@type": "Question",
      "name": "How is osteoporosis treated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Treatment includes: Medications to strengthen bones, a diet rich in calcium and vitamin D, regular exercise, and avoiding smoking. Bone density tests are used to monitor bone health."
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
                    <li><a href="{{ route('osteoporosis-m') }}">ऑस्टिओपोरोसिस</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('osteoporosis') }}" class="language-btn {{ request()->is('osteoporosis') && !request()->is('osteoporosis-*') ? 'active' : '' }}">ENGLISH</a>
                                    <a href="{{ route('osteoporosis-h') }}" class="language-btn {{ request()->is('osteoporosis-h') ? 'active' : '' }}">HINDI</a>
                                    <a href="{{ route('osteoporosis-m') }}" class="language-btn {{ request()->is('osteoporosis-m') ? 'active' : '' }}">Marathi</a>
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
                        <h1>ऑस्टिओपोरोसिस</h1>
                        <p class="mt-1">ऑस्टिओपोरोसिस तुमची हाडे कमकुवत बनवते आणि तुटण्याची शक्यता वाढवते. कोणीही ऑस्टिओपोरोसिस विकसित करू शकतो, परंतु हे वृद्ध महिलांमध्ये सामान्य आहे. 50 वर्षांपेक्षा जास्त वयाच्या सर्व महिलांपैकी अर्ध्या आणि पुरुषांपैकी एक चतुर्थांश लोकांना ऑस्टिओपोरोसिसमुळे हाड तुटेल.</p>
                        <h1>जोखीम घटकांमध्ये हे समाविष्ट आहे</h1>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वय वाढत जाणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लहान आणि पातळ असणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">ऑस्टिओपोरोसिसचा कुटुंबातील इतिहास असणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">काही औषधे घेणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पांढरी किंवा आशियाई महिला असणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">ऑस्टिओपेनिया असणे, जे कमी हाडांची घनता आहे</li>
                        </ul>
                        <p class="mt-1">ऑस्टिओपोरोसिस हा एक मूक रोग आहे. तुम्हाला हाड तुटेपर्यंत तुम्हाला हे माहीत नाही. हाडांच्या आरोग्याची तपासणी करण्यासाठी हाडांच्या खनिज घनतेची चाचणी हा सर्वोत्तम मार्ग आहे. हाडे मजबूत ठेवण्यासाठी, कॅल्शियम आणि विटॅमिन डी युक्त आहार घ्या, व्यायाम करा आणि धूम्रपान करू नका. आवश्यक असल्यास, औषधे देखील मदत करू शकतात.</p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.we-treat')
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
