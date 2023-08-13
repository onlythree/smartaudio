
<?php $__env->startSection('content'); ?>
<div class="breadcrumb" style="margin-bottom:0;">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('detail',$page->slug), false); ?>" class="text-black text-decoration-none"><?php echo e($page->title, false); ?></a></div>
        </div>
    </div>
</div>

<?php if($page->slug =='gioi-thieu'): ?>
<div class="full-page" style="margin-top:30px;">
    <?php echo $page->content; ?>

    <div class="container">
        <div class="top-brand">
            <h2 class="text-center mb-5 mt-5">Đối tác & Các khách hàng</h2>
            <div class="partnet-slide">
                <?php echo $__env->make('homepage.partner-slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php elseif($page->slug =='lien-he'): ?>
<div class="full-page">
    <div class="contact-map">
        <?php echo config('lien-he-ban-do'); ?>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="contact_info">
                    <?php echo $page->content; ?>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="" style="padding: 0px 0px 15px 0px;border-style: solid;border-width: 0px 0px 3px 0px;border-color: #ea3d01;margin-top: 40px;">
                    <h2 style="font-size: 30px;font-weight: 600;">Liên hệ với chúng tôi</h2>
                </div>
                <div class="my-3">
                    <i class="color-gray" style="font-size: 16px;">Điền đầy đủ thông tin vào biểu mẫu dưới đây để chúng tôi có thể hỗ trợ bạn tốt nhất.</i>
                </div>
                <form method="post" class="row" id="sendContact">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-2 col-12 ">
                        <b>Bạn cần hỗ trợ?</b>
                        <select id="reason" name="reason" class="form-control">
                            <option value="Báo giá sản phẩm" <?php if(request()->get('reason') != null): ?> <?php if(request()->get('reason') == "Báo giá sản phẩm" ): ?> selected <?php endif; ?> <?php endif; ?>>Báo giá sản phẩm</option>
                            <option value="Tư vấn giải pháp" <?php if(request()->get('reason') != null): ?> <?php if(request()->get('reason') == "Tư vấn giải pháp" ): ?> selected <?php endif; ?> <?php endif; ?>>Tư vấn giải pháp</option>
                            <option value="Tư vấn khác" <?php if(request()->get('reason') != null): ?> <?php if(request()->get('reason') == "Tư vấn khác" ): ?> selected <?php endif; ?> <?php endif; ?>>Tư vấn khác</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group mb-2 col-12 col-sm-4">
                            <b>Tên của bạn</b>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên của bạn" />
                            <div class="error_name text-danger"></div>
                        </div>
                        <div class="form-group mb-2 col-12 col-sm-4">
                            <b>Email</b>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Nhập email" />
                            <div class="error_email text-danger"></div>
                        </div>
                        <div class="form-group mb-2 col-12 col-sm-4">
                            <b>Số điện thoại</b>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" />
                            <div class="error_phone text-danger"></div>
                        </div>
                    </div>
                    <div class="form-group mb-2 col-12">
                        <b>Tiêu đề</b>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Nhập tiêu đề" <?php if(request()->get('reason') != null): ?> <?php if(request()->get('reason') == "Báo giá sản phẩm" ): ?> value="Báo giá sản phẩm" <?php endif; ?> <?php endif; ?> />
                        <div class="error_subject text-danger"></div>
                    </div>
                    <div class="form-group mb-2 col-12">
                        <b>Nội dung</b>
                        <textarea id="content_data" name="content" class="form-control" placeholder="Nhập nội dung liên hệ"><?php if(request()->get('reason') != null): ?> <?php if(request()->get('reason') == "Báo giá sản phẩm" ): ?><?php if(request()->get('prod') != null): ?> Tôi cần báo giá cho sản phẩm "<?php echo e(request()->get('prod'), false); ?>" <?php endif; ?> <?php endif; ?> <?php endif; ?></textarea>
                        <div class="error_content text-danger"></div>
                    </div>
                    <div class="form-group mb-2 col-12">
                        <button id="submit" type="button" style="background: #ea3d01;border: 1px solid #ea3d01;color: #FFF;width: 100%;padding: 5px;border-radius: 100px !important;margin-top: 10px;">Gửi thông tin</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="top-brand">
            <h2 class="text-center mb-5 mt-5">Đối tác & Các khách hàng</h2>
            <div class="partnet-slide">
                <?php echo $__env->make('homepage.partner-slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="contactModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gửi thông tin liên hệ</h5>
                <button type="button" class="btn-close closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Thông tin liên hệ của bạn đã được gửi tới chúng tôi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeModal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<?php if($page->display_type == 'fullpage'): ?>
<div class="container page">
    <?php echo $page->content; ?>

</div>
<?php elseif($page->display_type == 'sidebar-right'): ?>
<div style="padding-top:30px;">
    <div class="container page">
        <div class="row">
            <div class="col-12 col-sm-9"><?php echo $page->content; ?></div>
            <div class="col-12 col-sm-3">
                <?php echo $__env->make('contacts.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="mt-3 widget filter-price">
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
<?php elseif($page->display_type == 'sidebar-left'): ?>
<div style="padding-top:30px;">
    <div class="container page">
        <div class="row">
            <div class="col-12 col-sm-3">
                <?php echo $__env->make('contacts.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="mt-3 widget filter-price">
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
            <div class="col-12 col-sm-9"><?php echo $page->content; ?></div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
    $(".oc_doitac").owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        loop: true,
        navText: ["<div class='nav-btn prev-slide'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 6
            },
            1000: {
                items: 8
            }
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var subject = $('#subject').val();
            var content = $('textarea#content_data').val();
            console.log(content);
            var check = false;
            if (name != '') {
                check = true;
                $('.error_name').html();
            } else {
                check = false;
                $('.error_name').html('Nhập tên của bạn')
            }
            if (email != '') {
                check = true;
                $('.error_email').html();
            } else {
                check = false;
                $('.error_email').html('Nhập email của bạn')
            }
            if (phone != '') {
                check = true;
                $('.error_phone').html();
            } else {
                check = false;
                $('.error_phone').html('Nhập số điện thoại của bạn')
            }
            if (subject != '') {
                check = true;
                $('.error_subject').html();
            } else {
                check = false;
                $('.error_subject').html('Nhập tiêu đề cần hỗ trợ')
            }
            if (content != '') {
                check = true;
                $('.error_content').html();
            } else {
                check = false;
                $('.error_content').html('Nhập nội dung cần hỗ trợ')
            }

            if (check) {
                var form = $('#sendContact');
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route("submitContact"), false); ?>',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        // show response from the php script.
                        $('#contactModal').modal('show');

                    }
                });
            }
        });

        $('.contactModal').on('click', function() {
            window.location.reload();
        })
        $('#contactModal').on('hide.bs.modal', function() {
            window.location.reload();
        })

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/pages/detail.blade.php ENDPATH**/ ?>