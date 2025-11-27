
@props(['title' => 'Page Title'])
<section class="page-header">
    <div class="container">
        <img src="{{ asset('img/page_header_bg.webp') }}" alt="">
        <div class="content">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
            <h1>{{ $title }}</h1>
        </div>

    </div>
</section>
