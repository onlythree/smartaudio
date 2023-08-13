@php
$lang = config('app.locale');
@endphp
@extends('master.master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('detail',$newscategories->slug) }}" class="text-black text-decoration-none">{{ $newscategories->title }}</a></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="categories-description">
        {!! $newscategories->content !!}
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-9">
            @if ($news != null)
            <div class="rounded bg-white p-2 mb-3">
                <div class="row">
                    @foreach ($news as $ne)
                    <div class="news-items @if($loop->index == 0) @else col-12 col-sm-6 @endif">
                        <div class="news-images">
                            <a href="{{ route('detail',$ne->slug) }}" class="text-decoration-none">
                                <img src="{{ Storage::url($ne->images) }}" alt="{{ $ne->title }}" class="w-100" @if($loop->index != 0) style="max-height: 286px;" @endif>
                            </a>
                        </div>
                        <div class="entry-meta-head d-flex justify-content-start align-items-center my-2">
                            <div class="entry-date">
                                <i class="wpb-icon-calendar"></i>
                                <div><i class="bi bi-clock"></i> <time class="entry-date published" datetime="{{ $ne->created_at }}">{{ \Carbon\Carbon::parse($ne->created_at)->format('g:i a - d/m/Y') }}</time></div>
                            </div>
                            <div class="mx-1">|</div>
                            <div class="entry-author">
                                <i class="bi bi-person-fill"></i> Đăng bởi: Admin
                            </div>
                        </div>
                        <div class="news-title my-2">
                            <h3 style="font-size:18px;">{{ $ne->title }}</h3>
                        </div>
                        <div class="news-title my-2">
                            {{ Str::words(strip_tags($ne->content),100,'...') }}
                        </div>
                        <div class="viewmore py-2">
                            <a href="{{ route('detail',$ne->slug) }}" class="text-decoration-none button-white border">
                                Xem chi tiết <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                {{ $news->links() }}
            </div>
            @endif
        </div>
        <div class="col-12 col-sm-3">
            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Tin tức {{ $newscategories->title }}</h2>
                @if(count(getNews($newscategories->slug))>0)
                <ul class="list-style-none p-0 mb-0">
                    @foreach(getNews($newscategories->slug) as $lnews)
                    <?php
                    $lnewsImages = null;
                    if ($lnews->images != null) {
                        $lnewsImages = Storage::url($lnews->images);
                    } else {
                        $lnewsImages = asset('../asset/image/noimage.jpg');
                    }
                    ?>
                    <li style="border-bottom: 1px solid #CCC;">
                        <div class="d-flex">
                            <div class="lnews-images col-4 col-sm-4">
                                <div class="p-1">
                                    <img src="{{  $lnewsImages }}" alt="{{ $lnews->title }}" class="w-100 border" />
                                </div>
                            </div>
                            <div class="lnews-title col-8 col-sm-8">
                                <div class="p-1">
                                    <a href="{{ route('detail',$lnews->slug) }}" class="text-decoration-none text-gray">
                                        {{ $lnews->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Tin mới</h2>
                @if(count(getLastestNews())>0)
                <ul class="list-style-none p-0 mb-0">
                    @foreach(getLastestNews() as $lnews)
                    <?php
                    $lnewsImages = null;
                    if ($lnews->images != null) {
                        $lnewsImages = Storage::url($lnews->images);
                    } else {
                        $lnewsImages = asset('../asset/image/noimage.jpg');
                    }
                    ?>
                    <li style="border-bottom: 1px solid #CCC;">
                        <div class="d-flex">
                            <div class="lnews-images col-4 col-sm-4">
                                <div class="p-1">
                                    <img src="{{  $lnewsImages }}" alt="{{ $lnews->title }}" class="w-100 border" />
                                </div>
                            </div>
                            <div class="lnews-title col-8 col-sm-8">
                                <div class="p-1">
                                    <a href="{{ route('detail',$lnews->slug) }}" class="text-decoration-none text-gray">
                                        {{ $lnews->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection


@section('style')
<link rel="stylesheet" href="{{ asset('asset/owl.carousel.css') }}">
@endsection
@section('javascript')
<script src="{{ asset('asset/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function() {

    });
</script>
@endsection