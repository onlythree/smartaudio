@php
$lang = config('app.locale');
@endphp
@extends('master.master')
@section('content')

<section id="wrapper">
    <div class="breadcrumb">
        <div class="container">
            <div class="page_title">
                <h1>{{ $tag->title }}</h1>
            </div>
            <div class=" py-1">
                <div class="container">
                    <ul class="d-flex ps-0 mb-0 justify-content-center " style="list-style:none">
                        <li class="me-2"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none text-uppercase">TRANG CHỦ</a></li>
                        <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
                        <li class="me-2"><a href="{{ route('product-tag',$tag->slug) }}" class="text-black-50 text-decoration-none text-uppercase">{{ $tag->title }}</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container category-1">
    @if(!empty($tag->content))
    <div class="boxcate_description minheight">
        <div class="term-description">
            {!! $tag->content !!}
        </div>
        <div class="ovlarticle"></div>
    </div>
    <div class="xemthem d-flex justify-content-center text-center">
        <button class="btn btn-sm btn-outline-success" id="show_all">Xem toàn bộ <i class="bi bi-caret-down-fill text-green"></i></button>
        <button class="btn btn-sm btn-outline-success" id="hide_all" style="display:none">Thu gọn <i class="bi bi-caret-up-fill text-green"></i></button>
    </div>
    @endif
</div>

@if(!empty($product))

<div class="tag-area">
    <div class="container py-4"> 
        <div class="row">
            @foreach($product as $prod)
            <?php
            $cate = getCategoryRootByProductSlug($prod->slug);
            ?>
            <div class="col-6 col-sm-2 mb-3">
                @include('products.items',['prod'=>$prod])
            </div>

            @endforeach
        </div> 
    </div>
</div>

@endif

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
@endsection

@section('style')
@endsection
@section('javascript')
<script>
    $(document).ready(function() {

        $('.xemthem').on('click', '#show_all', function() {
            $('.boxcate_description').addClass('opened');
            $(this).attr('style', 'display:none');
            $('.ovlarticle').attr('style', 'display:none');
            $('#hide_all').attr('style', 'display:block');
            $('.xemthem').addClass('mt-3');
        });
        $('.xemthem').on('click', '#hide_all', function() {
            $('.boxcate_description').removeClass('opened');
            $(this).attr('style', 'display:none');
            $('.ovlarticle').attr('style', 'display:block');
            $('#show_all').attr('style', 'display:block');
            $('.xemthem').removeClass('mt-3');
        });
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