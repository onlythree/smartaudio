<div class="intro-slider">
    <div class="text-center p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">

            <div class="carousel-indicators ">
                <div class="text-center">
                    @if (getSlide('after-feature-product') != null)
                    @foreach (getSlide('after-feature-product') as $slide)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index ==0) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}"></button>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="carousel-inner">
                @if (getSlide('after-feature-product') != null)
                @foreach (getSlide('after-feature-product') as $slide)
                <div class="carousel-item @if ($loop->index == 0) active @endif">

                    <div class="col-12 position-relative">
                        <div class="image">
                            <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                        </div>
                        <div class="top-0 position-absolute w-100 mt-4 mt-xxl-5">

                            <div class="title text-center text-white">
                                {!! $slide->title !!}
                            </div>
                            <div class="sub-title text-white text-center">
                                {!! $slide->sub_title !!}
                            </div>
                            <div class="readmore text-center">
                                <a href="{{ $slide->slide_link }}" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle"></i></span> </a>
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
                @endif
            </div>
            
        </div>
    </div>
</div>