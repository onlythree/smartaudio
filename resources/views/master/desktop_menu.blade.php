@if(!empty(getmenu()))
<div class="menu">
    <ul class="top-menu d-flex py-2 m-0 p-0" id="top-menu">
        
        @foreach (getmenu() as $menu)
        <li class="@if($menu->title == 'Sản phẩm')
                products-menu
                @endif">
            <a href="{{ $menu->link }}" class="text-decoration-none p-2 text-uppercase  ">{{ $menu->title }}
                @if($menu->title == 'Sản phẩm')
                <i class="bi bi-caret-down-fill"></i>
                @endif</a>
            @if($menu->title == 'Sản phẩm')
            <div class="container-fluid mega_menu">
                <div class="container mega_menu_cate_list d-flex flex-wrap position-relative px-0">
                    @foreach(getRootCate() as $cate)
                    @php
                    $childCate = getChildeCate($cate->id);
                    @endphp
                    <div class="px-4">
                        <div class="cate-title">
                            <a href="{{ route('detail',$cate->slug) }}" class="text-black text-decoration-none" rel="noopener noreferrer">
                                {{ $cate->title }} <i class="bi bi-caret-down"></i>
                            </a>
                        </div>
                        @if(!empty($childCate))
                        <ul class="cate-child">
                            @foreach($childCate as $ccate)
                            <li> <a href="{{ route('detail-lv2',[$cate->slug,$ccate->slug]) }}" class="text-black text-decoration-none" rel="noopener noreferrer">{{ $ccate->title }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    @endforeach
                    <div class="ebord"></div>
                </div>
            </div>
            @endif
        </li>
        @endforeach
    </ul>
</div>

@endif