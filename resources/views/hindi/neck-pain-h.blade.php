@php($title = 'मुंबई में गर्दन दर्द का उपचार - डॉ. विशाल कुंडनानी')

@section('meta_desc')मुंबई में स्पाइन विशेषज्ञ डॉ. विशाल कुंडनानी के साथ गर्दन दर्द का सर्वोत्तम उपचार। प्रभावी राहत के लिए विशेषज्ञ देखभाल.@endsection

@section('meta_keywords',
'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment Mumbai')

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"MedicalWebPage",
  "name":"मुंबई में गर्दन दर्द का विशेषज्ञ उपचार - डॉ. विशाल कुंडनानी",
  "description":"मुंबई के स्पाइन विशेषज्ञ डॉ. विशाल कुंडनानी के साथ गर्दन दर्द के लिए विशेष उपचार। उन्नत स्पाइन केयर और दर्द प्रबंधन।",
  "url":"https://www.spinesurgeonmumbai.com/neck-pain.php",
  "author":{"@type":"Person","name":"Dr. Vishal Kundnani","jobTitle":"Spine Surgeon","worksFor":{"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","address":{"@type":"PostalAddress","addressLocality":"Mumbai","addressRegion":"Maharashtra","addressCountry":"IN"}}},
  "provider":{"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","medicalSpecialty":"Spine Surgery"},
  "mainEntity":{"@type":"MedicalCondition","name":"Neck Pain","description":"गर्दन दर्द एक सामान्य समस्या है जो खराब पोस्टर, मांसपेशी खिंचाव, चोट या कुछ चिकित्सीय स्थितियों के कारण हो सकती है।","possibleTreatment":{"@type":"MedicalTherapy","name":"Neck Pain Treatment","description":"फिजियोथेरेपी, दवाइयाँ और आवश्यकता होने पर सर्जरी सहित व्यापक उपचार विकल्प।"}}
}
</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"गर्दन दर्द के आम कारण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"खराब पोस्टर, मांसपेशी खिंचाव, चोट/आघात, हर्निएटेड डिस्क, आर्थराइटिस, स्पाइनल स्टेनोसिस, तनाव।"}},
    {"@type":"Question","name":"गर्दन दर्द के लक्षण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"गर्दन में जकड़न, चुभन/तेज दर्द, हल्का दर्द, गर्दन घुमाने में कठिनाई, सिरदर्द, बाँहों में सुन्नपन/झनझनाहट, हरकत से दर्द बढ़ना।"}},
    {"@type":"Question","name":"डॉक्टर को कब दिखाएँ?","acceptedAnswer":{"@type":"Answer","text":"दर्द तेज/लगातार हो, बाँहों में सुन्नपन/झनझनाहट, चोट के बाद दर्द, गर्दन हिलाने में कठिनाई, सिरदर्द, बुखार के साथ दर्द—तो डॉक्टर से मिलें।"}}
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
                    <li><a href="{{ route('neck-pain') }}">गर्दन दर्द</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('neck-pain') }}" class="language-btn {{ request()->is('neck-pain') && !request()->is('neck-pain-*') ? 'active' : '' }}">ENGLISH</a>
                                    <a href="{{ route('neck-pain-h') }}" class="language-btn {{ request()->is('neck-pain-h') ? 'active' : '' }}">HINDI</a>
                                    <a href="{{ route('neck-pain-m') }}" class="language-btn {{ request()->is('neck-pain-m') ? 'active' : '' }}">MARATHI</a>
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
                        <p>हमारे <a href="{{route('home')}}">व्यापक स्पाइन केयर</a> का हिस्सा होते हुए, हम गर्दन दर्द के विभिन्न प्रकारों का विशेष उपचार प्रदान करते हैं।</p>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            गर्दन दर्द के कारण क्या हैं?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p><a href="{{route('back-pain')}}">पीठ दर्द</a> की तरह, गर्दन दर्द के जोखिम कारक भी मिलते-जुलते हैं:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">उम्र के साथ डीजनरेशन (झीज)।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">जीवनशैली: तनाव, गलत पोस्टर, लंबे समय तक खड़े रहना/गलत तरीके से बैठना, भारी वजन उठाना, अचानक मुड़ना।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">चोट/दुर्घटना: मांसपेशी/लिगामेंट की चोट, गिरने/दुर्घटना में स्पाइनल हड्डी का फ्रैक्चर, ऑस्टियोपोरोसिस में जोखिम अधिक।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">मोटापा: रीढ़ पर अतिरिक्त दबाव।</li>
                                            </ul>
                                            <p>विशिष्ट स्पाइनल स्थितियाँ:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्लिप डिस्क/डिस्क बुल्ज</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल स्टेनोसिस</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फेसट आर्थराइटिस, स्पॉन्डायलोसिस, ट्यूमर, संक्रमण, टीबी, फ्रैक्चर, विटामिन D की कमी</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            गर्दन दर्द की एनाटॉमी क्या है?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>मानव रीढ़ 33 कशेरुकाओं (वर्टिब्रा) से बनी होती है जिनके बीच डिस्क कुशन का काम करती हैं। सर्वाइकल (गर्दन), थोरासिक (मध्य), लंबर (कमर)—सब मिलकर स्पाइनल कॉर्ड/नसों की सुरक्षा करते हैं।</p>
                                            <img class="serv_img" src="{{ asset('resources/assets/img/Capture.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            गर्दन दर्द के सामान्य लक्षण
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>लक्षण कारण और प्रभावित हिस्से पर निर्भर करते हैं। आम शिकायतें:</p>
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गर्दन में जकड़न, सुबह जकड़न, मांसपेशियों में ऐंठन</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">बाँह/कंधे में दर्द, गर्दन घुमाने/झुकाने में कठिनाई</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लंबे समय तक बैठने/काम करने पर दर्द बढ़ना, चलने में कठिनाई</li>
                                        </ul>
                                        <p>यदि कंधे/बाँह में दर्द/सुन्नपन/कमजोरी हो तो स्पाइन विशेषज्ञ से मिलें।</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            डॉक्टर को कब दिखाएँ? (रेड फ्लैग संकेत)
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>अधिकांश मरीज साधारण दर्द प्रबंधन से सुधरते हैं। परन्तु 3 हफ्ते से अधिक दर्द रहे या ये संकेत हों तो तुरंत दिखाएँ:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दर्द तेजी से बढ़ना/रोजमर्रा काम प्रभावित होना/तेज लक्षण</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">बुखार, कंधे/बाँह में दर्द/सुन्नपन/कमजोरी, आंत्र/मूत्र नियंत्रण में कमी</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            गर्दन दर्द के उपचार विकल्प
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <p>तीव्रता और अवधि के अनुसार उपचार तय होता है:</p>
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दवाइयाँ</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फिजियोथेरेपी</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल ब्रेसिंग/इंजेक्शन</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सर्जरी (जरूरत होने पर)</li>
                                            </ul>
                                            <p>सटीक निदान और सर्वोत्तम योजना के लिए स्पाइन डॉक्टर/स्पाइन विशेषज्ञ से मिलें।</p>
                                        </div>
                                    </div>
                                </div>
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
@stop
