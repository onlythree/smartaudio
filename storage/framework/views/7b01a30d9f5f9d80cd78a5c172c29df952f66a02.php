<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale'), false); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">
    <title><?php echo e(Admin::title(), false); ?> <?php if($header): ?> | <?php echo e($header, false); ?><?php endif; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php if(!is_null($favicon = Admin::favicon())): ?>
    <link rel="shortcut icon" href="<?php echo e($favicon, false); ?>">
    <?php endif; ?>

    <?php echo Admin::css(); ?>


    <script src="<?php echo e(Admin::jQuery(), false); ?>"></script>
    <?php echo Admin::headerJs(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition <?php echo e(config('admin.skin'), false); ?> <?php echo e(join(' ', config('admin.layout')), false); ?>">

    <?php if($alert = config('admin.top_alert')): ?>
    <div style="text-align: center;padding: 5px;font-size: 12px;background-color: #ffffd5;color: #ff0000;">
        <?php echo $alert; ?>

    </div>
    <?php endif; ?>

    <div class="wrapper">

        <?php echo $__env->make('admin::partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('admin::partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-wrapper" id="pjax-container">
            <?php echo Admin::style(); ?>

            <div id="app">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo Admin::script(); ?>

            <?php echo Admin::html(); ?>

        </div>

        <?php echo $__env->make('admin::partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <button id="totop" title="Go to top" style="display: none;"><i class="fa fa-chevron-up"></i></button>

    <script>
        function LA() {}
        LA.token = "<?php echo e(csrf_token(), false); ?>";
        LA.user = <?php echo json_encode($_user_, 15, 512) ?>;
    </script>

    <!-- REQUIRED JS SCRIPTS -->
    <?php echo Admin::js(); ?>

    <script src="https://cdn.tiny.cloud/1/49tgqvj90m2taoh1b2av4uxqtgwzxc414de0l1y5g5b30268/tinymce/6/tinymce.min.js"></script>
    <script src="<?php echo e(asset('asset/locdau.js'), false); ?>"></script>
    <script src="<?php echo e(asset('asset/tinymce.js'), false); ?>"></script>
    <script>
        $(document).on('ready pjax:success', function() {

            tinymce.init({
                selector: 'textarea.content',

                image_class_list: [{
                    title: 'img-responsive',
                    value: 'img-responsive'
                }, ],
                height: 500,
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                },
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'code | blocks |' +
                    'fontsize bold italic | forecolor backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'anchor link unlink | image imagetools | table | removeformat',

                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
                //valid_elements: 'strong/b,p,img[src],h1,h2,h3,h4,h5,table,tr,td,th,a[href],span[style]',
                color_cols: 5,

                image_title: true,
                automatic_uploads: true,
                images_upload_url: '/admin/upload',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function() {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), {
                                title: file.name
                            });
                        };
                    };
                    input.click();
                },

                relative_urls: false,
                convert_urls: false,
                remove_script_host: false,

            });
        });
    </script>
</body>

</html><?php /**PATH C:\wamp64\www\smartaudio\vendor\encore\laravel-admin\src/../resources/views/index.blade.php ENDPATH**/ ?>