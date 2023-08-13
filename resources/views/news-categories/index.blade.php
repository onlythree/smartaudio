@extends('master.master')
@section('content')
{{ dd($newscategories) }}
<section id="wrapper">
    <div class="breadcrumb">
        <div class="container">
            <div class="page_title">
                <h1>{{ $newscategories->title }}</h1>
            </div>
            <div class="breadcrum">
                <a href="{{ url('/') }}" class="text-decoration-none"><b>Trang chủ</b></a> /
                <a href="#">{{ $newscategories->title }}</a>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="col-12 col-sm-8">
        @if ($news != null)
        <div class="rounded bg-white p-2 mb-3">
            <div class="row">
                @foreach ($news as $ne)
             
                @endforeach
            </div>
        </div>
        <div class="row">
            {{ $news->links() }}
        </div>
        @endif
    </div>
    <div class="col-12 col-sm-4">
        <div class="col-12 col-sm-4">
            <div class="border-left mt-4">
                <h3 class="text-center">SẢN PHẨM BÁN CHẠY</h3>
                <hr style="width:70%;margin:20px auto;">
                @if(!empty(bestSeller()))
                <div class="my-3 row">
                    @foreach (bestSeller() as $prod)
                    <?php
                    $cate = getCategoryRootByProductSlug($prod->slug);
                    ?>
                    <div class="col-6 mb-3">
                        @include('products.items',['cate'=>$cate,'prod'=>$prod])
                    </div>
                    @endforeach
                </div>
                <!-- Modal -->
                <div class="modal fade" id="quickviewModal" tabindex="-1" aria-labelledby="quickviewModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title fs-5 qv-product-title">Modal title</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-sm-5">
                                        <div class="qv-product-image">

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7">
                                        <div class="qv-product-price"></div>
                                        <div class="qv-product-saleprice"></div>
                                        <div class="qv-product-short-description"></div>
                                        <div class="qv-product-detail mt-3 mb-2"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="border-left news-cong-trinh mt-4">
                <h3 class="text-center">CÔNG TRÌNH TIÊU BIỂU</h3>
                <hr style="width:70%;margin:20px auto;">
                @if(!empty(getNews('cong-trinh-tieu-bieu')))
                <div class="my-3 row d-flex flex-wrap">
                    @foreach(getNews('cong-trinh-tieu-bieu') as $news)
                    <div class="product-box-border bg-white col-6 mb-3">
                        <a href="{{ route('detail',$news->slug) }}" class="text-decoration-none">
                            <div class="news-images w-100">
                                <div class="bg-white">
                                    <img src="{{ Storage::url($news->images) }}" alt="{{ $news->title }}">
                                </div>

                            </div>
                            <div class="product-title my-2 px-1 text-center" style="min-height: 72px;">
                                {{ $news->title }}
                            </div>
                        </a>

                        <div class="view-product">Xem chi tiết</div>
                    </div>
                    @endforeach
                </div>
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
        $('.quickview').on('click', function() {
            $ptitle = $(this).attr('data-product-title');
            $pimage = $(this).attr('data-product-image');
            $pbaseprice = $(this).attr('data-product-base-price');
            $psaleprice = $(this).attr('data-product-sale-price');
            $pshortdesc = $(this).attr('data-product-short-description');
            $pdetail = $(this).attr('data-product-detail');
            $('.qv-product-title').html('<h3>' + $ptitle + '</h3>');
            $('.qv-product-image').html('<img src="' + $pimage + '" class="w-100">');
            if ($pbaseprice != '0') {

                if ($psaleprice != '0') {
                    $('.qv-product-price').html('<p>Giá sản phẩm: ' + $pbaseprice + '</p>');
                    $('.qv-product-saleprice').html('<p>Giá sale: ' + $psaleprice + '</p>');
                } else {
                    $('.qv-product-price').html('<p>Giá sản phẩm: ' + $pbaseprice + '</p>');
                }
            } else {
                $('.qv-product-price').html('<p>Giá sản phẩm: Liên hệ</p>');
            }
            if ($psaleprice != '0') {
                $('.qv-product-price').html('<p>Giá sản phẩm: ' + $pbaseprice + '</p>');
                $('.qv-product-saleprice').html('<p>Giá sale: ' + $psaleprice + '</p>');
            }
            $('.qv-product-short-description').html($pshortdesc);
            $('.qv-product-detail').html('<a href="' + $pdetail + '" class="btn btn-primary">Xem chi tiết</a>');

            $('#quickviewModal').modal('show');
        });
    });
</script>
@endsection