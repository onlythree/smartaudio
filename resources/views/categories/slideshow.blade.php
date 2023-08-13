@php
$lang = config('app.locale'); 
@endphp
<div class="text-center p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
       
        <div class="carousel-inner">
            @if (getSlide($lang,'product') != null)
                @foreach (getSlide($lang,'product') as $slide)
                    <div class="carousel-item @if ($loop->index == 0) active @endif">

                        <a href="{{ $slide->slide_link }}">
                            <div class="col-12">
                                <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                            </div>
                        </a>

                    </div>
                @endforeach
            @endif
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>