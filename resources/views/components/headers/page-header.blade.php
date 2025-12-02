
@props([
    'title' => 'Page Title',
    'image' => asset('img/page_header_bg.webp'),
    'button' => true
])

<section class="page-header">
    <div class="container">
        <img src="{{ $image }}" alt="">
        <div class="content">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
            <h1>{{ $title }}</h1>
            @if ($button)
                <br>
                <a href="#consultation" class="button">Записаться</a>
            @endif

        </div>

    </div>
</section>
