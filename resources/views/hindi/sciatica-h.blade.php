@php($title = 'मुंबई में साइटिका का उपचार - डॉ. विशाल कुंडनानी')

@section('meta_desc')
    मुंबई में स्पाइन विशेषज्ञ डॉ. विशाल कुंडनानी के साथ साइटिका का विशेषज्ञ उपचार। उन्नत स्पाइन केयर और दर्द प्रबंधन समाधान।
@endsection

@section('meta_keywords',
    'मुंबई में साइटिका उपचार, डॉ. विशाल कुंडनानी, स्पाइन विशेषज्ञ मुंबई, स्पाइन सर्जन मुंबई,
    स्पाइन क्लिनिक मुंबई, माइक्रो एंडोस्कोपिक स्पाइन सर्जरी, स्पाइन रोग डॉक्टर मुंबई, साइटिका दर्द उपचार,
    टॉप स्पाइन डॉक्टर बांद्रा, साइटिका इलाज मुंबई')

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "मुंबई में साइटिका का उपचार - डॉ. विशाल कुंडनानी",
  "description": "मुंबई में स्पाइन विशेषज्ञ डॉ. विशाल कुंडनानी के साथ साइटिका का विशेषज्ञ उपचार। उन्नत स्पाइन केयर और दर्द प्रबंधन समाधान।",
  "url": "https://www.spinesurgeonmumbai.com/sciatica-h.php",
  "author": {"@type":"Person","name":"Dr. Vishal Kundnani","jobTitle":"Spine Surgeon","worksFor":{"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","address":{"@type":"PostalAddress","addressLocality":"Mumbai","addressRegion":"Maharashtra","addressCountry":"IN"}}},
  "provider": {"@type":"MedicalOrganization","name":"Spine Surgeon Mumbai","medicalSpecialty":"Spine Surgery"},
  "mainEntity": {"@type":"MedicalCondition","name":"Sciatica","description":"साइटिका वह दर्द है जो सायटिक नर्व के रास्ते में फैलता है — जो आपकी लोअर बैक से लेकर कूल्हों/नितंबों और पैर तक जाती है। आमतौर पर शरीर के एक तरफ प्रभावित होता है।","possibleTreatment":{"@type":"MedicalTherapy","name":"Sciatica Treatment","description":"फिजियोथेरेपी, दवाइयाँ, इंजेक्शन और आवश्यकता होने पर सर्जरी सहित व्यापक उपचार विकल्प।"}}
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"साइटिका क्या है?","acceptedAnswer":{"@type":"Answer","text":"साइटिका सायटिक नर्व के रास्ते में फैलने वाला दर्द है, जो लोअर बैक से कूल्हों और पैरों तक जाता है। प्रायः एक तरफ प्रभावित करता है।"}},
    {"@type":"Question","name":"साइटिका के आम कारण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"आम कारण: हर्निएटेड डिस्क, बोन स्पर, स्पाइनल स्टेनोसिस, पिरिफॉर्मिस सिंड्रोम, स्पॉन्डिलोलिस्थेसिस।"}},
    {"@type":"Question","name":"साइटिका के लक्षण क्या हैं?","acceptedAnswer":{"@type":"Answer","text":"लोअर बैक से पैर तक फैलता दर्द, पैर में झनझनाहट/सुन्नपन, कमजोरी, हरकत/खाँसी/छींक से दर्द बढ़ना।"}}
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
                    <li><a href="{{ route('sciatica-h') }}">साइटिका</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('sciatica') }}" class="language-btn {{ request()->is('sciatica') && !request()->is('sciatica-*') ? 'active' : '' }}">ENGLISH</a>
                                    <a href="{{ route('sciatica-h') }}" class="language-btn {{ request()->is('sciatica-h') ? 'active' : '' }}">HINDI</a>
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
                        <h1>मुंबई में साइटिका का उपचार</h1>
                        <img src="{{ asset('resources/assets/images/sciatica-treatment.jpg') }}" alt="मुंबई में साइटिका उपचार - डॉ. विशाल कुंडनानी" class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <p class="mt-1">साइटिका एक आम प्रकार का दर्द है जो सायटिक नर्व को प्रभावित करता है। यह नर्व लोअर बैक से 
                            पैरों तक जाती है। <a href="{{ route('home') }}">मुंबई के अग्रणी स्पाइन सर्जन</a> डॉ. विशाल कुंडनानी 
                            साइटिका और संबंधित स्पाइनल स्थितियों के समग्र उपचार में विशेषज्ञ हैं।</p>

                        <h2>साइटिका के लक्षण</h2>
                        <p>आम लक्षण:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लोअर बैक से नीचे की ओर फैलता दर्द</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">बैठने पर बढ़ता नितंब/पैर का दर्द</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">हिप दर्द, चलने में दिक्कत</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पैर में जलन/झनझनाहट</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">कमजोरी/सुन्नपन, पैर/पैर के पंजे में कमजोरी</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">एक तरफ लगातार नितंब दर्द</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">खड़े होने पर तेज झटका जैसा दर्द</li>
                        </ul>

                        <img src="{{ asset('resources/assets/images/symptoms-sciatica-treatment.jpg') }}" alt="साइटिका के लक्षण - डॉ. विशाल कुंडनानी" class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <h2>साइटिका के कारण</h2>
                        <p>साइटिका निम्न स्पाइनल/मांसपेशीय स्थितियों से ट्रिगर हो सकता है:</p>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">लंबर स्पाइनल स्टेनोसिस — स्पाइनल कैनाल का संकरा होना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">डिजेनेरेटिव डिस्क डिजीज — डिस्क का घिसना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">स्पॉन्डिलोलिस्थेसिस — एक कशेरुका का दूसरे पर आगे खिसकना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">गर्भावस्था — सायटिक नर्व पर दबाव</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">पीठ/नितंब की मांसपेशियों में स्पाज्म</li>
                        </ul>

                        <img src="{{ asset('resources/assets/images/causes-of-sciatica.jpg') }}" alt="साइटिका के कारण - डॉ. विशाल कुंडनानी" class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">

                        <h2>साइटिका बनाम अन्य स्पाइन दर्द</h2>
                        <table class="table table-bordered mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>विशेषता</th>
                                    <th>साइटिका</th>
                                    <th>अन्य स्पाइन दर्द</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>दर्द का पैटर्न</td><td>लोअर बैक से पैर तक फैलता</td><td>अक्सर पीठ/गर्दन तक सीमित</td></tr>
                                <tr><td>ट्रिगर नर्व</td><td>सायटिक नर्व</td><td>कई स्पाइनल नर्व शामिल हो सकती हैं</td></tr>
                                <tr><td>दर्द का पक्ष</td><td>आमतौर पर एक तरफ</td><td>दोनों/बारी-बारी से</td></tr>
                                <tr><td>अतिरिक्त लक्षण</td><td>झनझनाहट, सुन्नपन, कमजोरी</td><td>सख्ती/मांसपेशी स्पाज्म</td></tr>
                                <tr><td>बढ़ाने वाली गतिविधि</td><td>बैठना, खड़े होना</td><td>उठाना, झुकना, पोस्टर बदलना</td></tr>
                            </tbody>
                        </table>

                        <h2>क्यों चुनें डॉ. विशाल कुंडनानी?</h2>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">अंतरराष्ट्रीय स्तर पर मान्य स्पाइन सर्जन</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">मिनिमली इनवेसिव/एंडोस्कोपिक स्पाइन सर्जरी विशेषज्ञता</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">रोगी-केंद्रित, व्यक्तिगत उपचार योजना</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">एडवांस्ड डायग्नोस्टिक तकनीक</li>
                        </ul>

                        <h2>त्वरित तथ्य</h2>
                        <ul>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">लोअर बैक दर्द → सायटिक नर्व कम्प्रेशन संकेत</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">बैठने पर बढ़ता दर्द → साइटिका का सामान्य संकेत</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">हिप दर्द → नर्व इरिटेशन का विस्तार</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">पैर में झनझनाहट/जलन → नर्व इन्वॉल्वमेंट का संकेत</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">पैर की कमजोरी/सुन्नपन → उन्नत नर्व प्रेशर</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">एक तरफ नितंब दर्द → साइटिका का विशिष्ट लक्षण</li>
                            <li><img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic">खड़े होते समय झटके जैसा दर्द → सायटिक नर्व संकट</li>
                        </ul>

                        <p class="mt-4"><strong>📍 साइटिका से राहत के लिए मिलें</strong><br>
                            यदि आपको साइटिका के कारण लगातार दर्द/चलने में कठिनाई है, तो <a href="{{ route('contact') }}" target="_blank">डॉ. विशाल कुंडनानी</a> से संपर्क करें और विशेषज्ञ मूल्यांकन व उपचार प्राप्त करें।
                            <a href="{{ route('contact') }}" target="_blank" class="btn btn-primary mt-3"><strong>📞 अपॉइंटमेंट बुक करें</strong></a>
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
