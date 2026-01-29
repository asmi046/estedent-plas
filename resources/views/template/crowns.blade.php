@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <x-services.text :service="$service"></x-services.text>

    <x-main.cta-phone></x-main.cta-phone>

    <x-main.specialists></x-main.specialists>

    <x-main.clinic></x-main.clinic>
@endsection
