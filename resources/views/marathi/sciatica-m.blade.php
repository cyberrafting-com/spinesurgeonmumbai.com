@php($title = 'डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईतील सायटिका उपचार')

@section('meta_desc')
    डॉ. विशाल कुंदनानी स्पाइन स्पेशालिस्ट यांच्या मदतीने मुंबईत सायटिकाचा सर्वोत्तम उपचार मिळवा. मुंबईत स्पाइन समस्यांसाठी प्रभावी उपाय आणि तज्ञ काळजी.
@endsection

@section('meta_keywords',
    'सायटिका उपचार मुंबई, डॉ. विशाल कुंदनानी, स्पाइन स्पेशालिस्ट मुंबई, स्पाइन सर्जन मुंबई,
    स्पाइन क्लिनिक मुंबई, मायक्रो एंडोस्कोपिक स्पाइन सर्जरी डॉक्टर मुंबई, स्पाइन रोग डॉक्टर मुंबई, स्पाइन सर्जरी
    स्पेशालिस्ट मुंबई, टॉप स्पाइन डॉक्टर बांद्रा, स्पाइन स्पेशालिस्ट बांद्रा, स्पाइन उपचार मुंबई, स्पाइन रोग उपचार
    मुंबई')

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "Expert Sciatica Treatment in Mumbai by Dr. Vishal Kundnani",
  "description": "Get specialized treatment for sciatica with Dr. Vishal Kundnani Spine Specialist Mumbai. Advanced spine care and pain management solutions in Mumbai.",
  "url": "https://www.spinesurgeonmumbai.com/sciatica-m.php",
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
    "name": "Sciatica",
    "description": "Sciatica refers to pain that radiates along the path of the sciatic nerve, which branches from your lower back through your hips and buttocks and down each leg. Typically, sciatica affects only one side of your body.",
    "possibleTreatment": {
      "@type": "MedicalTherapy",
      "name": "Sciatica Treatment",
      "description": "Comprehensive treatment options for sciatica including physical therapy, medications, and surgical intervention when necessary."
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
      "name": "What is sciatica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sciatica refers to pain that radiates along the path of the sciatic nerve, which branches from your lower back through your hips and buttocks and down each leg. Typically, sciatica affects only one side of your body."
      }
    },
    {
      "@type": "Question",
      "name": "What are the common causes of sciatica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Common causes include: Herniated disk, Bone spurs on the spine, Spinal stenosis (narrowing of the spine), Piriformis syndrome (when the piriformis muscle irritates the sciatic nerve), and Spondylolisthesis (when one vertebra slips forward over another)."
      }
    },
    {
      "@type": "Question",
      "name": "What are the symptoms of sciatica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Symptoms include: Pain that radiates from your lower spine to your buttock and down the back of your leg, numbness or tingling in the leg, weakness in the affected leg, and pain that worsens with movement, coughing, or sneezing."
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
                    <li><a href="{{ route('sciatica-m') }}">सायटिका</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('sciatica') }}" class="language-btn {{ request()->is('sciatica') && !request()->is('sciatica-*') ? 'active' : '' }}">ENGLISH</a>
                                    <a href="{{ route('sciatica-h') }}" class="language-btn {{ request()->is('sciatica-h') ? 'active' : '' }}">HINDI</a>
                                    <a href="{{ route('sciatica-m') }}" class="language-btn {{ request()->is('sciatica-m') ? 'active' : '' }}">Marathi</a>
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
                        <h1>डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत सायटिका उपचार</h1>
                        <img src="{{ asset('resources/assets/images/sciatica-treatment.jpg') }}"
                            alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत सायटिका उपचार"
                            class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <p class="mt-1">सायटिका हा सायटिक नसावर परिणाम करणाऱ्या वेदनांचा एक सामान्य प्रकार आहे, जो कंबरेपासून प्रत्येक पायाच्या मागील बाजूने खाली जाणारा एक मोठा नस आहे. मुंबईतील अग्रगण्य स्पाइन सर्जन म्हणून, डॉ. विशाल कुंदनानी सायटिका आणि संबंधित कशेरुक स्थितींचा सर्वसमावेशक उपचार प्रदान करण्यात विशेषज्ञ आहेत.</p>

                        <h2>सायटिकाची लक्षणे काय आहेत?</h2>
                        <p>सायटिकाची सामान्य लक्षणे यामध्ये समाविष्ट आहेत:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">खालच्या पाठीच्या वेदना ज्या खालच्या दिशेने फैलावतात</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मागच्या भागात किंवा पायात वेदना जी बसताना वाढते</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">हिप वेदना जी गतिशीलतेवर परिणाम करते</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पायावर खालच्या दिशेने जळजळ किंवा झुनझुणीची संवेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कमकुवतपणा, सुन्नता, किंवा पाय किंवा पायाची हालचाल करण्यात अडचण</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">नितंबाच्या एका बाजूला सतत वेदना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">तीव्र शूटिंग वेदना जी उभे राहणे कठीण बनवते</li>
                        </ul>

                        <img src="{{ asset('resources/assets/images/symptoms-sciatica-treatment.jpg') }}"
                            alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत सायटिका उपचाराची लक्षणे"
                            class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <h2>सायटिकाची कारणे काय आहेत?</h2>
                        <p>सायटिका विविध कशेरुक किंवा स्नायूंच्या स्थितींमुळे ट्रिगर होऊ शकते, यामध्ये समाविष्ट आहे:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लंबर कशेरुक स्टेनोसिस - खालच्या कशेरुक नलिकेचे अरुंद होणे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">अधोगामी डिस्क रोग - कुशनिंग डिस्कचे ब्रेकडाउन</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॉन्डिलोलिस्थेसिस - एका कशेरुकावर दुसऱ्यावर स्लिपेज</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गर्भधारणा - सायटिक नसावर दबाव</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पाठीच्या किंवा नितंबांमध्ये स्नायूंचे स्पॅसम</li>
                        </ul>

                        <img src="{{ asset('resources/assets/images/causes-of-sciatica.jpg') }}"
                            alt="डॉ. विशाल कुंदनानी यांच्या मदतीने मुंबईत सायटिकाची कारणे"
                            class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <h2>सायटिका आणि इतर स्पाइन-संबंधित वेदनांमधील फरक</h2>
                        <p>सायटिका हा सामान्य पाठीच्या वेदनेपेक्षा वेगळा आहे कारण तो विशिष्ट नसावर परिणाम करतो. सायटिका सहसा एका बाजूला असतो आणि पायावर खालच्या दिशेने फैलावतो, तर सामान्य पाठीच्या वेदना सहसा पाठीच्या मध्यभागी केंद्रित असतात.</p>

                        <h2>सायटिका उपचार पर्याय</h2>
                        <p>डॉ. विशाल कुंदनानी सायटिकाच्या उपचारासाठी विविध पद्धती प्रदान करतात:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">शारीरिक चिकित्सा आणि व्यायाम</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वेदना निवारक औषधे</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">इंजेक्शन थेरपी</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}"
                                    class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"
                                    style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गंभीर प्रकरणांमध्ये शल्यक्रिया</li>
                        </ul>

                        <p class="mt-4"><strong>📍 सायटिका आरामासाठी आमची भेट घ्या</strong><br>
                            जर तुम्हाला सायटिकामुळे सतत वेदना किंवा चालण्यात अडचण येत असेल, तर मुंबईत <a
                                href="{{ route('contact') }}" target="_blank">डॉ. विशाल कुंदनानी</a> यांची भेट घ्या
                            तज्ञ मूल्यांकन आणि उपचारासाठी. विश्वासार्ह काळजीसह तुमची गतिशीलता, आत्मविश्वास आणि वेदनामुक्त जीवन परत मिळवा.<br>
                            <a href="{{ route('contact') }}" target="_blank" class="btn btn-primary mt-3"><strong>📞
                                    आजच तुमची सल्लामसलत बुक करा!</strong></a>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.we-treat')
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
