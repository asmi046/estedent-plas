@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <x-main.banner></x-main.banner>

    <x-main.advantages></x-main.advantages>

    <x-main.cta-phone></x-main.cta-phone>


    <x-main.services></x-main.services>


    <x-main.clinic></x-main.clinic>

    <x-main.specialists></x-main.specialists>

    <x-main.cert></x-main.cert>


@endsection

