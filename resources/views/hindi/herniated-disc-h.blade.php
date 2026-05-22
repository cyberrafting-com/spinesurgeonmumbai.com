@php($title = 'मुंबई में हर्निएटेड डिस्क (स्लिप डिस्क) का उपचार - डॉ. विशाल कुंदनानी')

@section('meta_desc')मुंबई में हर्निएटेड डिस्क (स्लिप डिस्क) के लिए सर्वोत्तम उपचार। डॉ. विशाल कुंदनानी द्वारा उन्नत, सुरक्षित और प्रभावी स्पाइन केयर.@endsection

@section('meta_keywords', 'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment Mumbai')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "मुंबई में हर्निएटेड डिस्क का उपचार - डॉ. विशाल कुंदनानी",
  "description": "मुंबई के प्रमुख स्पाइन विशेषज्ञ डॉ. विशाल कुंदनानी द्वारा हर्निएटेड डिस्क/स्लिप डिस्क के लिए विशेषज्ञ उपचार। साइयटिका और डिस्क हर्निएशन की समग्र देखभाल।",
  "url": "https://www.spinesurgeonmumbai.com/herniated-disc.php",
  "mainEntity": {"@type":"MedicalCondition","name":"Herniated Disc","description":"रीढ़ की डिस्क के अंदर का नरम पदार्थ बाहरी रिंग में दरार से बाहर निकलकर नसों पर दबाव डालता है जिससे दर्द/सुन्नपन/कमजोरी हो सकती है।","possibleTreatment":{"@type":"MedicalTherapy","name":"Herniated Disc Treatment","description":"संरक्षणात्मक इलाज, फिजियोथेरेपी, और आवश्यकता पड़ने पर मिनिमली इनवेसिव सर्जरी।"}},
  "provider": {"@type":"MedicalOrganization","name":"Mumbai Institute of Spine Surgery","url":"https://www.spinesurgeonmumbai.com"},
  "medicalAudience": {"@type":"MedicalAudience","audienceType":"Patient"}
}
</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"हर्निएटेड डिस्क क्या है?","acceptedAnswer":{"@type":"Answer","text":"जब डिस्क के भीतर का नरम हिस्सा (न्यूक्लियस) बाहरी रिंग (एन्युलस) में दरार से बाहर आकर स्पाइनल कैनाल में नसों पर दबाव डालता है तो उसे हर्निएटेड डिस्क/स्लिप डिस्क कहते हैं।"}},
    {"@type":"Question","name":"हर्निएटेड डिस्क के लक्षण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"कमर दर्द, पैर में दर्द (सायटिका), पैरों/पैरों की उंगलियों में सुन्नपन/झनझनाहट, मांसपेशियों की कमजोरी, और गंभीर स्थिति में आंत्र/मूत्र नियंत्रण में कमी।"}},
    {"@type":"Question","name":"हर्निएटेड डिस्क का इलाज कैसे होता है?","acceptedAnswer":{"@type":"Answer","text":"आराम, फिजियोथेरेपी, दवाइयाँ, स्पाइनल इंजेक्शन, और लक्षणों के बने रहने पर मिनिमली इनवेसिव सर्जरी।"}},
    {"@type":"Question","name":"कब सर्जरी की आवश्यकता होती है?","acceptedAnswer":{"@type":"Answer","text":"जब दवा/फिजियोथेरेपी से लाभ न हो, दर्द बहुत तेज हो, कमजोरी बढ़ती जाए, या आंत्र/मूत्र नियंत्रण में कमी हो, तब माइक्रोएंडोस्कोपिक डिस्केक्टॉमी जैसी MIS सर्जरी की जाती है।"}}
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
                <li><a href="{{ route('herniated-disc') }}">हर्निएटेड डिस्क</a></li>
            </ul>
            <div class="language-switcher">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="language-buttons">
                                <a href="{{ route('herniated-disc') }}" class="language-btn {{ request()->is('herniated-disc') && !request()->is('herniated-disc-*') ? 'active' : '' }}">अंग्रेज़ी</a>
                                <a href="{{ route('herniated-disc-h') }}" class="language-btn {{ request()->is('herniated-disc-h') ? 'active' : '' }}">हिंदी</a>
                                <a href="{{ route('herniated-disc-m') }}" class="language-btn {{ request()->is('herniated-disc-m') ? 'active' : '' }}">मराठी</a>
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
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        रीढ़ की बनावट और डिस्क हर्निएशन की एनाटॉमी क्या है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">रीढ़ 33 कशेरुकाओं से बनी है। हर दो कशेरुकाओं के बीच कुशन जैसी डिस्क होती है जो झटके सोखती है और गतिशीलता में मदद करती है। डिस्क बाहरी मजबूत रिंग (Annulus) और अंदर जेल जैसे पदार्थ (Nucleus) से बनती है।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">डिस्क का पदार्थ बाहर निकलकर स्पाइनल कैनाल में नसों पर दबाव डालता है तो कमर/नितंब/पैर में दर्द, सुन्नपन, चलने में कठिनाई होती है (सायटिका)।</li>
                                        </ul>
                                        <img class="serv_img" src="{{ asset('resources/assets/img/Capture.webp') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        स्लिप डिस्क (हर्निएटेड डिस्क) क्या है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <p>जब डिस्क का हिस्सा स्पाइनल कैनाल में जाकर नसों को दबाता है तो स्लिप डिस्क/हर्निएटेड डिस्क होता है। इससे कमर/नितंब/पैर में दर्द और सुन्नपन होता है—इसे सायटिका भी कहते हैं।</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        सायटिका क्या है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल स्टेनोसिस/स्लिप डिस्क से नस दबने पर कमर से पैर तक जाने वाला दर्द और सुन्नपन—इसे सायटिका कहते हैं।</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइन क्लिनिक मुंबई और गोरेगांव में अनुभवी स्पाइन विशेषज्ञों की टीम द्वारा इसका उपचार उपलब्ध है।</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        हर्निएटेड डिस्क के चरण और कारण
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">डिस्क डीजनरेशन → डिस्क बुल्ज/प्रोलैप्स → एक्सट्रूज़न → सीक्वेस्ट्रेशन (न्यूक्लियस का बाहर आना)।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">खराब पोस्टर, कमज़ोर मांसपेशियाँ, अचानक वजन उठाना/मुड़ना, चोट/आघात, उम्र-संबंधी बदलाव प्रमुख कारण हैं।</li>
                                        </ul>
                                        <img class="serv_img mt-3" src="{{ asset('resources/assets/img/capture2.webp') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        हर्निएटेड डिस्क के लक्षण
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कभी मंद, कभी तेज कमर दर्द; पीठ जकड़ना/लॉक होना; सुबह जकड़न; पैर में दर्द/सुन्नपन/झनझनाहट; चलने में कठिनाई।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गर्दन की डिस्क होने पर बाँह/हाथ में फैलता दर्द (रैडिक्यूलोपैथी)।
                                            </li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दुर्लभ पर गंभीर: आंत्र/मूत्र नियंत्रण में कमी (कौडा इक्वाइना), पैर में कमजोरी/फुट-ड्रॉप—आपातकालीन सर्जरी आवश्यक।</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        जाँच और निदान
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइन विशेषज्ञ द्वारा क्लिनिकल जाँच, एक्स-रे और MRI—डिस्क की ग्रेडिंग/नस पर दबाव जानने के लिए।</li>
                                        </ul>
                                        <img class="serv_img mt-3" src="{{ asset('resources/assets/img/capture3.webp') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        क्या हर मरीज को सर्जरी की ज़रूरत होती है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <p>अधिकांश मरीज दवाइयों/फिजियोथेरेपी/इंजेक्शन से ठीक होते हैं। सर्जरी तब आवश्यक जब दर्द/कमजोरी बढ़े, या आंत्र/मूत्र नियंत्रण में कमी हो।</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        नॉन-सर्जिकल उपचार विकल्प
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">दवाइयाँ – NSAIDs/मसल रिलैक्सेंट/आदि</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गर्म सेंक/ठंडी सिकाई</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">फिजियोथेरेपी (TENS, अल्ट्रासाउंड, हाइड्रोथेरेपी सहित)</li>
                                        </ul>
                                        <p>उपचार शुरू करने से पहले स्पाइन विशेषज्ञ से परामर्श आवश्यक है।</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        फिजियोथेरेपी की भूमिका
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <p>फिजियोथेरेपी से दर्द में राहत, मांसपेशियों की मजबूती और पुनरावृत्ति की रोकथाम—विशेषज्ञ की निगरानी में।</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        सर्वश्रेष्ठ सर्जरी और रिकवरी
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <p>माइक्रोएंडोस्कोपिक डिस्केक्टॉमी/MIS डिस्क सर्जरी—छोटे चीरे, कम दर्द, बिना बेड रेस्ट के जल्दी वापसी।
                                        </p>
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">24–48 घंटों में डिस्चार्ज, 2 हफ्तों में सामान्य कार्यों में वापसी (डॉक्टर की सलाह अनुसार)।</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="sidebar">
                    @include('includes.what-we-do-sidebar-h')
                    </div>
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
