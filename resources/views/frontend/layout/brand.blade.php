<div class="brand-area pt-60" style="background-color:#fff">
    <div class="container">
        <div class="row brand-active">
            @foreach ($Reference->getMedia('gallery') as $item)
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ $item->getUrl('thumb') }}" alt="img">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
