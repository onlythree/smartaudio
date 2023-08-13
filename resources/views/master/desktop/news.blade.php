<div class="news-area">
    <div class="sand-area">
        <div class="imghomebt3 "></div>
        <div class="img-sand">
            <div class="container py-4">
                <h2 class="homepage-category w-100 mt-4">Tin tức</h2>
                <div class="owl-carousel oc_news my-3">
                    @foreach (getNews('tin-tuc') as $news)
                    <div class="product-box-border bg-white">
                        <div class="news-images">
                            <a href="{{ route('detail',$news->slug) }}" class="text-decoration-none">
                                <div class="product-images w-100">

                                    <div class="bg-white">
                                        <img src="{{ Storage::url($news->images) }}" alt="{{ $news->title }}">
                                    </div>

                                </div>
                                <div class="product-title my-2 px-1 text-center" style="min-height: 72px;">
                                    {{ $news->title }}
                                </div>
                            </a>
                        </div>
                        <div class="view-product">Xem chi tiết</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="imghomebt4 mb-3"></div>
    </div>
</div>