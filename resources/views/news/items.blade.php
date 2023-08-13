<div class="latest-post-item col-3">
    <a href="{{ route('news-details',$ne->slug) }}" class="text-decoration-none text-black text-center">
        <div class="post-images-wrapper">
            <img class="replace-2x img-responsive w-100" src="{{ Storage::url($ne->images) }}" alt="{{ $ne->title }}" title="{{ $ne->title }}">
        </div>
        <div class="latest-post-title mt-1">
            {{ $ne->title }}
        </div>
    </a>
</div>