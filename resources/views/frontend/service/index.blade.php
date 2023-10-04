@extends('frontend.layout.app')
@section('content')

    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(/back.jpg);">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h1>Bay-Tech Hizmetlerimiz</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-dark">Hizmetlerimiz</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-fluid mt-4">
        <div class="row">
            @foreach($Service as $item)
                <div class="col-lg-4 mb-4">
                    <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">

                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }} - Dr. Turan Çetin">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner line-height-1">{{ $item->title }}</span>

                            </span>
                        </span>
                    </span>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
@endsection
