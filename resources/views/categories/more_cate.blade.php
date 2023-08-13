 <div class="container border rounded my-3 bg-white">
     <h2 class="fs-4 my-4 d-flex justify-content-between align-items-center">Khóa vân tay<span class="fs-6"><a
                 class="text-decoration-none" href="{{ route('detail', 'khoa-van-tay') }}">Xem tất
                 cả</a></span></h2>
     <div class="row mb-4">
         @foreach (getProductByCateSlug('khoa-van-tay') as $prod)
             @include('products.items', ['categories' => getCateById($prod->cate_id), 'prod' => $prod])
         @endforeach
     </div>
 </div>
 <div class="container border rounded my-3 bg-white align-items-center">
     <h2 class="fs-4 my-4 d-flex justify-content-between">Khóa cửa nhôm<span class="fs-6"><a class="text-decoration-none"
                 href="{{ route('detail', 'khoa-cua-nhom') }}">Xem tất
                 cả</a></span></h2>
     <div class="row mb-4">
         @foreach (getProductByCateSlug('khoa-cua-nhom') as $prod)
             @include('products.items', ['categories' => getCateById($prod->cate_id), 'prod' => $prod])
         @endforeach
     </div>
 </div>

 <div class="container border rounded my-3 bg-white">
     <h2 class="fs-4 my-4 d-flex justify-content-between align-items-center">Khóa cửa kính cường lực<span
             class="fs-6"><a class="text-decoration-none"
                 href="{{ route('detail', 'khoa-cua-kinh-cuong-luc') }}">Xem tất
                 cả</a></span></h2>
     <div class="row mb-4">
         @foreach (getProductByCateSlug('khoa-cua-kinh-cuong-luc') as $prod)
             @include('products.items', ['categories' => getCateById($prod->cate_id), 'prod' => $prod])
         @endforeach
     </div>
 </div>


 <div class="container border rounded my-3 bg-white">
     <h2 class="fs-4 my-4 d-flex justify-content-between align-items-center">Khóa cửa chung cư<span class="fs-6"><a
                 class="text-decoration-none" href="{{ route('detail', 'khoa-cua-chung-cu') }}">Xem tất
                 cả</a></span></h2>
     <div class="row mb-4">
         @foreach (getProductByCateSlug('khoa-cua-chung-cu') as $prod)
             @include('products.items', ['categories' => getCateById($prod->cate_id), 'prod' => $prod])
         @endforeach
     </div>
 </div>
