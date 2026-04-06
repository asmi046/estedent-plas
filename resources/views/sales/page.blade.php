@extends('layouts.all')

@section('main')
    <section class="sales_page">
        <div class="container">
            <x-breadcrumbs.main :title="$sale->title"></x-breadcrumbs.main>
            <div class="sales_page_wrap">
                <div class="img_part">
                    <img src="{{ Storage::url($sale->img) }}" alt="{{ $sale->title }}">
                </div>
                <div class="content_part text_styles">
                    <h1>{{ $sale->title }}</h1>
                    <p>{!! $sale->description !!}</p>
                </div>
            </div>
        </div>
    </section>

    </section>

    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
