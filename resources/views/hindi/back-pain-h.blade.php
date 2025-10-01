@php($title = 'मुंबई में पीठ दर्द का उपचार - डॉ. विशाल कुंदनानी')

@section('meta_desc')मुंबई में डॉ. विशाल कुंदनानी के साथ पीठ दर्द से राहत पाएं। प्रभावी दर्द प्रबंधन और उन्नत स्पाइन केयर.@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment Mumbai')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "मुंबई में पीठ दर्द का विशेषज्ञ उपचार - डॉ. विशाल कुंदनानी",
  "description": "मुंबई के स्पाइन विशेषज्ञ डॉ. विशाल कुंदनानी के साथ पीठ दर्द के लिए विशेष उपचार। उन्नत स्पाइन केयर और दर्द प्रबंधन समाधान।",
  "url": "https://www.spinesurgeonmumbai.com/back-pain.php",
  "author": {"@type":"Person","name":"Dr. Vishal Kundnani","jobTitle":"Spine Surgeon","worksFor":{"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","address":{"@type":"PostalAddress","addressLocality":"Mumbai","addressRegion":"Maharashtra","addressCountry":"IN"}}},
  "provider": {"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","medicalSpecialty":"Spine Surgery"},
  "mainEntity": {"@type":"MedicalCondition","name":"Back Pain","description":"पीठ दर्द एक बहुत आम समस्या है जो जीवन में किसी न किसी समय 10 में से 8 लोगों को प्रभावित करती है।","possibleTreatment":{"@type":"MedicalTherapy","name":"Back Pain Treatment","description":"फिजियोथेरेपी, दवाइयाँ और आवश्यकता होने पर सर्जरी सहित समग्र उपचार विकल्प।"}}
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"पीठ दर्द के आम कारण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"आम कारण: मांसपेशी/लिगामेंट स्ट्रेन, डिस्क का फटना या उभरना, आर्थराइटिस, ऑस्टियोपोरोसिस, खराब पोस्टर, भारी वजन उठाना, अचानक हरकतें, तनाव।"}},
    {"@type":"Question","name":"पीठ दर्द के लक्षण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"लक्षण: मांसपेशियों में दर्द, चुभन/तेज दर्द, पैर तक फैलता दर्द, जकड़न, सीधा खड़े होने में कठिनाई, हरकत/उठाने/खड़े रहने से दर्द बढ़ना।"}},
    {"@type":"Question","name":"पीठ दर्द के लिए डॉक्टर को कब दिखाना चाहिए?","acceptedAnswer":{"@type":"Answer","text":"यदि दर्द तेज/लगातार हो, सुन्नपन/झनझनाहट हो, चोट के बाद दर्द हो, चलने-फिरने में कठिनाई हो, पैरों में कमजोरी हो, बुखार के साथ दर्द हो—तो डॉक्टर से मिलें।"}}
  ]
}
</script>

@extends('layouts.default')

@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>हम <span>क्या करते हैं</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">मुख्यपृष्ठ</a></li>
                    <li><a href="{{ route('back-pain') }}">पीठ दर्द</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('back-pain') }}" class="language-btn {{ request()->is('back-pain') && !request()->is('back-pain-*') ? 'active' : '' }}">ENGLISH</a>
                                    <a href="{{ route('back-pain-h') }}" class="language-btn {{ request()->is('back-pain-h') ? 'active' : '' }}">HINDI</a>
                                    <a href="{{ route('back-pain-m') }}" class="language-btn {{ request()->is('back-pain-m') ? 'active' : '' }}">MARATHI</a>
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
                        <h1 class="back_">मुंबई में पीठ दर्द के डॉक्टर</h1>
                        <div class="ba_image mt-4">
                            <img src="{{ asset('resources/assets/images/back-pain-treatment.jpg') }}" alt="मुंबई में पीठ दर्द का उपचार - डॉ. विशाल कुंदनानी" class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                        </div>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            पीठ दर्द क्या है?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">
                                                    पीठ/कंधे/गर्दन क्षेत्र में होने वाला दर्द कामकाज और जीवन की गुणवत्ता को प्रभावित कर सकता है। अनुमान है कि 85% लोग जीवन में कभी न कभी पीठ दर्द का अनुभव करते हैं।
                                                </li>
                                            </ul>
                                            <div class="container ba_image mt-4">
                                                <img src="{{ asset('resources/assets/images/back-pain.jpg') }}" alt="मुंबई में पीठ दर्द का उपचार - डॉ. विशाल कुंदनानी" class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            पीठ दर्द के कारण क्या हैं?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p><b>लो बैक पेन के जोखिम कारक:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">उम्र के साथ होने वाला डीजनरेशन (झीज)।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">जीवनशैली: तनाव, गलत पोस्टर, लंबे समय तक खड़े रहना/गलत तरीके से बैठना, भारी वजन उठाना, अचानक मुड़ना।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चोट/दुर्घटना: मांसपेशियों/लिगामेंट्स की चोट, स्पाइनल हड्डी का फ्रैक्चर, ऑस्टियोपोरोसिस में जोखिम अधिक।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मोटापा: अतिरिक्त वजन से कमर पर अधिक दबाव।</li>
                                            </ul>
                                            <p><b>विशिष्ट स्पाइनल स्थितियाँ:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्लिप डिस्क/डिस्क बुल्ज/हर्निएटेड डिस्क</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल स्टेनोसिस/लंबर स्पाइनल स्टेनोसिस</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फेसट आर्थराइटिस</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॉन्डायलोसिस, ट्यूमर, संक्रमण, टीबी, फ्रैक्चर, विटामिन D की कमी</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            पीठ दर्द के सामान्य लक्षण
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>दर्द का प्रकार, अवधि और सुधार—कारण और प्रभावित क्षेत्र पर निर्भर करता है। सामान्य शिकायतें:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">जकड़न, सुबह उठने पर जकड़न, मांसपेशियों में ऐंठन</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पैर में दर्द/सुन्नपन/झनझनाहट, चलने में कठिनाई</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">झुकने/बैठने/लंबे समय तक बैठने पर दर्द बढ़ना</li>
                                            </ul>
                                            <p>यदि पीठ दर्द के साथ कंधे/बांह में दर्द, सुन्नपन या कमजोरी हो तो स्पाइन विशेषज्ञ से मिलें।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            डॉक्टर को कब दिखाएँ? रेड फ्लैग संकेत
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>अधिकांश मरीज साधारण दर्द प्रबंधन से ठीक हो जाते हैं। लेकिन 3 हफ्ते से अधिक दर्द रहे या निम्न रेड फ्लैग हों तो तुरंत दिखाएँ:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दर्द लगातार/तेजी से बढ़ना, रोज़मर्रा काम प्रभावित होना, तेज लक्षण</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">बुखार, कंधे/बांह में दर्द/सुन्नपन/कमजोरी, आंत्र/मूत्र नियंत्रण में कमी</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            पीठ दर्द के उपचार विकल्प
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>लक्षणों की तीव्रता और अवधि के आधार पर उपचार तय किया जाता है।</p>
                                            <p><b>हमारे <a href="{{ route('home') }}">उन्नत स्पाइन सेंटर</a> में उपलब्ध विकल्प:</b></p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दवाइयाँ</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फिजियोथेरेपी</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल ब्रेसिंग</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल इंजेक्शंस</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सर्जरी (आवश्यक होने पर)</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पीठ दर्द के लिए व्यायाम व फिजियो थेरेपी</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="spine-expert-section mt-4">
                                <h2>मुंबई में विशेषज्ञ पीठ दर्द उपचार</h2>
                                <p><a href="{{ route('about-doctor') }}">डॉ. विशाल कुंदनानी</a> उन्नत तकनीक और व्यक्तिगत देखभाल के साथ जटिल स्पाइनल स्थितियों का सफलतापूर्वक इलाज करते हैं। न्यूनतम चीर-फाड़ (MIS) तकनीकों में अनुभवी, 5000+ सर्जरी का अनुभव।</p>
                                <div class="container ba_image mt-4">
                                    <img src="{{ asset('resources/assets/images/expert-back-pain-treatment-mumbai.png') }}" alt="मुंबई में पीठ दर्द का उपचार - डॉ. विशाल कुंदनानी" class=" img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                                </div>
                                <h3>क्यों चुनें हमारा स्पाइन सेंटर?</h3>
                                <ul>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated" data-wow-iteration="infinite" alt="pic">आधुनिक सुविधाएँ</li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated" data-wow-iteration="infinite" alt="pic">मिनिमली इनवेसिव सर्जरी तकनीक</li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated" data-wow-iteration="infinite" alt="pic">समग्र स्पाइन केयर</li>
                                    <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated" data-wow-iteration="infinite" alt="pic">व्यक्तिगत उपचार योजना</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.what-we-do-sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .cliclskil1 ul { list-style: none; padding-left: 0; }
        .cliclskil1 ul li { position: relative; padding-left: 35px; margin-bottom: 15px; line-height: 1.6; }
        .cliclskil1 ul li img { position: absolute; left: 0; top: 12px; width: 20px; height: 20px; }
    </style>
@stop
