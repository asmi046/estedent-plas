@extends('layouts.all')

@php
    $title = "Акции и специальные предложения";
@endphp


@section('main')
    <x-headers.page-header title="Акции и специальные предложения"></x-headers.page-header>

    <x-main.cta-phone></x-main.cta-phone>
    <x-main.clinic></x-main.clinic>
    <x-main.specialists></x-main.specialists>
    <x-main.cert></x-main.cert>
@endsection

