<div class="product-item <?php echo e($categories->slug, false); ?>">
    <div class="product-image-wraper">
        <a href="<?php echo e(route('product-details',$prod->slug), false); ?>" class="thumbnail product-thumbnail">
            <span class="cover_image">
                <img src="<?php echo e(Storage::url($prod->images), false); ?>" alt="<?php echo e($prod->title, false); ?>" class="w100">
            </span>
        </a>
        <?php if($prod->sale_price>0): ?>
        <div class="discount-percentage discount-product bg-white px-1">-<?php echo e(round((($prod->base_price - $prod->sale_price)/$prod->base_price)*100), false); ?>%</div>
        <?php endif; ?>
    </div>
    <div class="product-description text-center">
        <div class="products-decs">
            <h3 class="product-title fs-6 mt-2" itemprop="name">
                <a class="text-decoration-none" href=""><?php echo e($prod->title, false); ?></a>
            </h3>
        </div>
        <div class="product-price">
            <?php if($prod->base_price >0 && $prod->sale_price > 0): ?>
            <div class="price-area">
                <div class="base-price text-decoration-line-through" style="font-size: 16px;color: #777;"><?php echo e(number_format($prod->base_price,0,',','.'), false); ?> vnđ</div>
                <div class="sale-price" style="font-size: 20px;color: red;"><?php echo e(number_format($prod->sale_price,0,',','.'), false); ?> vnđ</div>
            </div>
            <?php elseif($prod->base_price >0 && $prod->sale_price <= 0): ?> <div class="price-area">
                <!-- <div class="base-price text-decoration-line-through" style="font-size: 16px;color: #777;">&nbsp</div> -->
                <div class="base-price" style="font-size: 20px;color: red;"><?php echo e(number_format($prod->base_price,0,',','.'), false); ?> vnđ</div>
        </div>
        <?php endif; ?>
    </div>
</div>
</div><?php /**PATH C:\wamp64\www\smartaudio\resources\views/products/item_detail.blade.php ENDPATH**/ ?>