<div class="product-bestseller-tabs">
    <nav>
        <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
            @if(getCategoryBestSellerCase() != null)
            @foreach(getCategoryBestSellerCase() as $cate)
            <button class="nav-link @if($loop->index==0) active @endif" id="nav-{{$cate->slug}}-tab-bestseller" data-bs-toggle="tab" data-bs-target="#nav-{{$cate->slug}}-bestseller" type="button" role="tab" aria-controls="nav-{{$cate->slug}}-bestseller" aria-selected="true">{{$cate->title}}</button>
            @endforeach
            @endif
        </div>
    </nav>
    <div class="tab-content mt-4" id="nav-tabContent">
        @if(getCategoryActiveCase() != null)
        @foreach(getCategoryActiveCase() as $cate)
        <?php
        $products = getAllProductByCateId($cate->id, 18);
        ?>
        <div class="tab-pane fade @if($loop->index==0) show active @endif" id="nav-{{$cate->slug}}-bestseller" role="tabpanel" aria-labelledby="nav-{{$cate->slug}}-tab-bestseller" tabindex="0">
            <div class="list-product">
                @if(!empty($products))
                <div class="owl-carousel oc_bestseller my-3">
                    <?php
                    $node = 0;
                    foreach ($products as $prod) {
                        $cate = getCateById($prod->cate_id);
                        $productRate = getProductRate($prod->id);
                        if (!is_array($prod['other_image'])) {
                            $poi = explode(',', $prod['other_image']);
                        } else {
                            $poi = $prod['other_image'];
                        }
                        if ($node == 0) {
                            echo '<div class="col-2-items" style="margin-right:-5px;">';
                        }
                    ?>
                        <div class="products-items mb-4 border-end ">
                            <div class="product-box-border bg-white ">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="product-images w-100 position-relative">
                                            <div class="position-absolute" style="right: 20px;top: 10px;">
                                                <div class="label">
                                                    @if($prod['hot'] == 1)
                                                    <label class="button-red">Hot</label>
                                                    @elseif($prod['best_seller'] == 1)
                                                    <label class="button-green">Bán chạy</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="position-relative product_images">
                                                <div class="first-image">
                                                    <a href="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod['slug']])  }}">
                                                        <img src="{{ Storage::url($prod['images']) }}" alt="{{ $prod['title'] }}" class="w-100">
                                                    </a>
                                                </div>
                                                <div class="second-image position-absolute top-0" style="width: 100%;height: 100%;">
                                                    <a href="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod['slug']])  }}">
                                                        @if($poi[0] != null)
                                                        <img src="{{ Storage::url($poi[0]) }}" alt="{{ $prod['title'] }}" class="w-100">
                                                        @else
                                                        <img src="{{ Storage::url($prod['images']) }}" alt="{{ $prod['title'] }}" class="w-100">
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="product-infor mt-3 px-1">
                                            @include('products.product-rate',['product_rate',$productRate])
                                            <div class="cat-products"><a href="" class="text-decoration-none color-gray">{{$cate->title}}</a></div>
                                            <h3 class="product-title"><a href="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod['slug']])  }}" class="text-decoration-none fw-bold">{{$prod['title']}}</a></h3>
                                            <div class="product-price d-flex align-items-baseline flex-column">
                                                <?php
                                                if ($prod['base_price'] > 0 && $prod['sale_price'] > 0) {
                                                ?>
                                                    <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;">{{ number_format($prod['base_price'],0,',','.') }}
                                                        <smal style="font-size: 13px;">đ</smal>
                                                    </div>
                                                    <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;">{{ number_format($prod['sale_price'],0,',','.') }}
                                                        <smal style="font-size: 13px;">đ</smal>
                                                    </div>
                                                <?php
                                                } else if ($prod['base_price'] > 0 && $prod['sale_price'] <= 0) {
                                                ?>
                                                    <div class="product-base-price" style="color: #444;font-weight: bold;">{{ number_format($prod['base_price'],0,',','.') }}
                                                        <smal style="font-size: 13px;">đ</smal>
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($node == 1) {
                            echo '</div>';
                        }
                        $node++;
                        if ($node > 1) {
                            $node = 0;
                        }
                    } ?>
                </div> 
                @endif
            </div>
        </div>
        @endforeach 
        @endif
    </div>
</div>