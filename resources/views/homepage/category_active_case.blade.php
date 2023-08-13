<div class="product-feature-tabs">
    <nav>
        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            @if(getCategoryActiveCase() != null)
            @foreach(getCategoryActiveCase() as $cate)
            <button class="nav-link @if($loop->index==0) active @endif" id="nav-{{$cate->slug}}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{$cate->slug}}" type="button" role="tab" aria-controls="nav-{{$cate->slug}}" aria-selected="true">{{$cate->title}}</button>
            @endforeach
            @endif
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        @if(getCategoryActiveCase() != null)
        @foreach(getCategoryActiveCase() as $cate) 
        <?php    
        $products = getAllProductByCateId($cate->id,9); 
        ?>
        <div class="tab-pane fade @if($loop->index==0) show active @endif" id="nav-{{$cate->slug}}" role="tabpanel" aria-labelledby="nav-{{$cate->slug}}-tab" tabindex="0">

            <?php
            if (count($products) > 0) {
                $checkProductIndex = 0;
                foreach ($products as $prod) {
                    $cate = getCateById($prod->cate_id);
                    $productRate = getProductRate($prod->id);
                    if (!is_array($prod['other_image'])) {
                        $poi = explode(',', $prod['other_image']);
                    } else {
                        $poi = $prod['other_image'];
                    }

                    if ($checkProductIndex < 4) {
                        if ($checkProductIndex == 0) {
                            echo ('<div class="row my-4"><div class="col-12 col-sm-4 left-col"><div class="row">');
                        }
            ?>
                        <div class="col-6 mb-4">
                            @include('homepage.product-items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate])
                        </div>
                    <?php

                    } elseif ($checkProductIndex == 4) {
                        //dong index =0 
                        echo ('</div></div><div class="col-12 col-sm-4 center-col">');
                    ?>

                        <div class="col-12">
                            @include('homepage.product-items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate])
                        </div>

                    <?php
                        echo ('</div><div class="col-12 col-sm-4 right-col"><div class="row">');
                    } elseif ($checkProductIndex > 4) {
                    ?>
                        <div class="col-6 mb-4">
                            @include('homepage.product-items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate])
                        </div>
                <?php
                    }
                    $checkProductIndex++;
                }
                echo ('</div></div></div>');
            } else {
                ?>
                <div class="p-4 text-center">Chưa có sản phẩm nào trong danh muc {{ $cate->title }}</div>
            <?php
            }
            ?>
        </div>
        @endforeach
        @endif
    </div>
</div>