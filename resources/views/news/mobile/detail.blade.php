<div class="news-details">
    <div class="container">

        <h1 style="font-size:24px;margin-top:20px;">{{ $news->title }}</h1>
        <div class="short_description my-2">
            {!! $news->short_description !!}
        </div>
        <div class="articles_content">
            {!! $news->content !!}
        </div>
        <div id="articleShareThis">
            <p class="title_block">{{ __('news.Share This Post') }} : </p>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f4e05feebfac64d"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox"></div>
        </div>

        <div class="border-left mt-4 news-cong-trinh ">
            <h3 class="text-center">CÔNG TRÌNH TIÊU BIỂU</h3>
            <hr style="width:70%;margin:20px auto;">
            @if(!empty(getNews('cong-trinh-tieu-bieu')))
            <div class="my-3 row d-flex flex-wrap">
                @foreach(getNews('cong-trinh-tieu-bieu') as $news)

                <div class="product-box-border bg-white ">
                    <a href="{{ route('detail',$news->slug) }}" class="text-decoration-none">
                        <div class="row m-0 mb-2 p-1 border">
                            <div class="product-images-mobile col-6 mt-3">
                                <img src="{{ Storage::url($news->images) }}" alt="{{ $news->title }}" class="w-100">

                            </div>
                            <div class="product-images-mobile col-6">
                                <div class="text-black" style="font-size: 14px;">
                                    <div style="font-size: 14px;">{{ $news->title }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>