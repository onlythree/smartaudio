<div class="border rounded-1 p-3">
    <div class="" style="padding: 0px 0px 15px 0px;border-style: solid;border-width: 0px 0px 3px 0px;border-color: #ea3d01;">
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
        <div class="form-group mb-2 col-12">
            <b>Tên của bạn</b>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên của bạn" />
            <div class="error_name text-danger"></div>
        </div>
        <div class="form-group mb-2 col-12">
            <b>Email</b>
            <input type="text" id="email" name="email" class="form-control" placeholder="Nhập email" />
            <div class="error_email text-danger"></div>
        </div>
        <div class="form-group mb-2 col-12">
            <b>Số điện thoại</b>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" />
            <div class="error_phone text-danger"></div>
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
</div>

<?php $__env->startSection('javascript'); ?>

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
<?php $__env->stopSection(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/contacts/contact-form.blade.php ENDPATH**/ ?>