<!Doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="{!! $data['description'] !!}">
    <meta name="keywords" content="{!! $data['keywords'] !!}">
    <link rel="canonical" href="{{ $data['canonical'] }}">
    <link rel="icon" href="{{ asset('images/content/favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" async>
    @if (isset($data['title']))
    <title>{!! $data['title'] !!}</title>
    @endif
</head>
<body>
    <div class="app" id="app">
        @include('layouts/header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts/footer')
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
