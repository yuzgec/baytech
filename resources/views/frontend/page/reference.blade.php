@extends('frontend.layout.app')
@section('content')

    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(/back.jpg);">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h1>Referanslar</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Anasayfa</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Referanslar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="brand-area pt-60" style="background-color:#fff">
        <div class="container">
            <div class="row brand">
                @foreach ($Reference->getMedia('gallery') as $item)
                <div class="col-md-3">
                    <div class="single-brand">
                        <img src="{{ $item->getUrl('thumb') }}" alt="img">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    

@endsection
