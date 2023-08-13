<div id="col-right" style="background:rgb(0 0 0 / 72%);width: 100%;z-index: 9999;min-height: 100vh;position: fixed;display:none;top:0;overflow: scroll;max-height: 100%;">
    <div class="col-right-content" style="min-height: 100vh;width: 80%;background-color: #FFF;float: right;">
        <div class="close-menu sticky-top">
            <span><i class="bi bi-x-lg"></i> Đóng</span>
        </div>
        @if(!empty(getRootMenu('main-menu')))
        <ul class="top-menu d-flex flex-column px-4 py-2 list-style-none mb-0" id="menu-mobile">
            <li class="parent_menu py-1">
                <a href="{{ route('home') }}" class="text-decoration-none text-black" style="text-transform: uppercase;">Trang chủ</a>
            </li>
            @if(!empty(getRootMenu('main-menu')))
            @foreach(getRootMenu('main-menu') as $menu)
            <li class="parent_menu py-2 @if(!empty(getRootMenu('main-menu'))) menu-item-has-children @endif" id="menu-item-{{ $menu->id }}">
                <div class="d-flex justify-content-between align-items-center"> 
                    <a href="{{ $menu->link }}" class="text-decoration-none text-black w80">{{ $menu->title }}</a>
                    @if(count(getChildMenu($menu->id))>0)
                    <div class="child-items w20 text-end">
                    <i class="bi bi-caret-down"></i>
                    </div>
                    @else
                    <div class="child-items w80 text-end">
                        <i class="bi bi-caret-down" style="color:#FFF"></i>
                    </div>
                    @endif
                </div>
                @if(!empty(getChildMenu($menu->id)))
                <ul class="sub-menu px-4 py-2 list-style-none">
                    @foreach(getChildMenu($menu->id) as $cmenu)
                    <li id="menu-item-1937" class="menu-item menu-item-type-custom">
                        <a class="text-decoration-none text-black" href="{{ $cmenu->link }}">{{ $cmenu->title }}</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
            @endif

            @if(!empty(getRootMenu('top-bar')))
            @foreach(getRootMenu('top-bar') as $menu)
            @if($menu->link != '/')
            <li class="parent_menu py-2" id="menu-item-{{ $menu->id }}">
                <a href="{{ $menu->link }}" class="text-decoration-none text-black" style="">{{ $menu->title }}</a>
            </li>
            @endif
            @endforeach
            @endif
        </ul>
        @endif
    </div>
</div>