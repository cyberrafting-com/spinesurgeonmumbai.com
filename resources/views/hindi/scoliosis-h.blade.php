@php($title = 'मुंबई में स्कोलियोसिस का उपचार - डॉ. विशाल कुंदनानी')

@section('meta_desc')
    मुंबई में स्पाइन विशेषज्ञ डॉ. विशाल कुंदनानी के साथ स्कोलियोसिस (रीढ़ की वक्रता) का उन्नत उपचार। सटीक निदान, ब्रेसिंग, फिजियोथेरेपी और सर्जिकल विकल्प उपलब्ध।
@endsection

@section('meta_keywords',
    'मुंबई में स्कोलियोसिस उपचार, डॉ. विशाल कुंदनानी, स्पाइन विशेषज्ञ मुंबई, स्पाइन सर्जन मुंबई,
    स्कोलियोसिस सर्जरी मुंबई, स्पाइन क्लिनिक मुंबई, स्पाइन विकृति सुधार, मिनिमली इनवेसिव स्पाइन सर्जरी, स्कोलियोसिस डॉक्टर मुंबई')

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "मुंबई में स्कोलियोसिस का उपचार - डॉ. विशाल कुंडननी",
  "description": "मुंबई में स्कोलियोसिस का विशेषज्ञ उपचार: फिजियोथेरेपी, ब्रेसिंग और आवश्यक होने पर सर्जरी। डॉ. विशाल कुंदनानी द्वारा उन्नत स्पाइन केयर।",
  "url": "https://www.spinesurgeonmumbai.com/scoliosis-h.php",
  "author": {"@type":"Person","name":"Dr. Vishal Kundnani","jobTitle":"Spine Surgeon","worksFor":{"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","address":{"@type":"PostalAddress","addressLocality":"Mumbai","addressRegion":"Maharashtra","addressCountry":"IN"}}},
  "provider": {"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","medicalSpecialty":"Spine Surgery"},
  "mainEntity": {"@type":"MedicalCondition","name":"Scoliosis","description":"स्कोलियोसिस रीढ़ की हड्डी का पार्श्व (साइड) की ओर मुड़ना है, जो अक्सर किशोरावस्था से पहले विकास की तेज़ अवधि में दिखाई देता है। कई मामलों में कारण अज्ञात होता है।","possibleTreatment":{"@type":"MedicalTherapy","name":"Scoliosis Treatment","description":"माइल्ड मामलों में ऑब्ज़र्वेशन, बच्चों में मॉडरेट कर्व के लिए ब्रेसिंग, और गंभीर मामलों में सर्जरी।"}}
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"स्कोलियोसिस क्या है?","acceptedAnswer":{"@type":"Answer","text":"स्कोलियोसिस रीढ़ की हड्डी का साइड की ओर मुड़ना है, जो सामने/पीछे से देखने पर S या C जैसा दिख सकता है।"}},
    {"@type":"Question","name":"स्कोलियोसिस के प्रकार क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"प्रकार: इडियोपैथिक (सबसे आम), जन्मजात (congenital), न्यूरोमस्कुलर, डीजेनेरेटिव (एडल्ट-ऑनसेट)।"}},
    {"@type":"Question","name":"स्कोलियोसिस का उपचार कैसे होता है?","acceptedAnswer":{"@type":"Answer","text":"कर्व की डिग्री और उम्र पर निर्भर: ऑब्ज़र्वेशन, ब्रेसिंग, फिजियोथेरेपी, और >40°–50° में सर्जरी।"}}
  ]
}
</script>
@endsection

@extends('layouts.default')

@section('content')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>हम <span>क्या करते हैं</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">मुख्यपृष्ठ</a></li>
                    <li><a href="{{ route('scoliosis-h') }}">स्कोलियोसिस</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('scoliosis') }}" class="language-btn {{ request()->is('scoliosis') && !request()->is('scoliosis-*') ? 'active' : '' }}">ENGLISH</a>
                                    <a href="{{ route('scoliosis-h') }}" class="language-btn {{ request()->is('scoliosis-h') ? 'active' : '' }}">HINDI</a>
                                    <a href="{{ route('scoliosis-m') }}" class="language-btn {{ request()->is('scoliosis-m') ? 'active' : '' }}">MARATHI</a>
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
                        <h2><b>मुंबई में स्कोलियोसिस का उपचार - डॉ. विशाल कुंदनानी</b></h2>
                        <img src="{{ asset('resources/assets/images/scoliosis.jpg') }}" alt="मुंबई में स्कोलियोसिस उपचार - डॉ. विशाल कुंदनानी" class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <div class="content-section">
                            <h1>स्कोलियोसिस क्या है?</h1>
                            <p class="mt-1">स्कोलियोसिस में रीढ़ की हड्डी पार्श्व दिशा में मुड़ जाती है, जिससे सामने/पीछे से देखने पर "S" या "C" आकार दिख सकता है। स्वस्थ रीढ़ सामने/पीछे से सीधी दिखती है और साइड से ऊपरी हिस्से में स्वाभाविक गोलाई तथा निचले हिस्से में हल्का अंदर की ओर घुमाव दिखता है।</p>
                            <p>एक अग्रणी <b>स्कोलियोसिस सर्जन</b> के रूप में, डॉ. विशाल कुंदनानी जटिल स्पाइनल विकृतियों के उन्नत सुधार में विशेषज्ञ हैं और व्यापक मूल्यांकन से लेकर सर्जिकल करेक्शन तक समग्र देखभाल प्रदान करते हैं।</p>
                        </div>

                        <div class="content-section">
                            <h3><b>स्कोलियोसिस के कारण</b></h3>
                            <img src="{{ asset('resources/assets/images/causes-of-scoliosis.jpg') }}" alt="स्कोलियोसिस के कारण - डॉ. विशाल कुंदनानी" class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">
                            <p><b>जन्मजात (Congenital):</b> जन्म के समय मौजूद हड्डी की असामान्यता।</p>
                            <p><b>न्यूरोमस्कुलर:</b> मांसपेशी/नस संबंधी रोग जैसे सेरेब्रल पाल्सी आदि।</p>
                            <p><b>डीजेनेरेटिव (एडल्ट):</b> उम्र के साथ हड्डियों का घिसना, ऑस्टियोपोरोसिस, चोट/पुरानी सर्जरी के कारण।</p>
                            <p><b>इडियोपैथिक:</b> सबसे सामान्य प्रकार, कारण अज्ञात पर आनुवंशिक प्रवृत्ति की संभावना।</p>
                        </div>

                        <div class="content-section">
                            <h3><b>किसे होता है स्कोलियोसिस?</b></h3>
                            <p>अक्सर किशोरावस्था (10–16 वर्ष) में पहचाना जाता है। लड़कियों में अधिक आम। गंभीर कर्व (>40°) पर सर्जरी पर विचार किया जाता है। कई मामलों में बढ़त रुकने पर स्थिर हो जाता है।</p>
                        </div>

                        <div class="content-section">
                            <h2><b>स्कोलियोसिस के लक्षण</b></h2>
                            <ul style="list-style: none; padding-left: 0;">
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">कंधों/कमर की असमानता, एक कंधा अधिक उठा हुआ</div></li>
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">एक ओर झुकाव, लंबे समय तक बैठने/खड़े रहने पर थकान</div></li>
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">झुकने पर एक तरफ पसलियों का उभरा हुआ दिखना (रिब हंप)</div></li>
                            </ul>
                        </div>

                        <div class="content-section">
                            <h3><b>उपचार विकल्प</b></h3>
                            <h3>ऑब्ज़र्वेशन</h3>
                            <ul style="list-style: none; padding-left: 0;">
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">माइल्ड कर्व (<20°) और बिना लक्षण के मामले</div></li>
                            </ul>
                            <h3>ब्रेसिंग</h3>
                            <ul style="list-style: none; padding-left: 0;">
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">बच्चों/किशोरों में 20°–40° कर्व की प्रगति रोकने हेतु</div></li>
                            </ul>
                            <h3>फिजियोथेरेपी</h3>
                            <ul style="list-style: none; padding-left: 0;">
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">पोश्चर, मांसपेशी शक्ति और लचीलापन सुधार</div></li>
                            </ul>
                            <h3>सर्जिकल उपचार</h3>
                            <ul style="list-style: none; padding-left: 0;">
                                <li class="list-item-container"><div class="list-item-icon"><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic"></div><div class="list-item-text">गंभीर कर्व (>40°–50°) या प्रगति पर सर्जरी; स्पाइनल फ्यूजन आम</div></li>
                            </ul>
                        </div>

                        <div class="content-section">
                            <h3><b>मुंबई में स्कोलियोसिस केयर</b></h3>
                            <p>जल्दी निदान और सही योजना से परिणाम बेहतर होते हैं। अपॉइंटमेंट के लिए <a href="{{ route('contact') }}">यहाँ संपर्क करें</a>।</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.we-treat-h')
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
