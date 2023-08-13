@if(!empty($customer_reviews))
<div class="owl-carousel" id="brand_slide">
    @foreach ($brand_slide as $br)
    <div class="items">
        <div class="brand-item">
            <img src="{{ storage::url($br->images) }}" alt="{{ $br->title }}" >
        </div>
    </div>
    @endforeach
</div>
@endif