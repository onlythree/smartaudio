<div id="col-left" style="background:rgb(0 0 0 / 72%);width: 100%;z-index: 9999;min-height: 100vh;position: fixed;display:none;top:0;overflow: scroll;max-height: 100%;">
    <div class="col-left-content" style="min-height: 100vh;width: 80%;background-color: #FFF;">
        <div class="close-menu sticky-top">
            <span>Đóng <i class="bi bi-x-lg"></i></span>
        </div>
        @if(!empty(getRootMenu('main-menu')))
        <ul class="top-menu d-flex flex-column px-4 py-2 list-style-none mb-0" id="menu-mobile">
            <li class="parent_menu py-1">
                <a href="{{ route('home') }}" class="text-decoration-none text-black" style="text-transform: uppercase;">Trang chủ</a>
            </li>
            @if(!empty(getRootCate()))
            @foreach(getRootCate() as $cate)
            <li class="parent_menu py-2 @if(!empty(getRootCate())) menu-item-has-children @endif" id="menu-item-{{ $cate->id }}">
                <div class="d-flex justify-content-between align-items-center">
                    <a  href="{{ route('detail',[$cate->slug]) }}" class="text-decoration-none text-black w80">{{ $cate->title }}</a>
                    @if(!empty(getRootCate()))
                    <div class="child-items w20 text-end">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                    @endif
                </div>
                @if(!empty(getChildeCate($cate->id)))
                <ul class="sub-menu px-4 py-2 list-style-none">
                    @foreach(getChildeCate($cate->id) as $ccate)
                    <li id="menu-item-{{ $ccate->id }}" class="menu-item menu-item-type-custom @if(!empty(getChildeCate($cate->id))) menu-item-has-children-lv2 @endif">
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="text-decoration-none text-black" href="{{ route('detail-lv2',[$cate->slug,$ccate->slug]) }}">{{ $ccate->title }}</a>

                            @if(count(getChildeCate($ccate->id)))
                            <div class="child-items w20 text-end">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            @endif
                            @if(!empty(getChildeCate($ccate->id)))
                            <ul class="sub-menu px-4 py-2 list-style-none">
                                @foreach(getChildeCate($ccate->id) as $cccate)
                                <li  id="menu-item-{{ $ccate->id }}" class="menu-item menu-item-type-custom">
                                    <a class="text-decoration-none text-black" href="{{ route('detail-lv3',[$cate->slug,$ccate->slug,$cccate->slug]) }}">{{ $cccate->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
            @endif
        </ul>
        @endif
    </div>
</div>