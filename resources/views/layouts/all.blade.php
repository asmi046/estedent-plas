<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    <script src="{{ asset('bvi/js/bvi.js') }}"></script>
    <link href="{{ asset('bvi/css/bvi.min.css') }}" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])

    <script>
        window.Laravel = {
            assetUrl: '{{ asset('') }}',
            storageUrl: '{{ Storage::url('') }}'
        };
    </script>
</head>
<body>
    @include("allicon")
    <main id="main">
        <x-header-all></x-header-all>
        @yield('main')
        <x-footer-all></x-footer-all>
    </main>

    <div class="modal_win" id="global_app">
        <modal-window rout="/send_consult" redirect="/thencs" hesh="consultation" title="Помощь специалиста" subtitle="Мы свяжемся с Вами в течении 15 минут"></modal-window>


    </div>
</body>
</html>
