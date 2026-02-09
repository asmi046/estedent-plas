@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <x-services.text :service="$service"></x-services.text>

    <x-services.number-card-input title="Почему выбирают нас" key="Почему выбирают нас" :sections="$service->sections"
        countclass="incard4"></x-services.number-card-input>
    <x-services.title-description-card-input title="Виды имплантации" key="Виды имплантации"
        :sections="$service->sections"></x-services.title-description-card-input>
    <x-services.image-description-card-input title="Какие системы имплантов мы используем" key="Системы имплантов"
        :sections="$service->sections" countclass="incard2"></x-services.image-description-card-input>


    <x-services.steps-input title="Как проходит процедура" key="Как проходит процедура"
        :sections="$service->sections"></x-services.steps-input>


    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
