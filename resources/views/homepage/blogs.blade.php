@if(!empty($news))
<div class="owl-carousel" id="blogs">
    @foreach ($news as $ne)
    @php
    $newsCategories = getNewsCategoriesById($ne->news_cateid);
    @endphp
    <div class="latest-post-item ">
        <div class="latest-post-inner clearfix">
            <div class="post-images-wrapper">
                <a href="{{ route('news-details',[$newsCategories->slug,$ne->slug]) }}">
                    <img class="replace-2x img-responsive" src="{{ storage::url($ne->images) }}" alt="{{ $ne->title }}" title="{{ $ne->title }}">
                </a> 
            </div>
            <div class="latest-post-content">
                <div class="blog-date">
                    <span>{{ $ne->created_at }}</span>
                </div>
                <div class="blog-infodesc">
                    <h5 class="post-title">
                        <a class="text-decoration-none" href="{{ route('news-details',[$newsCategories->slug,$ne->slug]) }}">{{ $ne->title }}</a>
                    </h5>
                    <div class="blog-description-content">
                        {!!  Str::words($ne->content, 15, ' ...')!!}
                    </div>
                    <p class="link-more">
                        <a class="text-decoration-none" href="{{ route('news-details',[$newsCategories->slug,$ne->slug]) }}" ><button>{{ __('news.readmore') }}</button></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif