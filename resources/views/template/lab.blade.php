@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <x-services.text :service="$service"></x-services.text>

    <x-services.title-description-card-input title="Преимущества для наших клиентов" key="Преимущества нашей лаборатории"
        :sections="$service->sections"></x-services.title-description-card-input>

    <x-services.slide-galery title="Оснащение нашей лаборатории" key="Фото нашей лаборатории"
        text="Работаем только с качественными, проверенными временем материалами, на современном оборудовании используя компьютерное 3D моделирование и CAD/CAM оборудование(фрезерный станок)"
        :sections="$service->sections" :index="1"></x-services.slide-galery>
    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
