
<div class="breadcrumb py-1">
    <div class="container">
        <ul class="d-flex ps-0 mb-0" style="list-style:none">
            <li class="me-2"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none text-uppercase">TRANG CHỦ</a></li>
            <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
            <li class="me-2"><a href="{{ route('detail-lv2',[$pcate->slug,$categories->slug]) }}" class="text-black-50 text-decoration-none text-uppercase">{{ $pcate->title }}</a></li>
            <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
            <li class="me-2"><a href="{{ route('detail',$categories->slug) }}" class="text-black text-decoration-none text-uppercase">{{ $categories->title }}</a></li>
        </ul>
    </div>
</div>

<div class="container my-3">
    <div class="homepage-category fs-3 w-100">{{ $pcate->title }}</div>
    <div class="homepage-category-area">
        @if(!empty($relatedCate))
        <div class="d-flex justify-content-between flex-wrap my-3">
            @foreach($relatedCate as $cate)
            <div class="cate-items-list text-center {{ $cate->slug }}" style="max-width:12.5%">
                <a href="{{ route('detail-lv2',[$pcate->slug,$cate->slug]) }}" class="text-decoration-none text-black">
                    <div class="homepage-category-images">
                        <img src="{{ Storage::url($cate->images) }}" alt="{{ $cate->title }}" class="img-responsive w-100" />
                    </div>
                    <div class="homepage-category-title text-center my-2 px-2">
                        {{ $cate->title }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="container">
    @if(!empty($categories->content))
    <div class="boxcate_description minheight">
        <div class="term-description">
            {!! $categories->content !!}
        </div>
        <div class="ovlarticle"></div>
    </div>
    <div class="xemthem d-flex justify-content-center text-center">
        <button class="btn btn-sm btn-outline-success" id="show_all">Xem toàn bộ <i class="bi bi-caret-down-fill text-green"></i></button>
        <button class="btn btn-sm btn-outline-success" id="hide_all" style="display:none">Thu gọn <i class="bi bi-caret-up-fill text-green"></i></button>
    </div>
    @endif
</div>

<div class="product-cate-lv2 mt-4">
    <div class="sand-area">
        <div class="imghomebt3 mt-3"></div>
        <div class="img-sand">
            <div class="container py-4">
                <h1 class="homepage-category w-100">{{ $categories->title }}</h1>
                <div class="filter-product">
                   
                </div>
                @if(!empty($products))
                <div class="row mt-3">
                    @foreach($products as $prod)
                    <div class="col-6 col-sm-3 col-md-2 mb-3">
                        @include('products.items',['cate'=>$pcate,'prod'=>$prod])
                    </div>
                    @endforeach
                </div>
                <div class="phan-trang">
                    {{ $products->links('master.paginator') }}
                </div>
                @endif
            </div>

        </div>
        <div class="imghomebt4 mb-3"></div> 
    </div>

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
