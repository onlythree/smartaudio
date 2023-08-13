<section id="wrapper">
    <div class="breadcrumb">
        <div class="container">
            <div class="page_title">
                <h1>{{ $news->title }}</h1>
            </div>
            <div class=" py-1">
                <div class="container">
                    <ul class="d-flex ps-0 mb-0 justify-content-center " style="list-style:none">
                        <li class="me-2"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none text-uppercase">TRANG CHỦ</a></li>
                        <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
                        <li class="me-2"><a href="{{ route('detail',$newscategories->slug) }}" class="text-black-50 text-decoration-none text-uppercase">{{ $newscategories->title }}</a></li>
                        <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
                        <li class="me-2"><a href="{{ route('detail',$news->slug) }}" class="text-decoration-none text-uppercase">{{ $news->title }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="sdsarticleHeader my-3">
                <div class="post_meta clearfix">
                    <div class="meta_author">
                        <i class="bi bi-person-bounding-box"></i>
                        <span>Admin</span>
                    </div>
                    <div class="meta_date">
                        <i class="bi bi-calendar-date"></i>
                        <span itemprop="dateCreated">{{ $news->created_at }}</span>
                    </div>
                    <div class="meta_comment">
                        <i class="bi bi-chat-quote"></i>
                        0 Comments
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
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

            </div>
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
                <div class="border-left mt-4 news-cong-trinh">
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
</div>