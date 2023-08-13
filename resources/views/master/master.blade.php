<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" />
    <link rel="icon" href="{{ asset('asset/image/favicon.png') }}" sizes="any" type="image/svg+xml">
    {!! SEO::generate() !!}

    <link rel="stylesheet" href="{{ asset('asset/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    @yield('style')
    {!! @config('end_head') !!}
    <link rel="stylesheet" href="{{ asset('asset/owl.carousel.css') }}">
</head>

<body>
   

    <div id="page" class="{{ request()->route()->getName() }}">
        @include('master.header')
        @include('master.navigation')
        @include('master.right-navigation')
        <div id="content">
            @yield('content')
        </div>
      
    </div>

    @include('master.footer')
    @include('master.script')
    @yield('javascript')
    {!! @config('end_body') !!}
</body>

</html>