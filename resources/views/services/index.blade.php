@extends('layouts.all')

@php
    $title = "Услуги нашей клиники";
@endphp


@section('main')
    <x-headers.page-header title="Услуги нашей клиники"></x-headers.page-header>

    <x-main.cta-phone></x-main.cta-phone>
    <x-main.clinic></x-main.clinic>
    <x-main.specialists></x-main.specialists>
    <x-main.cert></x-main.cert>
@endsection

