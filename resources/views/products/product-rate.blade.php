<div class="product-rate d-flex justify-content-start align-items-center">
    <div class="product-rate-icon">
        <?php
        if ($productRate == null) {
        ?>
            <div class="d-flex">
                <i class="bi bi-star color-gray"></i>
                <i class="bi bi-star color-gray"></i>
                <i class="bi bi-star color-gray"></i>
                <i class="bi bi-star color-gray"></i>
                <i class="bi bi-star color-gray"></i>
            </div>
            <?php
        } else {
            if (floatval($productRate->rate) == 1) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) > 1 && floatval($productRate->rate) < 2) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-half color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) == 2) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) > 2 && floatval($productRate->rate) < 3) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-half color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) == 3) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) > 3 && floatval($productRate->rate) < 4) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-half color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) == 4) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star color-yellow"></i>
                </div>
            <?php
            }

            if (floatval($productRate->rate) > 4 && floatval($productRate->rate) < 5) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-half color-yellow"></i>
                </div>
            <?php
            }
            if (floatval($productRate->rate) == 5) {
            ?>
                <div class="d-flex">
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                    <i class="bi bi-star-fill color-yellow"></i>
                </div>
        <?php
            }
        } ?>
    </div>
    @if ($productRate == null)
    <div class="product-rate-count ms-1">(0) Đánh giá</div>
    @else
    <div class="product-rate-count ms-1">({{$productRate->total}}) Đánh giá</div>
    @endif
</div>