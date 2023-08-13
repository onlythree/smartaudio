<?php
$agent = new Jenssegers\Agent\Agent();
?>


<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center icon"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a class="text-black text-decoration-none"><?php echo e($news->title, false); ?></a></div>
        </div>
    </div>
</div>
<div class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-9">
                <div class="short_description my-2">
                    <?php echo $news->short_description; ?>

                </div>
                <div class="articles_content">
                    <?php echo $news->content; ?>

                </div>
                <div class="related_view">
                    <h3 class="mb-3" style="font-size: 24px;">Bài viết liên quan</h3>
                    <?php if(count($viewmore)>0): ?>
                    <div class="row">
                        <?php $__currentLoopData = $viewmore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-sm-4">
                            <div class="news-images" style="background:url(<?php echo e(Storage::url($ne->images), false); ?>);max-height: 200px;min-height: 200px;background-size: cover;">

                            </div>
                            <div class="news-title my-2">
                                <h3 style="font-size:18px;"><?php echo e($ne->title, false); ?></h3>
                            </div>
                            <div class="news-title my-2">
                                <?php echo e(Str::words(strip_tags($ne->content),30,'...'), false); ?>

                            </div>
                            <div class="viewmore py-2">
                                <a href="<?php echo e(route('detail',$ne->slug), false); ?>" class="text-decoration-none button-white border">
                                    Xem chi tiết <i class="bi bi-arrow-right-circle"></i>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
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
                        <li style="    border-bottom: 1px solid #CCC;">
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
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/news/details.blade.php ENDPATH**/ ?>