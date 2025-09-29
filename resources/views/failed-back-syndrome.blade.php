@php($title = 'Top Treatment for Failed Back Syndrome in Mumbai by Dr. Vishal Kundnani')

@section('meta_desc')
    Seek expert care for failed back syndrome with Dr. Vishal Kundnani Spine Specialist in Mumbai. Advanced treatments and
    solutions in Mumbai.
@endsection

@section('meta_keywords',
    'Back Pain Treatment Mumbai, Dr. Vishal Kundnani, Spine Specialist Mumbai, Spine Surgeon
    Mumbai, Spine Clinic Mumbai, Micro Endoscopic Spine Surgery Doctor Mumbai, Spine Disease Doctor Mumbai, Spine Surgery
    Specialist Mumbai, Top Spine Doctor Bandra, Spine Specialist Bandra, Spine Treatment Mumbai, Spine Disease Treatment
    Mumbai')

    @extends('layouts.default')

@section('content')
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6PXG4VM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="banner-wrap1">
        <div class="container">
            <div class="row">
                <h2>WHAT <span>WE DO</span></h2>
                <ul class="breadcrumb1">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('back-pain') }}">Failed Back Syndrome</a></li>
                </ul>
                <div class="language-switcher">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="language-buttons">
                                    <a href="{{ route('failed-back-syndrome') }}" class="language-btn {{ request()->is('failed-back-syndrome') && !request()->is('failed-back-syndrome-*') ? 'active' : '' }}">
                                        ENGLISH
                                    </a>
                                    <a href="{{ route('failed-back-syndrome-h') }}" class="language-btn {{ request()->is('failed-back-syndrome-h') ? 'active' : '' }}">
                                        HINDI
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
                        <h1>Failed Back Syndrome</h1>
                        <p class="mt-1">Failed back surgery syndrome (also called FBSS, or failed back syndrome) is a
                            misnomer, as it is not actually a syndrome – it is a very generalized term that is often used to
                            describe the condition of patients who have not had a successful result with back surgery or
                            spine surgery and have experienced continued pain after surgery. There is no equivalent term for
                            failed back surgery syndrome in any other type of surgery (e.g. there is no failed cardiac
                            surgery syndrome, failed knee surgery syndrome, etc.). There are many reasons that a back
                            surgery may or may not work, and even with the best surgeon and for the best indications, spine
                            surgery is no more than 95% predictive of a successful result.</p>

                        <p>Reasons for Failed Back Surgery and Pain after Surgery</p>
                        <p>Spine surgery is basically able to accomplish only two things:</p>
                        <p>Decompress a nerve root that is pinched, or Stabilize a painful joint.</p>
                        <p>Unfortunately, back surgery or spine surgery cannot literally cut out a patient's pain. It is
                            only able to change anatomy, and an anatomical lesion (injury) that is a probable cause of back
                            pain must be identified prior to rather than after back surgery or spine surgery.</p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('includes.we-treat')
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
