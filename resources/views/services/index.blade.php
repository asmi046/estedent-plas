@extends('layouts.all')

@php
    $title = "Услуги нашей клиники";
@endphp


@section('main')
    <x-headers.page-header title="Услуги нашей клиники"></x-headers.page-header>

    <section class="services_in_page">
        <div class="container">
            <div class="services_wrap">
                @foreach ($services as $item)
                    <x-cards.service :item="$item" />
                @endforeach
            </div>
        </div>
    </section>



    <x-main.cta-phone></x-main.cta-phone>
    <x-main.clinic></x-main.clinic>
    <x-main.specialists></x-main.specialists>
    <x-main.cert></x-main.cert>
@endsection

