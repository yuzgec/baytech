<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
    @include('frontend.layout.css')
</head>
<body>
    @include('frontend.layout.header')
    <main>
        @yield('content')
    </main>
    @include('frontend.layout.footer')
    @include('frontend.layout.js')
    @yield('customJS')
</body>
</html>
