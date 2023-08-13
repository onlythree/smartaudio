 
<div id="carousel_{{ $newsCate->slug }}" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($news as $ne)
        <div class="carousel-item active">
            <a href="{{ route('news-details',[$newsCate->slug,$ne->slug]) }}" alt="{{ $ne->title }}" class="text-decoration-none">
            <img src="{{ Storage::url($ne->images) }}" class="d-block w-100" alt="{{ $ne->title }}" >
                <h3 class="fs-6 p-2">{{ $ne->title }}</h3>
            </a>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_{{ $newsCate->slug }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel_{{ $newsCate->slug }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
