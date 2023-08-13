<div class="intro-slider">
    <div class="text-center p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">

            <div class="carousel-indicators ">
                <div class="container row">
                    <div class="col-3 d-none d-sm-block"></div>
                    <div class="col-12 col-sm-9 text-start">
                        @if (getSlide('top-slideshow') != null)
                        @foreach (getSlide('top-slideshow') as $slide)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index ==0) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}">
						<div class="d-sm-none d-block" style="width: 30px;
    height: 30px;
    margin: 5px;">
						<div class="mob-image-navigator" style="background:url('{{ Storage::url($slide->images) }}');
    height: 30px;
    width: 30px;
    background-position: center;
    background-size: cover;
    border: 1px solid #CCC;"></div>
						</div>
						</button>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="carousel-inner">
                @if (getSlide('top-slideshow') != null)
                @foreach (getSlide('top-slideshow') as $slide)
                <div class="carousel-item @if ($loop->index == 0) active @endif">

                    <div class="col-12 position-relative">
                        <div class="d-block d-sm-none" style="background:url({{ Storage::url($slide->images) }});min-height: 450px;background-size: cover;background-position: 54%;"></div>
                        <div class="image d-none d-sm-block">
                            <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                        </div>
                        <div class="position-absolute top-0 container-fluid margin-auto">
                            <div class="container" style="margin-top: 100px;">
                                <div class="row">
                                    <div class="col-12 col-sm-3 d-none d-sm-block"></div>
                                    <div class="col-12 col-sm-9">
                                        <div class="sub-title ms-3 ms-xxl-0">
                                            {!! $slide->sub_title !!}
                                        </div>
                                        <div class="title ms-3 ms-xxl-0">
                                            {!! $slide->title !!}
                                        </div>
                                        <div class="readmore ms-3 ms-xxl-0">
                                            <a href="{{ $slide->slide_link }}" class="button">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon-bi" aria-hidden="true"><i class="bi bi-chevron-left" style="color: #000;font-size: 22px;"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon-bi" aria-hidden="true"><i class="bi bi-chevron-right" style="color: #000;font-size: 22px;"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>