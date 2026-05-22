@php($title = 'Exercises by Dr. Vishal Kundnani Spine Specialist Mumbai')

@section('meta_desc')Find effective spine exercises recommended by Dr. Vishal Kundnani, Mumbai's leading spine specialist, for better spine health.@endsection

@section('meta_keywords',
'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment Mumbai')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "Spine Exercises and Rehabilitation in Mumbai by Dr. Vishal Kundnani",
  "description": "Expert-guided spine exercises and rehabilitation program with Dr. Vishal Kundnani Spine Specialist Mumbai. Safe and effective exercises for spine health.",
  "url": "https://www.spinesurgeonmumbai.com/exercises.php",
  "mainEntity": {
    "@type": "MedicalTherapy",
    "name": "Spine Exercise Program",
    "description": "A comprehensive exercise program designed to strengthen the spine, improve flexibility, and prevent spine-related problems",
    "possibleTreatment": {
      "@type": "MedicalTherapy",
      "name": "Spine Rehabilitation Exercises",
      "description": "Targeted exercises for spine strengthening, flexibility, and pain management, including core strengthening and posture correction"
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
    "name": "What types of exercises are recommended for spine health?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Recommended exercises include core strengthening exercises, flexibility exercises, posture correction exercises, and low-impact aerobic activities. The specific exercises depend on your condition and should be prescribed by a spine specialist."
    }
  }, {
    "@type": "Question",
    "name": "Why is it important to do spine exercises under supervision?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Supervision ensures proper form and technique, prevents injury, and allows for exercise modification based on individual needs. A spine specialist can customize the program and monitor progress while ensuring safety."
    }
  }, {
    "@type": "Question",
    "name": "What are the benefits of spine exercises?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Benefits include improved spine strength, better flexibility, reduced pain, enhanced posture, prevention of future spine problems, and faster recovery from spine conditions. Regular exercise also helps maintain overall spine health."
    }
  }, {
    "@type": "Question",
    "name": "When can I start exercises after spine surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The timing varies depending on the type of surgery and individual recovery. Your spine specialist will guide you on when to start exercises and which ones are safe to perform. Typically, gentle exercises begin soon after surgery, progressing gradually."
    }
  }]
}
</script>
@extends('layouts.default')
@section('content')

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

        <div class="banner-wrap1">
		<div class="container">
			<div class="row">
				<h2>WHAT <span>WE DO</span></h2> 
				<ul class="breadcrumb1">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('exercises') }}">Exercises</a></li>
				</ul>
				<div class="language-switcher">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="language-buttons">
									<a href="{{ route('exercises') }}" class="language-btn {{ request()->is('exercises') && !request()->is('exercises-*') ? 'active' : '' }}">
										ENGLISH
									</a>
									<a href="{{ route('exercises-h') }}" class="language-btn {{ request()->is('exercises-h') ? 'active' : '' }}">
										HINDI
									</a>
									<a href="{{ route('exercises-m') }}" class="language-btn {{ request()->is('exercises-m') ? 'active' : '' }}">
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
            <p><b>Exercises should not be done without proper supervision of physiotherapists and in consultation with a spinal specialist and your spinal doctor.</b></p>
            <div class="cliclskil1">
              <ul>
                <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">To mobilize the spinal segment and to correct the postural distortion, to strengthen the extensor muscles of the back and the muscles of the shoulder blades and to develop the pectoral muscles.</li>
                <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">How to do it : Always, if possible, on a hard surface, with a thin carpet.</li>
              </ul>
              <p class="mt-2"><b>Note : Please Do all the movements as slow as possible!</b></p>
              <p><b>Exercises Options:</b></p>
              <ul>
                <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Lying on back, face upwards.</li>
                <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Lying on the side.</li>
                <li><img src="{{ asset('resources/assets/img/founder_li_icon.webp') }}" class="wow flipInX animated animated" data-wow-iteration="infinite" alt="pic" style="visibility: visible; animation-iteration-count: infinite; animation-name: flipInX;">Lying face downwards.</li>
              </ul>
              <div class="col-lg-6 mt-2">
                <img class="serv_img1" src="{{ asset('resources/assets/img/ex1.webp') }}">
                <h1>Back Care</h1>
              </div>
              <div class="col-lg-6 mt-2">
                <img class="serv_img1" src="{{ asset('resources/assets/img/ex2.webp') }}">
                <h1>Neck Care</h1>
              </div>
              <div class="col-lg-6 mt-2">
                <img class="serv_img1" src="{{ asset('resources/assets/img/ex3.webp') }}">
                <h1>Neck Pain Exercises</h1>
              </div>
              <div class="col-lg-6 mt-2">
                <img class="serv_img1" src="{{ asset('resources/assets/img/ex4.webp') }}">
                <h1>Spine Strengthening </h1>
              </div>
              <div class="col-lg-6 mt-2">
                <img class="serv_img1" src="{{ asset('resources/assets/img/ex5.webp') }}">
                <h1>Spinal Mobilising Exercises</h1>
              </div>
              <div class="col-lg-6 mt-2">
                <img class="serv_img1" src="{{ asset('resources/assets/img/ex6.webp') }}">
                <h1>Spinal Trunk Control and Stability Exercises</h1>
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
