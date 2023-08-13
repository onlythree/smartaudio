@php
$agent = new Jenssegers\Agent\Agent();
@endphp
@extends('master.master')
@section('content')
<div class="section-top">
    <div class="slideshows">
        @include('homepage.slideshow')
    </div>
</div>

@include('homepage.desktop.index')

<div class="modal" tabindex="-1" id="home-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-button" style="position: absolute;right: 10px;top: 10px;z-index: 999;" data-bs-dismiss="modal">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-content-area">
                    <div class="row">
                        <div class="col-12 col-sm-6 d-none d-sm-block">
                            {!! config('popup_image') !!}
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="popup">
                                {!! config('popup_text') !!}
                                <form method="post" id="sendContact">
                                    @csrf
                                    <div class="d-flex flex-column">
                                        <div class="">
                                            <input type="text" id="email_dangky" name="email_dangky" class="form-control rounded-5" placeholder="Nhập email của bạn" style="padding: 0 20px;height: 50px;margin-bottom: 20px;">
                                        </div>
                                        <div class="">
                                            <button id="submit_dangkynhanemail" type="button" class="button rounded-5 m-0">Đăng ký</button>
                                        </div>
                                        <div class="sendContactRes" style="max-width: 230px;margin-top: 20px;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('asset/owl.carousel.css') }}">
@endsection
@section('javascript')
<script src="{{ asset('asset/owl.carousel.min.js') }}"></script>
<script src="{{ asset('asset/jquery.countdown-2.0.4/jquery.countdown.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // trang chủ popup
        setTimeout(
            function() {
                //do something special
                $('#home-popup').show();
            }, 1000);
        $('.close-button').on('click', function() {
            $('#home-popup').hide();
        });
        $('#clock').countdown('{{ \Carbon\Carbon::now()->addDays(1)->format("Y/m/d") }}', function(event) {
            var $this = $(this).html(event.strftime('' +
                // '<span>%w</span> weeks ' +
                // '<span>%d</span> days ' +
                '<div class="bclock"><span>%H</span>H</div>' +
                '<div class="bclock"><span>%M</span>M</div>' +
                '<div class="bclock"><span>%S</span>S</div>'));
        });
        $(".oc_dealtoday").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            navText: ["<div class='nav-btn prev-slide'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        $(".oc_categories").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            navText: ["<div class='nav-btn prev-slide'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                },
                1400: {
                    items: 7
                }
            }
        });
        $(".oc_bestseller").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            navText: ["<div class='nav-btn prev-slide' style='border: 1px solid #d4d4d4;border-radius: 100px;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide' style='border: 1px solid #d4d4d4;border-radius: 100px;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
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
        
    });
</script>
@endsection