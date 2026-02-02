@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <x-services.text :service="$service"></x-services.text>

    <x-services.title-description-card-input title="Виды хирургических манипуляций" key="Виды хирургических манипуляций"
        :sections="$service->sections"></x-services.title-description-card-input>

    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
