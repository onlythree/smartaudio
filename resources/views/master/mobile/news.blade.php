<div class="container py-4">
    <h2 class="homepage-category w-100 mt-4">Tin tức</h2>
    <div class="">
        @foreach (getNews('tin-tuc') as $news)
        <div class="product-box-border bg-white ">
            <a href="{{ route('detail',$news->slug) }}" class="text-decoration-none">
                <div class="row m-0 mb-2 p-1 border">
                    <div class="product-images-mobile col-6" style="overflow: hidden;max-height: 150px;">
                        <img src="{{ Storage::url($news->images) }}" alt="{{ $news->title }}" class="w-100">
                    </div>
                    <div class="product-images-mobile col-6">
                        <b style="font-size: 14px;">{{ $news->title }}</b>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>