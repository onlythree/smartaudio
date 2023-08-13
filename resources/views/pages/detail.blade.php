@extends('master.master')
@section('content')
<div class="breadcrumb" style="margin-bottom:0;">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('detail',$page->slug) }}" class="text-black text-decoration-none">{{ $page->title }}</a></div>
        </div>
    </div>
</div>

@if($page->slug =='gioi-thieu')
<div class="full-page" style="margin-top:30px;">
    {!! $page->content !!}
    <div class="container">
        <div class="top-brand">
            <h2 class="text-center mb-5 mt-5">Đối tác & Các khách hàng</h2>
            <div class="partnet-slide">
                @include('homepage.partner-slide')
            </div>
        </div>
    </div>
</div>
@elseif($page->slug =='lien-he')
<div class="full-page">
    <div class="contact-map">
        {!! config('lien-he-ban-do') !!}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="contact_info">
                    {!! $page->content !!}
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
                    @csrf
                    <div class="form-group mb-2 col-12 ">
                        <b>Bạn cần hỗ trợ?</b>
                        <select id="reason" name="reason" class="form-control">
                            <option value="Báo giá sản phẩm" @if(request()->get('reason') != null) @if(request()->get('reason') == "Báo giá sản phẩm" ) selected @endif @endif>Báo giá sản phẩm</option>
                            <option value="Tư vấn giải pháp" @if(request()->get('reason') != null) @if(request()->get('reason') == "Tư vấn giải pháp" ) selected @endif @endif>Tư vấn giải pháp</option>
                            <option value="Tư vấn khác" @if(request()->get('reason') != null) @if(request()->get('reason') == "Tư vấn khác" ) selected @endif @endif>Tư vấn khác</option>
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
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Nhập tiêu đề" @if(request()->get('reason') != null) @if(request()->get('reason') == "Báo giá sản phẩm" ) value="Báo giá sản phẩm" @endif @endif />
                        <div class="error_subject text-danger"></div>
                    </div>
                    <div class="form-group mb-2 col-12">
                        <b>Nội dung</b>
                        <textarea id="content_data" name="content" class="form-control" placeholder="Nhập nội dung liên hệ">@if(request()->get('reason') != null) @if(request()->get('reason') == "Báo giá sản phẩm" )@if(request()->get('prod') != null) Tôi cần báo giá cho sản phẩm "{{ request()->get('prod') }}" @endif @endif @endif</textarea>
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
                @include('homepage.partner-slide')
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
@else
@if($page->display_type == 'fullpage')
<div class="container page">
    {!! $page->content !!}
</div>
@elseif($page->display_type == 'sidebar-right')
<div style="padding-top:30px;">
    <div class="container page">
        <div class="row">
            <div class="col-12 col-sm-9">{!! $page->content !!}</div>
            <div class="col-12 col-sm-3">
                @include('contacts.contact-form')

                <div class="mt-3 widget filter-price">
                    <h2 class="widget-title mb-0">Tin mới</h2>
                    @if(count(getLastestNews())>0)
                    <ul class="list-style-none p-0 mb-0">
                        @foreach(getLastestNews() as $lnews)
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
                                        <img src="{{  $lnewsImages }}" alt="{{ $lnews->title }}" class="w-100 border" />
                                    </div>
                                </div>
                                <div class="lnews-title col-8 col-sm-8">
                                    <div class="p-1">
                                        <a href="{{ route('detail',$lnews->slug) }}" class="text-decoration-none text-gray">
                                            {{ $lnews->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($page->display_type == 'sidebar-left')
<div style="padding-top:30px;">
    <div class="container page">
        <div class="row">
            <div class="col-12 col-sm-3">
                @include('contacts.contact-form')
                <div class="mt-3 widget filter-price">
                    <h2 class="widget-title mb-0">Tin mới</h2>
                    @if(count(getLastestNews())>0)
                    <ul class="list-style-none p-0 mb-0">
                        @foreach(getLastestNews() as $lnews)
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
                                        <img src="{{  $lnewsImages }}" alt="{{ $lnews->title }}" class="w-100 border" />
                                    </div>
                                </div>
                                <div class="lnews-title col-8 col-sm-8">
                                    <div class="p-1">
                                        <a href="{{ route('detail',$lnews->slug) }}" class="text-decoration-none text-gray">
                                            {{ $lnews->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <div class="col-12 col-sm-9">{!! $page->content !!}</div>
        </div>
    </div>
</div>
@endif

@endif
@endsection

@section('style')
@endsection
@section('javascript')
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
                    url: '{{ route("submitContact") }}',
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
@endsection