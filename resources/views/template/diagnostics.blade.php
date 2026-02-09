@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <x-services.text :service="$service"></x-services.text>

    <x-services.number-card-input title="Томографическое исследование на аппарате X-Radius Trio Plus позволяет получить:"
        key="Изображения с томографа" :sections="$service->sections" countclass="incard4"></x-services.number-card-input>

    <x-services.title-description-card-input title="Преимущества томографа X-Radius для наших пациентов"
        key="Преимущества томографа X-Radius" :sections="$service->sections"></x-services.title-description-card-input>
    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
