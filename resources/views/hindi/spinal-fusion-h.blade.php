@php($title = 'मुंबई में स्पाइनल फ्यूजन सर्जरी - डॉ. विशाल कुंदनानी')

@section('meta_desc')मुंबई में स्पाइनल फ्यूजन के लिए सुरक्षित और प्रभावी सर्जरी। डॉ. विशाल कुंदनानी द्वारा उन्नत तकनीकों के साथ रीढ़ की स्थिरता और दर्द में राहत.@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment Mumbai')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalWebPage",
      "name": "मुंबई में स्पाइनल फ्यूजन सर्जरी - डॉ. विशाल कुंदनानी",
      "description": "मुंबई के अग्रणी स्पाइन विशेषज्ञ डॉ. विशाल कुंदनानी द्वारा स्पाइनल फ्यूजन सर्जरी। रीढ़ की अस्थिरता में स्थिरता और दर्द में राहत के लिए उन्नत तकनीकें।",
      "url": "https://www.spinesurgeonmumbai.com/spinal-fusion.php",
      "mainEntity": {
        "@type": "MedicalProcedure",
        "name": "Spinal Fusion Surgery",
        "description": "दो या अधिक कशेरुकाओं को स्थायी रूप से जोड़कर रीढ़ की हड्डी को स्थिर करना और दर्द कम करना",
        "possibleTreatment": {
          "@type": "MedicalTherapy",
          "name": "Spinal Fusion",
          "description": "कशेरुकाओं के बीच गति समाप्त कर स्थिरता प्रदान करने के लिए सर्जरी"
        }
      },
      "provider": {
        "@type": "MedicalOrganization",
        "name": "Mumbai Institute of Spine Surgery",
        "url": "https://www.spinesurgeonmumbai.com"
      },
      "medicalAudience": {
        "@type": "MedicalAudience",
        "audienceType": "Patient"
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "स्पाइनल फ्यूजन सर्जरी क्या है?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "स्पाइनल फ्यूजन वह सर्जिकल प्रक्रिया है जिसमें रीढ़ की दो या अधिक कशेरुकाओं को स्थायी रूप से जोड़ा जाता है। इससे उस सेगमेंट की अनावश्यक हरकत बंद होती है, स्थिरता मिलती है और दर्द में राहत मिलती है।"
        }
      }, {
        "@type": "Question",
        "name": "स्पाइनल फ्यूजन कब सुझाया जाता है?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "डिजेनेरेटिव डिस्क डिजीज, स्पॉन्डिलोलिस्थेसिस, स्पाइनल स्टेनोसिस, स्कोलियोसिस, या डिस्केक्टॉमी के बाद—जब अन्य उपचारों से पर्याप्त राहत न मिले।"
        }
      }, {
        "@type": "Question",
        "name": "स्पाइनल फ्यूजन के फायदे क्या हैं?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "दर्द में कमी, बेहतर स्थिरता, रीढ़ का बेहतर एलाइनमेंट, आगे के डीजनरेशन की रोकथाम, और रोजमर्रा की गतिविधियों में आसानी।"
        }
      }, {
        "@type": "Question",
        "name": "रिकवरी कैसी होती है?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "आम तौर पर 2–4 दिन का अस्पताल प्रवास, फिर फिजियोथैरेपी/रीहैब प्रोग्राम। पूर्ण रिकवरी 3–6 महीनों में, गतिविधियों में क्रमिक वापसी के साथ।"
        }
      }]
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
                    <li><a href="{{ route('spinal-fusion') }}">स्पाइनल फ्यूजन</a></li>
                </ul>
                <div class="language-switcher">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="language-buttons">
                    <a href="{{ route('spinal-fusion') }}" class="language-btn {{ request()->is('spinal-fusion') && !request()->is('spinal-fusion-*') ? 'active' : '' }}">
                        ENGLISH
                    </a>
                    <a href="{{ route('spinal-fusion-h') }}" class="language-btn {{ request()->is('spinal-fusion-h') ? 'active' : '' }}">
                        HINDI
                    </a>
                    <a href="{{ route('spinal-fusion-m') }}" class="language-btn {{ request()->is('spinal-fusion-m') ? 'active' : '' }}">
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
                        <p></p>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            स्पाइनल फ्यूजन सर्जरी क्या है?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="cliclskil1">
                                            <ul>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल फ्यूजन सर्जरी एक सुरक्षित और सरल प्रक्रिया है जो अस्थिर और दर्दयुक्त रीढ़ सेगमेंट में दर्द कम करने के लिए की जाती है। अस्थिरता के सबसे आम कारणों में स्पॉन्डिलोलिस्थेसिस (एक हड्डी का दूसरी पर खिसकना, जिससे नसों पर दबाव और पीठ/नितंब/पैर का दर्द व चलने पर सुन्नपन) और स्पाइनल स्टेनोसिस (डीजनरेशन के कारण नसों पर दबाव) शामिल हैं।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">अस्थिरता को स्थिर करने के लिए सर्जन डिस्केक्टॉमी (बीमार/घिसी डिस्क निकालना) के बाद डिस्क स्पेस में बोन ग्राफ्ट लगाते हैं, और टाइटेनियम पेडिकल इम्प्लांट्स व केज लगाकर हड्डियों को स्थिर करते हैं—इसे ही स्पाइनल फ्यूजन कहते हैं।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">यह सर्जरी स्पॉन्डिलोलिस्थेसिस, स्पाइनल टीबी, स्पाइनल स्टेनोसिस, ट्रॉमा और ट्यूमर आदि स्थितियों में की जाती है।</li>
                                                <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल फ्यूजन ओपन तकनीक या मिनिमली इनवेसिव (MIS) तकनीक से किया जा सकता है। MIS में छोटे चीरे, कम दर्द/रक्तस्राव, जल्दी अस्पताल से छुट्टी और जल्दी सामान्य कार्यों में वापसी के लाभ मिलते हैं।</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        स्पाइनल स्टेनोसिस में स्पाइनल फ्यूजन सर्जरी क्या है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लम्बर स्पाइनल स्टेनोसिस की सर्जरी सुरक्षित और सरल है। हर केस में फ्यूजन आवश्यक नहीं होता। जब स्टेनोसिस के साथ अस्थिरता भी हो—यानी नसों के दबाव के अलावा उस सेगमेंट में दर्दयुक्त असामान्य हरकत हो—तभी फ्यूजन सुझाया जाता है।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">उद्देश्य: नसों का डिकंप्रेशन और उस सेगमेंट की अनावश्यक हरकत कम करना। खासकर स्पॉन्डिलोलिस्थेसिस (एक कशेरुका का दूसरी के सापेक्ष आगे खिसकना) में सहायक।</li>
                                        </ul>
                                        <p class="mt-2">डॉ. विशाल कुंदनानी—मुंबई के प्रमुख स्पाइन सर्जन—स्पॉन्डिलोलिस्थेसिस में स्पाइनल फ्यूजन नियमित रूप से करते हैं।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        क्या स्पाइनल इम्प्लांट सुरक्षित हैं? क्या रीढ़ में स्क्रू-प्लेट सुरक्षित है? क्या फ्यूजन सर्जरी सुरक्षित है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">हाँ। स्पाइनल फ्यूजन में प्रयुक्त टाइटेनियम इम्प्लांट जैव-संगत और शरीर के लिए सुरक्षित होते हैं। प्रशिक्षित स्पाइन सर्जन द्वारा नियंत्रित तरीके से लगाए जाने पर ये समस्या नहीं करते।</li>
                                        <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सुरक्षा बढ़ाने के लिए ऑपरेशन के दौरान IITV (एक्स-रे), नेविगेशन और रोबोटिक्स का उपयोग किया जाता है।</li>
                                    </ul>
                                    <p class="mt-2">डॉ. विशाल कुंदनानी स्पाइन नेविगेशन सर्जरी/रोबोटिक सर्जरी के अग्रणी हैं और मरीजों के लिए सर्जरी को अधिक सुरक्षित बनाते हैं।</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        स्पाइनल फ्यूजन सर्जरी कैसे की जाती है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">अस्थिर हड्डियों की अनावश्यक हरकत कम करने के लिए पहले डिकंप्रेशन व डिस्केक्टॉमी की जाती है; फिर डिस्क स्पेस में बोन ग्राफ्ट/केज डाला जाता है और पेडिकल स्क्रू-रॉड सिस्टम से स्थिर किया जाता है—इसे स्पाइनल फ्यूजन कहते हैं।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल इम्प्लांट (पेडिकल स्क्रू, प्लेट्स/रॉड्स, केज) का लगाना एक सुरक्षित प्रक्रिया है।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">ऑपरेशन के दौरान IITV/नेविगेशन/रोबोटिक्स से सुरक्षा और सटीकता बढ़ाई जाती है।</li>
                                        </ul>
                                        <div class="col-lg-4">
                                            <img class="serv_img1 mt-2" src="{{ asset('resources/assets/img/capture4.png') }}">
                                        </div>
                                        <div class="col-lg-8">
                                            <img class="serv_img1 mt-2" src="{{ asset('resources/assets/img/capture5.png') }}">
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="mt-2">डॉ. विशाल कुंदनानी—नेविगेशन/रोबोटिक स्पाइन सर्जरी में प्रशिक्षित—स्पाइनल फ्यूजन में इन तकनीकों का उपयोग करते हैं।</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        स्पाइनल फ्यूजन सर्जरी करने के विकल्प क्या हैं?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <div class="cliclskil1">

                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पाइनल फ्यूजन ओपन तकनीक या मिनिमली इनवेसिव स्पाइन सर्जरी तकनीक (MIS-TLIF) से किया जा सकता है। MIS-TLIF के लाभ: कम दर्द/रक्तस्राव/संक्रमण, छोटे चीरे, जल्दी अस्पताल से छुट्टी, बेड रेस्ट की आवश्यकता नहीं, और जल्दी काम पर वापसी।</li>
                                        </ul>
                                        <p class="mt-2">डॉ. विशाल कुंदनानी—मुंबई के अग्रणी मिनिमली इनवेसिव स्पाइन सर्जन—माइक्रोस्कोपिक/रोबोटिक तकनीक के साथ स्पाइनल फ्यूजन करते हैं।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        स्पॉन्डिलोलिस्थेसिस क्या है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="cliclskil1">

                                        <p>स्पॉन्डिलोलिस्थेसिस: एक कशेरुका का दूसरी के सापेक्ष आगे खिसकना—जिससे रीढ़ अस्थिर/दर्दयुक्त हो जाती है, और चलने-फिरने पर पीठ/नितंब/पैर में दर्द व सुन्नपन होता है।</p>
                                        <img class="serv_img mt-2" src="{{ asset('resources/assets/img/capture6.png') }}">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        स्पॉन्डिलोलिस्थेसिस के लिए स्पाइनल फ्यूजन सर्जरी क्या है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <div class="cliclskil1">

                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">खिसकी हुई हड्डियों को साथ लाकर स्थिर/दर्दमुक्त करना—इसे ही स्पॉन्डिलोलिस्थेसिस के लिए स्पाइनल फ्यूजन कहते हैं।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">यह ओपन तकनीक या मिनिमली इनवेसिव तकनीक, दोनों से किया जा सकता है।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">MIS-TLIF के लाभ: छोटे चीरे, कम मसल डैमेज, कम दर्द/रक्तस्राव, जल्दी डिस्चार्ज, जल्दी काम पर लौटना, बेड रेस्ट की जरूरत नहीं।</li>
                                        </ul>
                                        <div class="col-lg-5">
                                            <img class="serv_img1 mt-2" src="{{ asset('resources/assets/img/capture7.png') }}">
                                        </div>
                                        <div class="col-lg-7">
                                            <img class="serv_img1 mt-2" src="{{ asset('resources/assets/img/capture8.png') }}">
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="mt-2">डॉ. विशाल कुंदनानी द्वारा स्पॉन्डिलोलिस्थेसिस के लिए मिनिमली इनवेसिव स्पाइनल फ्यूजन नियमित रूप से किया जाता है।</p>
                                        <p>वे नेविगेशन/रोबोटिक स्पाइन सर्जरी में विशेषज्ञ हैं और गोरेगांव, कंदीवली, मालाड में सेवाएँ उपलब्ध हैं।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        स्पाइनल फ्यूजन सर्जरी से पहले क्या सलाह है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <p>अपने डॉक्टर से समस्या, संभावित समाधान और (जरूरत पड़ने पर) सर्जरी सहित हर विकल्प के फायदे/जोखिम समझें।</p>
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सर्जरी प्लान होने पर अस्पताल में रहने/डिस्चार्ज की योजना पहले से बनाएँ।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">अच्छा पोषण बनाए रखें—इम्यून सिस्टम के लिए ज़रूरी।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">डॉक्टर की सलाह से संतुलित आहार/विटामिन लें।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कमज़ोर मांसपेशियाँ/कम कार्डियो-फिटनेस रिकवरी धीमी करती हैं—उचित व्यायाम कार्यक्रम शुरू करें। आवश्यक जाँच (ह्रदय/फेफड़े) करा लें।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वजन अधिक है तो कम करने की कोशिश करें।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">धूम्रपान छोड़ें—रिकवरी/घाव भरने में बाधा डालता है।</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">डॉक्टर की उपचार योजना का पालन करें और नियमित फॉलो-अप रखें। सुधार न हो तो तुरंत बताएँ।</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        स्पाइनल फ्यूजन सर्जरी के बाद रिकवरी कितनी जल्दी होती है?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <div class="cliclskil1">
                                        <p>मिनिमली इनवेसिव स्पाइन सर्जरी से जल्दी रिकवरी होती है—अधिकांश मरीज 24 घंटे में चल पाते हैं। माइक्रोएंडोस्कोपिक/मिनिमली इनवेसिव फ्यूजन के साथ आमतौर पर बेड रेस्ट की जरूरत नहीं होती और जल्दी काम पर वापसी संभव होती है।</p>
                                        <p>सर्जरी के बाद 24 घंटे में बिस्तर से चलाया जाता है, दर्द की दवाएँ कुछ दिन चलती हैं, और सामान्य सावधानियाँ बताई जाती हैं। कई मरीज 48 घंटे में घर जा सकते हैं और लगभग 2 सप्ताह में दैनंदिन कार्यों में लौटते हैं (कॉन्टैक्ट स्पोर्ट्स 6–10 सप्ताह बाद)।</p>
                                        <img class="serv_img mt-2" src="{{ asset('resources/assets/img/capture9.png') }}">
                                        <p class="mt-2"><b>ध्यान रखें:</b></p>
                                        <ul>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">डॉक्टर की उपचार योजना का पालन करें</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">सही तरह बैठें/खड़े हों और पोस्टर बनाए रखें</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">वजन उठाने की सही तकनीक सीखें</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">नियमित व्यायाम करें (लो-इंपैक्ट एरोबिक्स लाभकारी; पहले डॉक्टर से पूछें)</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्वस्थ बॉडी वेट बनाए रखें</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">संतुलित आहार लें (लो-फैट, फल-सब्ज़ी से भरपूर) और पर्याप्त कैल्शियम लें</li>
                                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">धूम्रपान बंद करें</li>
                                        </ul>
                                        <p class="mt-2">डॉ. विशाल कुंदनानी मिनिमली इनवेसिव/माइक्रोएंडोस्कोपिक स्पाइनल फ्यूजन में विशेषज्ञ हैं और नेविगेशन/रोबोटिक तकनीकों का उपयोग करते हैं।</p>
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
