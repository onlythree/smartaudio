<div id="col-left" style="background:rgb(0 0 0 / 72%);width: 100%;z-index: 9999;min-height: 100vh;position: fixed;display:none;top:0;overflow: scroll;max-height: 100%;">
    <div class="col-left-content" style="min-height: 100vh;width: 80%;background-color: #FFF;">
        <div class="close-menu sticky-top">
            <span>Đóng <i class="bi bi-x-lg"></i></span>
        </div>
        <?php if(!empty(getRootMenu('main-menu'))): ?>
        <ul class="top-menu d-flex flex-column px-4 py-2 list-style-none mb-0" id="menu-mobile">
            <li class="parent_menu py-1">
                <a href="<?php echo e(route('home'), false); ?>" class="text-decoration-none text-black" style="text-transform: uppercase;">Trang chủ</a>
            </li>
            <?php if(!empty(getRootCate())): ?>
            <?php $__currentLoopData = getRootCate(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="parent_menu py-2 <?php if(!empty(getRootCate())): ?> menu-item-has-children <?php endif; ?>" id="menu-item-<?php echo e($cate->id, false); ?>">
                <div class="d-flex justify-content-between align-items-center">
                    <a  href="<?php echo e(route('detail',[$cate->slug]), false); ?>" class="text-decoration-none text-black w80"><?php echo e($cate->title, false); ?></a>
                    <?php if(!empty(getRootCate())): ?>
                    <div class="child-items w20 text-end">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if(!empty(getChildeCate($cate->id))): ?>
                <ul class="sub-menu px-4 py-2 list-style-none">
                    <?php $__currentLoopData = getChildeCate($cate->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ccate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li id="menu-item-<?php echo e($ccate->id, false); ?>" class="menu-item menu-item-type-custom <?php if(!empty(getChildeCate($cate->id))): ?> menu-item-has-children-lv2 <?php endif; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="text-decoration-none text-black" href="<?php echo e(route('detail-lv2',[$cate->slug,$ccate->slug]), false); ?>"><?php echo e($ccate->title, false); ?></a>

                            <?php if(count(getChildeCate($ccate->id))): ?>
                            <div class="child-items w20 text-end">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty(getChildeCate($ccate->id))): ?>
                            <ul class="sub-menu px-4 py-2 list-style-none">
                                <?php $__currentLoopData = getChildeCate($ccate->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cccate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li  id="menu-item-<?php echo e($ccate->id, false); ?>" class="menu-item menu-item-type-custom">
                                    <a class="text-decoration-none text-black" href="<?php echo e(route('detail-lv3',[$cate->slug,$ccate->slug,$cccate->slug]), false); ?>"><?php echo e($cccate->title, false); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div><?php /**PATH /home/smartaudio/domains/smartaudio.vn/public_html/resources/views/master/navigation.blade.php ENDPATH**/ ?>