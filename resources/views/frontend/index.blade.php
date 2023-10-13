@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')
    <section id="services" class="services-area services-bg services-two pt-95 pb-70"  style="background-image:url(/frontend/img/bg/services_aliment_bg.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="section-title text-center pl-40 pr-40 mb-80 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <span><small class="circle-left"><img src="/frontend/img/bg/circle_Left.png" alt="img"></small> BAY-TECH MAKİNE<small class="circle-right"><img src="/frontend/img/bg/circle_right.png" alt="img"></small></span>
                        <h2>ÇALIŞMA ALANLARIMIZ - HİZMETLERİMİZ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Service->where('category',1) as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="s-single-services  {{ ($loop->first) ? 'active' : null}}  active wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s"
                         style="min-height: 200px;background-image: url({{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }})">
                        <div class="second-services-content">
                            <p class="position-absolute"  style="bottom:15px;font-size: 22px;font-weight: bold"><a href="{{ route('service', $item->slug) }}">{{ $item->title }}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-area cta-bg pt-95 pb-70 mt-60" style="background-image:url(/frontend/img/bg/how_it_bg.png); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <span class="text-white">OUR IMPORTENTS <small class="circle-right"><img src="/frontend/img/bg/circle_right.png" alt="img"></small></span>
                        <h2>How We Work For You To Boost Your Business</h2>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc ornare mauris elit, vel semper ipsum convallis a. Quisque id faucibus massa. Aliquam a bibendum lacus, vitae laoreet lectus. Sed a velit suscipit, mattis elit sed, convallis elit.</p>
                        <p>Phasellus ut consequat elit. Donec dapibus, dolor ac mollis mollis, sapien lorem gravida magna.</p>
                        <div class="row mt-30">
                            <div class="col-lg-5">
                                <div class="social">
                                    <div class="icon">
                                        <img src="/frontend/img/video/1.svg" alt="img">
                                    </div>
                                    <p> <a href="#">{{ config('settings.email1') }}</a></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="line"> <img src="/frontend/img/video/line.png" alt="img"></div>
                            </div>
                            <div class="col-lg-5">
                                <div class="social">
                                    <div class="icon">
                                        <img src="/frontend/img/video/2.svg" alt="img">
                                    </div>
                                    <p> <a href="#">{{ config('settings.telefon1') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="video-img wow fadeInRight animated" data-animation="fadeInDown animated" data-delay=".2s" style="background-image:url(/frontend/img/video/how-img.png); background-size: cover;">
                        <a href="https://www.youtube.com/watch?v=vKSA_idPZkc" class="video-i popup-video"> <img src="/frontend/img/video/play.svg" alt="img" class="active-icon"></a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="about" class="about-area about-p pt-100 pb-95 p-relative" style="background-image:url(/frontend/img/bg/about_aliment_bg.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-content s-about-content pl-30">
                        <div class="about-title second-atitle">
                            <span>BAY-TECH <small class="circle-right"><img src="/frontend/img/bg/circle_right.png" alt="img"></small></span>
                            <h2>PROJE YÖNETİMİ VE SÜRECİN İŞLEYİŞİ</h2>
                        </div>
                        <p>Öncelikle projenin analizi yapılarak; tasarım kriterleri, sistem seçimleri ve ilgili yönetmelikler dikkate alınarak öneri raporu hazırlanır.
                            Öneri raporunun Proje Yönetimi ve/veya İşveren tarafından onaylanmasına müteakip avan proje çalışması başlar.
                            Avan projeler için onay alındıktan sonra uygulama ve detay projeler hazırlanır. Uygulama projeleri esas alınarak
                            oluşturulan keşif-metraj listeleri, malzeme teknik şartnamesi ve marka listeleri ile ihale dosyası hazırlanır.


                        </p>
                        <P>  Proje grubumuz, günümüzün enerji gereksinimlerini göz önünde bulundurarak, ekolojik yönden çevre ile uyumlu ve
                            işletme ekonomisi en üst seviyede tutacak sistem tasarımları yapmayı hedeflemektedir.</P>

                        <div class="slider-btn mt-30">
                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>
                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="s-about-img p-relative">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="project" class="project pt-95 fix" style="background-image:url(/frontend/img/bg/portfolio_bg.png); background-size: contain;background-repeat: no-repeat;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10">
                    <div class="section-title text-left pl-40 pr-40 mb-80">
                        <span class="text-white"> BAY-TECH MAKİNE<small class="circle-right"><img src="/frontend/img/bg/circle_right.png" alt="img"></small></span>
                        <h2>SON PROJELERİMİZ</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-10">

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row portfolio-active ">
                @foreach($Service->where('category',2) as $item)
                <div class="col-md-4">
                    <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="project-thumb">
                            <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" alt="{{ $item->title.' | '.config('app.anem') }}" class="img">
                        </div>
                        <div class="project-info">
                            <h4>{{ $item->title }}</h4>
                            <a href="#">Projeyi İncele
                                <img src="/frontend/img/portfolio/right_icon.svg" alt="{{ config('app.name') }}">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="call-area" style="background-image:url(/frontend/img/call/call-bg.png); background-repeat: no-repeat; background-position: bottom;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="single-counter-img fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <img src="/worker.png" alt="img" class="img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <h2>İhtiyaçlarınız Doğrultusunda Maksimum Fayda Sağlıyoruz. Bizden Teklif Almadan Bir Projeye Başlamayın.</h2>
                    <div class="number text-white">0 212 222 22 22</div>
                </div>
            </div>
        </div>
    </div>

    <section id="blog" class="blog-area  p-relative pt-95 pb-90 fix" style="background-image:url(/frontend/img/bg/services_aliment_bg.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center mb-80 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <span><small class="circle-left"><img src="/frontend/img/bg/circle_Left.png" alt="img"></small> Bay-Tech Makine <small class="circle-right"><img src="/frontend/img/bg/circle_right.png" alt="img"></small></span>
                        <h2>HABERLER & SÖZLÜK</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                @foreach($Blog as $item)
                <div class="col-12 col-md-4">
                    <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="blog-thumb">
                            <a href="{{ route('blogdetail', $item->slug) }}" title="{{ $item->title }}">


                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page')}}" alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="{{ route('blogdetail', $item->slug) }}" title="{{ $item->title }}">{{ $item->title }}</a></h4>
                            <div class="slider-btn">
                                <a href="{{ route('blogdetail', $item->slug) }}" title="{{ $item->title }}" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Devamını Okuyun<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
