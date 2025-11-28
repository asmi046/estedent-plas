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


    <section class="services" id="services">
        <div class="container">
            <h2>Услуги стоматологии “ЭстеДент”</h2>
            <div class="services_wrap">
                <a href="#" class="services_card">
                    <img src="{{ asset('tmp_data/services/serv_1.webp') }}" alt="Имплантация">
                    <h3>Имплантация</h3>
                </a>
                <a href="#" class="services_card">
                    <img src="{{ asset('tmp_data/services/serv_2.webp') }}" alt="Протезирование">
                    <h3>Протезирование</h3>
                </a>
                <a href="#" class="services_card">
                    <img src="{{ asset('tmp_data/services/serv_3.webp') }}" alt="Коронки">
                    <h3>Коронки</h3>
                </a>
                <a href="#" class="services_card">
                    <img src="{{ asset('tmp_data/services/serv_4.webp') }}" alt="Лечение">
                    <h3>Лечение</h3>
                </a>
                <a href="#" class="services_card">
                    <img src="{{ asset('tmp_data/services/serv_5.webp') }}" alt="Отбеливание">
                    <h3>Отбеливание</h3>
                </a>
                <a href="#" class="services_card">
                    <img src="{{ asset('tmp_data/services/serv_6.webp') }}" alt="Хирургия">
                    <h3>Хирургия</h3>
                </a>
            </div>
        </div>
    </section>


    <x-main.clinic></x-main.clinic>

    <x-main.specialists></x-main.specialists>

    <x-main.cert></x-main.cert>



@endsection

