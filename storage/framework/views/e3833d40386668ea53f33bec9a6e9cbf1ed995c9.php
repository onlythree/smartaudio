<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" />
    <link rel="icon" href="<?php echo e(asset('asset/image/favicon.png'), false); ?>" sizes="any" type="image/svg+xml">
    <?php echo SEO::generate(); ?>


    <link rel="stylesheet" href="<?php echo e(asset('asset/styles.css'), false); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <?php echo $__env->yieldContent('style'); ?>
    <?php echo @config('end_head'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('asset/owl.carousel.css'), false); ?>">
</head>

<body>
   

    <div id="page" class="<?php echo e(request()->route()->getName(), false); ?>">
        <?php echo $__env->make('master.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('master.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('master.right-navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
      
    </div>

    <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('master.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('javascript'); ?>
    <?php echo @config('end_body'); ?>

</body>

</html><?php /**PATH /var/www/resources/views/master/master.blade.php ENDPATH**/ ?>