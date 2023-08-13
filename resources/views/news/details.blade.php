@php
$agent = new Jenssegers\Agent\Agent();
@endphp
@extends('master.master')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center icon"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a class="text-black text-decoration-none">{{ $news->title }}</a></div>
        </div>
    </div>
</div>
<div class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-9">
                <div class="short_description my-2">
                    {!! $news->short_description !!}
                </div>
                <div class="articles_content">
                    {!! $news->content !!}
                </div>
                <div class="related_view">
                    <h3 class="mb-3" style="font-size: 24px;">Bài viết liên quan</h3>
                    @if(count($viewmore)>0)
                    <div class="row">
                        @foreach($viewmore as $ne)
                        <div class="col-6 col-sm-4">
                            <div class="news-images" style="background:url({{ Storage::url($ne->images) }});max-height: 200px;min-height: 200px;background-size: cover;">

                            </div>
                            <div class="news-title my-2">
                                <h3 style="font-size:18px;">{{ $ne->title }}</h3>
                            </div>
                            <div class="news-title my-2">
                                {{ Str::words(strip_tags($ne->content),30,'...') }}
                            </div>
                            <div class="viewmore py-2">
                                <a href="{{ route('detail',$ne->slug) }}" class="text-decoration-none button-white border">
                                    Xem chi tiết <i class="bi bi-arrow-right-circle"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
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
                        <li style="    border-bottom: 1px solid #CCC;">
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
</div>

@endsection

@section('style')
@endsection
@section('javascript')

@endsection