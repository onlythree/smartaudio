<section id="wrapper">
    <div class="breadcrumb">
        <div class="container">
            <div class="page_title">
                <h1><?php echo e($news->title, false); ?></h1>
            </div>
            <div class=" py-1">
                <div class="container">
                    <ul class="d-flex ps-0 mb-0 justify-content-center " style="list-style:none">
                        <li class="me-2"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none text-uppercase">TRANG CHỦ</a></li>
                        <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
                        <li class="me-2"><a href="<?php echo e(route('detail',$newscategories->slug), false); ?>" class="text-black-50 text-decoration-none text-uppercase"><?php echo e($newscategories->title, false); ?></a></li>
                        <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
                        <li class="me-2"><a href="<?php echo e(route('detail',$news->slug), false); ?>" class="text-decoration-none text-uppercase"><?php echo e($news->title, false); ?></a></li>
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
                        <span itemprop="dateCreated"><?php echo e($news->created_at, false); ?></span>
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
                    <?php echo $news->short_description; ?>

                </div>
                <div class="articles_content">
                    <?php echo $news->content; ?>

                </div>
                <div id="articleShareThis">
                    <p class="title_block"><?php echo e(__('news.Share This Post'), false); ?> : </p>
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
                    <?php if(!empty(bestSeller())): ?>
                    <div class="my-3 row">
                        <?php $__currentLoopData = bestSeller(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $cate = getCategoryRootByProductSlug($prod->slug);
                        ?>
                        <div class="col-6 mb-3">
                            <?php echo $__env->make('products.items',['cate'=>$cate,'prod'=>$prod], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php endif; ?>
                </div>
                <div class="border-left mt-4 news-cong-trinh">
                    <h3 class="text-center">CÔNG TRÌNH TIÊU BIỂU</h3>
                    <hr style="width:70%;margin:20px auto;">
                    <?php if(!empty(getNews('cong-trinh-tieu-bieu'))): ?>
                    <div class="my-3 row d-flex flex-wrap">
                        <?php $__currentLoopData = getNews('cong-trinh-tieu-bieu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-box-border bg-white col-6 mb-3">
                            <a href="<?php echo e(route('detail',$news->slug), false); ?>" class="text-decoration-none">
                                <div class="news-images w-100">
                                    <div class="bg-white">
                                        <img src="<?php echo e(Storage::url($news->images), false); ?>" alt="<?php echo e($news->title, false); ?>">
                                    </div>

                                </div>
                                <div class="product-title my-2 px-1 text-center" style="min-height: 72px;">
                                    <?php echo e($news->title, false); ?>

                                </div>
                            </a>

                            <div class="view-product">Xem chi tiết</div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\smartaudio\resources\views/news/desktop/detail.blade.php ENDPATH**/ ?>