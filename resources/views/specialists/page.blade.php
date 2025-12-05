@extends('layouts.all')

@section('main')
    <section class="personal_page_header">
        <div class="container">
            <x-breadcrumbs.main :title="$specialist->fio"></x-breadcrumbs.main>


            <div class="personal_page_main_content">
                <div class="personal_page_main_content_left">
                    <img src="{{ Storage::url($specialist->photo) }}" alt="{{ $specialist->title }}">
                </div>
                <div class="personal_page_main_content_right">
                    <h1 class="personal_page_title">{{ $specialist->fio }}</h1>
                    <p class="personal_page_position">{{ $specialist->position }}</p>
                    <div class="personal_page_description">
                        {!! $specialist->description !!}
                    </div>

                    @if ($specialist->certificates)
                        <div class="personal_page_certificates">
                            <h2>Сертификаты</h2>
                            <div class="personal_page_certificates_items">
                                @foreach ($specialist->certificates as $certificate)
                                    <a href="{{ Storage::url($certificate) }}" class="personal_page_certificates_item" data-fancybox="gallery">
                                        <img src="{{ Storage::url($certificate) }}" alt="Сертификат {{ $specialist->title }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>


@endsection
