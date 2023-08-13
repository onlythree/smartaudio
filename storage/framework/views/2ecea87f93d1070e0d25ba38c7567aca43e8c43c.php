<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('detail',$newscategories->slug), false); ?>" class="text-black text-decoration-none"><?php echo e($newscategories->title, false); ?></a></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="categories-description">
        <?php echo $newscategories->content; ?>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-9">
            <?php if($news != null): ?>
            <div class="rounded bg-white p-2 mb-3">
                <div class="row">
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="news-items <?php if($loop->index == 0): ?> <?php else: ?> col-12 col-sm-6 <?php endif; ?>">
                        <div class="news-images">
                            <a href="<?php echo e(route('detail',$ne->slug), false); ?>" class="text-decoration-none">
                                <img src="<?php echo e(Storage::url($ne->images), false); ?>" alt="<?php echo e($ne->title, false); ?>" class="w-100" <?php if($loop->index != 0): ?> style="max-height: 286px;" <?php endif; ?>>
                            </a>
                        </div>
                        <div class="entry-meta-head d-flex justify-content-start align-items-center my-2">
                            <div class="entry-date">
                                <i class="wpb-icon-calendar"></i>
                                <div><i class="bi bi-clock"></i> <time class="entry-date published" datetime="<?php echo e($ne->created_at, false); ?>"><?php echo e(\Carbon\Carbon::parse($ne->created_at)->format('g:i a - d/m/Y'), false); ?></time></div>
                            </div>
                            <div class="mx-1">|</div>
                            <div class="entry-author">
                                <i class="bi bi-person-fill"></i> Đăng bởi: Admin
                            </div>
                        </div>
                        <div class="news-title my-2">
                            <h3 style="font-size:18px;"><?php echo e($ne->title, false); ?></h3>
                        </div>
                        <div class="news-title my-2">
                            <?php echo e(Str::words(strip_tags($ne->content),100,'...'), false); ?>

                        </div>
                        <div class="viewmore py-2">
                            <a href="<?php echo e(route('detail',$ne->slug), false); ?>" class="text-decoration-none button-white border">
                                Xem chi tiết <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="row">
                <?php echo e($news->links(), false); ?>

            </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-sm-3">
            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Tin tức <?php echo e($newscategories->title, false); ?></h2>
                <?php if(count(getNews($newscategories->slug))>0): ?>
                <ul class="list-style-none p-0 mb-0">
                    <?php $__currentLoopData = getNews($newscategories->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lnews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $lnewsImages = null;
                    if ($lnews->images != null) {
                        $lnewsImages = Storage::url($lnews->images);
                    } else {
                        $lnewsImages = asset('../asset/image/noimage.jpg');
                    }
                    ?>
                    <li style="border-bottom: 1px solid #CCC;">
                        <div class="d-flex">
                            <div class="lnews-images col-4 col-sm-4">
                                <div class="p-1">
                                    <img src="<?php echo e($lnewsImages, false); ?>" alt="<?php echo e($lnews->title, false); ?>" class="w-100 border" />
                                </div>
                            </div>
                            <div class="lnews-title col-8 col-sm-8">
                                <div class="p-1">
                                    <a href="<?php echo e(route('detail',$lnews->slug), false); ?>" class="text-decoration-none text-gray">
                                        <?php echo e($lnews->title, false); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Tin mới</h2>
                <?php if(count(getLastestNews())>0): ?>
                <ul class="list-style-none p-0 mb-0">
                    <?php $__currentLoopData = getLastestNews(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lnews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $lnewsImages = null;
                    if ($lnews->images != null) {
                        $lnewsImages = Storage::url($lnews->images);
                    } else {
                        $lnewsImages = asset('../asset/image/noimage.jpg');
                    }
                    ?>
                    <li style="border-bottom: 1px solid #CCC;">
                        <div class="d-flex">
                            <div class="lnews-images col-4 col-sm-4">
                                <div class="p-1">
                                    <img src="<?php echo e($lnewsImages, false); ?>" alt="<?php echo e($lnews->title, false); ?>" class="w-100 border" />
                                </div>
                            </div>
                            <div class="lnews-title col-8 col-sm-8">
                                <div class="p-1">
                                    <a href="<?php echo e(route('detail',$lnews->slug), false); ?>" class="text-decoration-none text-gray">
                                        <?php echo e($lnews->title, false); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('asset/owl.carousel.css'), false); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script src="<?php echo e(asset('asset/owl.carousel.min.js'), false); ?>"></script>
<script>
    $(document).ready(function() {

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/news-categories/category_show.blade.php ENDPATH**/ ?>