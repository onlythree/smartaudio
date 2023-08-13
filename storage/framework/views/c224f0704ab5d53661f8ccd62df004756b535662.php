<div id="col-right" style="background:rgb(0 0 0 / 72%);width: 100%;z-index: 9999;min-height: 100vh;position: fixed;display:none;top:0;overflow: scroll;max-height: 100%;">
    <div class="col-right-content" style="min-height: 100vh;width: 80%;background-color: #FFF;float: right;">
        <div class="close-menu sticky-top">
            <span><i class="bi bi-x-lg"></i> Đóng</span>
        </div>
        <?php if(!empty(getRootMenu('main-menu'))): ?>
        <ul class="top-menu d-flex flex-column px-4 py-2 list-style-none mb-0" id="menu-mobile">
            <li class="parent_menu py-1">
                <a href="<?php echo e(route('home'), false); ?>" class="text-decoration-none text-black" style="text-transform: uppercase;">Trang chủ</a>
            </li>
            <?php if(!empty(getRootMenu('main-menu'))): ?>
            <?php $__currentLoopData = getRootMenu('main-menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="parent_menu py-2 <?php if(!empty(getRootMenu('main-menu'))): ?> menu-item-has-children <?php endif; ?>" id="menu-item-<?php echo e($menu->id, false); ?>">
                <div class="d-flex justify-content-between align-items-center"> 
                    <a href="<?php echo e($menu->link, false); ?>" class="text-decoration-none text-black w80"><?php echo e($menu->title, false); ?></a>
                    <?php if(count(getChildMenu($menu->id))>0): ?>
                    <div class="child-items w20 text-end">
                    <i class="bi bi-caret-down"></i>
                    </div>
                    <?php else: ?>
                    <div class="child-items w80 text-end">
                        <i class="bi bi-caret-down" style="color:#FFF"></i>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if(!empty(getChildMenu($menu->id))): ?>
                <ul class="sub-menu px-4 py-2 list-style-none">
                    <?php $__currentLoopData = getChildMenu($menu->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li id="menu-item-1937" class="menu-item menu-item-type-custom">
                        <a class="text-decoration-none text-black" href="<?php echo e($cmenu->link, false); ?>"><?php echo e($cmenu->title, false); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php if(!empty(getRootMenu('top-bar'))): ?>
            <?php $__currentLoopData = getRootMenu('top-bar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($menu->link != '/'): ?>
            <li class="parent_menu py-2" id="menu-item-<?php echo e($menu->id, false); ?>">
                <a href="<?php echo e($menu->link, false); ?>" class="text-decoration-none text-black" style=""><?php echo e($menu->title, false); ?></a>
            </li>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div><?php /**PATH /home/smartaudio/domains/smartaudio.vn/public_html/resources/views/master/right-navigation.blade.php ENDPATH**/ ?>