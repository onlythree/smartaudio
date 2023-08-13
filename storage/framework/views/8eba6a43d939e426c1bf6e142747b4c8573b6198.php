<?php if(getSlide('partner') != null): ?>
<div class="owl-carousel oc_doitac my-3">
    <?php $__currentLoopData = getSlide('partner'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="partner-items border">
        <img src="<?php echo e(Storage::url($slide->images), false); ?>" alt="<?php echo e($slide->title, false); ?>" class="w-100">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?><?php /**PATH /home/smartaudio/domains/smartaudio.vn/public_html/resources/views/homepage/partner-slide.blade.php ENDPATH**/ ?>