@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <x-services.text :service="$service"></x-services.text>

    <x-services.title-description-card-input title="Показания к установке коронок" key="Показания к установке коронок"
        :sections="$service->sections"></x-services.title-description-card-input>

    <x-services.number-card-input title="Преимущества современных коронок" key="Преимущества современных коронок"
        :sections="$service->sections"></x-services.number-card-input>

    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
