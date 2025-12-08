@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Цены на наши услуги"></x-headers.page-header>

    <section class="price_nav_section">
        <div class="container">
            <ul class="price_nav_list">
                @foreach ($prices->keys() as $key)
                    <li><a href="#ps_{{ Str::slug($key) }}">{{ $key }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="price_section">
        <div class="container">
            <div class="price_section_items">
                @foreach ($prices as $section => $items)
                    <details id="ps_{{ Str::slug($section) }}" class="price_section_item" open>
                        <summary>{{ $section }}</summary>
                        <div class="response">
                            @foreach ($items as $item)
                                <div class="price_item">
                                    <div class="service"><span class="code">{{ $item->service_code }}</span> <span class="name">{{ $item->service_name }}</span></div>
                                    <div class="dots"></div>
                                    <div class="price">{{ $item->price }} руб.</div>
                                </div>
                            @endforeach
                        </div>
                    </details>
                @endforeach
            </div>

        </div>
    </section>

    <x-main.cta-phone></x-main.cta-phone>
    <x-main.specialists></x-main.specialists>

@endsection
