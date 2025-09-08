@php($title = 'Spine Tip of the Week SCOLIOSIS - Spine Surgeon Mumbai')

@section('meta_desc')Discover expert advice on managing scoliosis pain in this week's spine tip from Dr. Vishal Kundnani
at Spine Surgeons in Mumbai. Practical tips for relief and maintaining spine health.@endsection
@section('meta_keywords', '')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "Spine Tip of the Week SCOLIOSIS - Spine Surgeon Mumbai",
  "description": "Discover expert advice on managing scoliosis pain in this week's spine tip from Dr. Vishal Kundnani at Spine Surgeons in Mumbai. Practical tips for relief and maintaining spine health.",
  "url": "https://www.spinesurgeonmumbai.com/spine-tip-of-the-week-scoliosis.php",
  "mainEntity": {
    "@type": "MedicalCondition",
    "name": "Scoliosis",
    "description": "Expert medical advice and treatment options for scoliosis, a spinal deformity causing abnormal curvature and rotation of the spine",
    "medicineSystem": "https://schema.org/Orthopedic",
    "code": {
      "@type": "MedicalCode",
      "code": "Scoliosis",
      "codingSystem": "ICD-10"
    },
    "possibleTreatment": {
      "@type": "MedicalTherapy",
      "name": "Scoliosis Treatment",
      "description": "Comprehensive treatment approach including surgical correction, bracing, and specialized medical care"
    }
  },
  "author": {
    "@type": "Person",
    "name": "Dr. Vishal Kundnani",
    "jobTitle": "Director & Head of Spine Surgery",
    "worksFor": {
      "@type": "MedicalOrganization",
      "name": "Mumbai Institute of Spine Surgery"
    }
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is scoliosis?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Scoliosis is a spinal deformity characterized by abnormal curvature and rotational twist of the spine, causing a visible hump or deformity in the back with posture tilt."
    }
  }, {
    "@type": "Question",
    "name": "What are the types of scoliosis?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Types include idiopathic scoliosis (common in young adolescent females), congenital scoliosis (due to bony malformation), syndromic scoliosis, neuromuscular scoliosis in children, and degenerative scoliosis in adults."
    }
  }, {
    "@type": "Question",
    "name": "When is scoliosis surgery recommended?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Scoliosis surgery is recommended when the deformity is progressive (greater than 50 degrees), causes pain, or results in neurological deficits. Early diagnosis and management are crucial for better outcomes."
    }
  }, {
    "@type": "Question",
    "name": "What are the treatment options for scoliosis?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Treatment options include surgical correction for severe cases, with modern techniques using navigation, neuromonitoring, and advanced imaging. Bracing and physiotherapy have limited roles, primarily for mild cases in young children."
    }
  }]
}
</script>

@extends('layouts.default')
@section('content')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <section class="sec-service-procedure pt-5">
        <div class="container sec-service-procedure-1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 text-center pt-5">
                    <img src="{{ asset('resources/assets/img/blog/2.jpg') }}">
                </div>
                <div class="col-lg-12 col-md-12 col-12 pt-5">
                    <h1 class="services-head-h1 services-heading-h1">Scoliosis</h1>
                    <p>1. Bend +rotational twist in spine causing – Hump / deformity / Swelling On back with posture tilt
                    </p>
                    <p>2. Etiology -Idiopathic scoliosis in Young Adolescent female ( 8-15 years) present with back Hump</p>
                    <p>3. Other causes</p>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>Congenital scoliosis(bony malformation)</p>
                    </div>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>Syndromic scoliosis</p>
                    </div>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>Neuromuscular Scoliosis among kids</p>
                    </div>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>degenrative scoliosis among adults.</p>
                    </div>
                    <h2 class="services-heading-h2">Correct diagnosis & etiology shall be ascertained at earliest</h2>
                    <p>4. Presence of Pain and motor or sensory weakness / difficulty walking in scoliosis patient warrants
                        – detailed investigation to rule out Infection / tumor / TB or some secondary pathology.</p>
                    <p>5. Proper X ray and MRI are primary investigations in scoliosis patients</p>
                    <p>6. Investigations in Scoliosis involve</p>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>X ray Full spine PA view standing (not AP view)</p>
                    </div>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>X Ray Full spine standing Lateral View</p>
                    </div>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>X ray full spine PA views Bending films left and right</p>
                    </div>
                    <div class="cat-service-inner pt-5">
                        <img src="{{ asset('resources/assets/img/founder_li_icon.png') }}" alt="">
                        <p>MRI screening whole spine with dedicated study of affected spine ( only if pain or sensorimotor
                            involvement )</p>
                    </div>
                    <p>7. Bracing, Casting and Physio have limited role or NO ROLE in correction of Scoliosis(only for mild
                        deformity in young kids ). In severe deformity in gown up kids is a wastage of time.</p>
                    <p>8. Early diagnosis is important to manage the child surgically in safest manner. Late diagnosis can
                        lead to severe deformity requiring bigger surgery.</p>
                    <p>9. Scoliosis Surgery is extremely Safe and predictable efficient straightening of spine is possible
                        safely and is reocmmended if defomrity is progressive ( > 50 degree) or has pain, neuro deficit.
                        Fear of surgery can sometimes can delay the need for worse.</p>
                    <p>10. Scoliosis surgery is extremely safe with modern innovations – navigation, Neuromonitoring and
                        modern implant and imaging techniques.</p>
                    <p>Early diagnosis and early management is the key!!</p>
                </div>
            </div>
        </div>
    </section>
@stop
