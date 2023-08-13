@if (getSlide('partner') != null)
<div class="owl-carousel oc_doitac my-3">
    @foreach (getSlide('partner') as $slide)
    <div class="partner-items border">
        <img src="{{ Storage::url($slide->images) }}" alt="{{ $slide->title }}" class="w-100">
    </div>
    @endforeach
</div>
@endif