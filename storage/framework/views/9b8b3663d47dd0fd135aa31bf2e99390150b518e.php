<script src="<?php echo e(asset('asset/jquery-3.6.0.min.js'), false); ?>"></script>
<script src="https://kit.fontawesome.com/0677712a80.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script src="<?php echo e(asset('asset/owl.carousel.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('asset/jquery.countdown-2.0.4/jquery.countdown.js'), false); ?>"></script>
<script type="text/javascript">
    $(window).scroll(function() {
        if ($(this).scrollTop() > 35) {
            $('.header-menu').fadeIn(5000).addClass('fixed-top');

        } else {
            $('.header-menu').removeClass('fixed-top');

        }

    });
    $(document).ready(function() {
        jQuery(".btnmenu").click(function(event) {
            event.preventDefault();
            $('#col-left').animate({
                scrollLeft: '+=1500'
            }, 500);
            if (jQuery("#col-left").hasClass("open") == true) {
                jQuery("#col-left").removeClass("open");
                jQuery(".sub-menu").removeClass("display");
                jQuery(".sub-menu > li.openul").remove();
            } else {
                jQuery("#col-left").addClass("open");
            }
        });
        jQuery('#col-left .close-menu').click(function() {
            jQuery(".sub-menu").removeClass("display");
            jQuery('#col-left').removeClass('open');            
        });

        jQuery(".btnmenuRight").click(function(event) {
            event.preventDefault();
            $('#col-right').animate({
                scrollRight: '+=1500'
            }, 500);
            if (jQuery("#col-right").hasClass("open") == true) {
                jQuery("#col-right").removeClass("open");
                jQuery(".sub-menu").removeClass("display");
                jQuery(".sub-menu > li.openul").remove();
            } else {
                jQuery(".sub-menu").removeClass("display");
                jQuery("#col-right").addClass("open");
            }
        });
        jQuery('#col-right .close-menu').click(function() {
            jQuery('#col-right').removeClass('open');
        });

        jQuery("li.menu-item-has-children").on("click", function() {
            var id = "#" + jQuery(this).attr("id");
            var lul = id + " > ul"; 
            jQuery(lul).addClass("display");
            // if (jQuery(".menu-item-has-children>ul>li").hasClass("openul") == true) {
            //     // jQuery(".sub-menu > li.openul").remove();
            //     // jQuery(lul).removeClass("display");
            // } else {
            //     jQuery(lul).prepend('<li class="openul"><a class="q-close"><span> < Quay lại </span></a></li>');
            //     jQuery(lul).addClass("display");
            // }
        }); 

        jQuery("li.menu-item-has-children-lv2").on("click", function() {
           
            var id = "#" + jQuery(this).attr("id");
            var lul = id + ">div>ul.sub-menu"; 
            $(lul).addClass('display');
            // if (jQuery("li.menu-item-has-children-lv2>div>ul>li").hasClass("openul") == true) {
            //     jQuery(".sub-menu > li.openul").remove();
            //     jQuery(lul).removeClass("display");
            // } else {
            //     jQuery(lul).prepend('<li class="openul"><a class="q-close"><span> < Quay lại </span></a></li>');
            //     jQuery(lul).addClass("display");
            // }
        });
        

        $('#submit_dangkynhanemail').on('click', function() {
            var email = $('#email_dangky').val();
            if (email != null && email != '') {
                $('#email_dangky').removeClass('showError');
                var form = $('#sendContact');
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route("submitDangkyNhantin"), false); ?>',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        // show response from the php script.
                        $('.sendContactRes').html('Chúng tôi đã nhận được thông tin đăng ký của bạn');

                    }
                });
            } else {
                $('#email_dangky').attr('placeholder', 'Cần nhập vào email của bạn').addClass('showError');
            }
        });
        $('#fsubmit_dangkynhanemail').on('click', function() {
            var email = $('#femail_dangky').val();
            if (email != null && email != '') {
                $('#femail_dangky').removeClass('showError');
                var form = $('#fsendContact');
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route("fsubmitDangkyNhantin"), false); ?>',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        // show response from the php script.
                        $('.fsendContactRes').html('Chúng tôi đã nhận được thông tin đăng ký của bạn');

                    }
                });
            } else {
                $('#femail_dangky').attr('placeholder', 'Cần nhập vào email của bạn').addClass('showError');
            }
        });

        $(function() {
            var lastScrollTop = 0,
                delta = 5;
            $(window).scroll(function() {
                var nowScrollTop = $(this).scrollTop();
                if (Math.abs(lastScrollTop - nowScrollTop) >= delta) {
                    if (nowScrollTop > lastScrollTop) {
                        $('.devvn_toolbar').attr('style', 'display:block');
                        // $('#col-left').addClass('mt-0');
                        // $('#col-left').removeClass('mt-6');
                        // $('.header-menu').attr('style','opacity:0 !important');
                    } else {
                        // SCROLLING UP 
                        $('.devvn_toolbar').attr('style', 'display:none');
                        // $('#col-left').removeClass('mt-0'); 
                        // $('#col-left').addClass('mt-6');
                        // $('.header-menu').attr('style','opacity:1 !important');
                    }
                    lastScrollTop = nowScrollTop;
                }
            });
        });


        $('.addtocart__button').on('click', function() {
            var $quantity = 1;
            var $productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "quantity": $quantity,
                "productId": $productId,
            };
            $.ajax({
                url: "<?php echo e(route('addToCart'), false); ?>",
                method: "post",
                data: $data,
                success: function(res) {
                    // window.location.replace(
                    //     "<?php echo e(route('shoppingCartOrder'), false); ?>?ref=<?php echo e(url()->full(), false); ?>"
                    // );
                    $('#shoppingCartModal').modal('show');
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });
        });

        $('.addtolove__button').on('click', function() {
            var $quantity = 1;
            var $productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "quantity": $quantity,
                "productId": $productId,
            };
            $.ajax({
                url: "<?php echo e(route('addToLove'), false); ?>",
                method: "post",
                data: $data,
                success: function(res) {
                    // window.location.replace(
                    //     "<?php echo e(route('shoppingCartOrder'), false); ?>?ref=<?php echo e(url()->full(), false); ?>"
                    // );
                    $('#loveModal').modal('show');
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });
        });
        $('.addtocompare__button').on('click', function() {
            var $quantity = 1;
            var $productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "quantity": $quantity,
                "productId": $productId,
            };
            $.ajax({
                url: "<?php echo e(route('addToCompare'), false); ?>",
                method: "post",
                data: $data,
                success: function(res) {
                    // window.location.replace(
                    //     "<?php echo e(route('shoppingCartOrder'), false); ?>?ref=<?php echo e(url()->full(), false); ?>"
                    // );
                    $('#compareModal').modal('show');
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });
        });

        $('.quickview').on('click', function() {
            $ptitle = $(this).attr('data-product-title');
            $pimage = $(this).attr('data-product-image');
            $otherImage = $(this).attr('data-product-other-image');
            $pbaseprice = $(this).attr('data-product-base-price');
            $psaleprice = $(this).attr('data-product-sale-price');
            $pshortdesc = $(this).attr('data-product-short-description');
            $pdetail = $(this).attr('data-product-detail');
            $category = $(this).attr('data-product-category');
            $rate = $(this).attr('data-product-rate');
            $('.qv-product-title').html('<h3 style="font-size: 18px;margin: 0;font-weight: 700;">' + $ptitle + '</h3>');
            $('.qv-product-category').html('<p class="mb-0 color-gray">' + $category + '</p>');
         
            // $('.qv-product-image').html('<img src="' + $pimage + '" class="w-100">');
            $('.qv-product-other-image').html($otherImage);
            if ($pbaseprice != '0') {
                if ($psaleprice != '0') {
                    $('.qv-product-price').html('<p class="mb-0 product-base-price text-decoration-line-through">' + $pbaseprice + '<small>đ</small></p>');
                    $('.qv-product-saleprice').html('<p class="mb-0" style="color: #ea3d01;font-weight: bold;">' + $psaleprice + '<small>đ</small></p>');
                } else {
                    $('.qv-product-price').html('<p class="mb-0" style="color: #ea3d01;font-weight: bold;">' + $pbaseprice + '<small>đ</small></p>');
                }
            } else {
                $('.qv-product-price').html('<p class="mb-0">Liên hệ</p>');
            }
            if ($psaleprice != '0') {
                $('.qv-product-price').html('<p class="mb-0 product-base-price text-decoration-line-through">' + $pbaseprice + '</p>');
                $('.qv-product-saleprice').html('<p class="mb-0" style="color: #ea3d01;font-weight: bold;">' + $psaleprice + '</p>');
            }
            $('.qv-product-short-description').html($pshortdesc);
            $('.qv-product-detail').html('<a href="' + $pdetail + '" class="button-orange">Chi tiết <i class="bi bi-arrow-right-circle-fill"></i></a>');

            $('#quickviewModal').modal('show');
        });
    });

    function fnSubmit() {
        $('#loginButton').click();
    }
    $(document).ready(function() {
        $('#loginButton').on('click', function() {
            var username = $('#username').val();
            var password = $('#password').val();

            $check = false;
            if (username == null) {
                $('.username_alert').html('<i class="text-danger">Nhập số điện thoại</i>');
            } else if (password == null) {
                $('.password_alert').html('<i class="text-danger">Nhập mật khẩu</i>');
            } else {
                $check = true;
            }
            if ($check) {
                var formData = {
                    "username": username,
                    "password": password,
                    "_token": "<?php echo e(csrf_token(), false); ?>",
                };
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route("login"), false); ?>',
                    data: formData,
                    success: function(data) {
                        window.location.reload();
                        // show response from the php script.
                        // $('#dang-ky-modal').modal('hide');
                        // $('#alertModal').modal('show');
                    },
                    error: function($data) {
                        log(data);
                    }
                });
            }
        });
        $('#btnRegister').on('click', function() {
            var username = $('#username').val();
            var password = $('#password').val();
            var email = $('#email').val(); 
            var fullname = $('#fullname').val();

            $check = false;
            if (fullname == null) {
                $('.fullname_alert').html('<i class="text-danger">Nhập họ tên của bạn</i>');
            } else if (username == null) {
                $('.username_alert').html('<i class="text-danger">Nhập tên truy cập</i>');
            } else if (password == null) {
                $('.password_alert').html('<i class="text-danger">Nhập mật khẩu</i>');
            } else if (email == null) {
                $('.email_alert').html('<i class="text-danger">Nhập email của bạn</i>');
            } 
            else {
                $check = true;
            }
            if ($check) {
                var formData = {
                    "username": username,
                    "password": password,
                    "email": email, 
                    "fullname": fullname,
                    "_token": "<?php echo e(csrf_token(), false); ?>",
                };
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route("register"), false); ?>',
                    data: formData,
                    success: function(data) { 
                        // show response from the php script.
                        // $('#dang-ky-modal').modal('hide');
                        // $('#alertModal').modal('show');
                        console.log(data.status)
                        if (data.status == 'e') {
                            $('#accountModal').modal('hide');
                            $('#alertContent').html(data.msg);
                            $('#alertModal').modal('show');
                        }
                        else if(data.status == 'ok') {
                            window.location.reload();
                        }
                    },

                });
            }
        });
    });
</script><?php /**PATH C:\wamp64\www\smartaudio\resources\views/master/script.blade.php ENDPATH**/ ?>