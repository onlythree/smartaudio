@php
$lang = config('app.locale');
$agent = new Jenssegers\Agent\Agent();
@endphp
@extends('master.master')
@section('content')

@if ($categories != null)
@foreach ($categories as $cate)
@if (count($cate->products) > 0)
<div class=" my-3 ">
    <div class="container border border-bottom-0 bg-white @if ($agent->isDesktop()) rounded-top @endif">
        <h2 class="fs-4 d-flex justify-content-between mb-0 py-3 align-items-center">
            {{ $cate->title }}<span class="fs-6">
                <a href="{{ route('detail', $cate->slug) }}" class="text-decoration-none">Xem tất
                    cả</a></span>
        </h2>
    </div>
    <div class="container border border-top-0 bg-white @if ($agent->isDesktop()) rounded-bottom @endif">
        <div class="row mb-4">
            @foreach ($cate->products as $prod)
            @include('products.items',['categories'=>getCateById($prod->cate_id),'prod'=>$prod])
            @endforeach
        </div>
    </div>
</div>
@endif
@endforeach
@endif

@endsection
@section('style')
@endsection
@section('javascript')
@endsection