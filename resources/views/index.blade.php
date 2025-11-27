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

    <x-main.cta></x-main.cta>


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

    <section class="personal" id="personal">
        <div class="container">
            <h2>Специалисты клиники</h2>
            <swiper-container class="main-personal-swiper" init="false">
                <swiper-slide>
                    <div class="personal_card">
                        <div class="personal_card_img">
                            <img src="{{ asset('tmp_data/doctors/d_1.webp') }}" alt="Тулаев тимур">
                        </div>
                        <div class="personal_card_text">
                            <h3>Тулаев тимур</h3>
                            <p>Зубной техник</p>
                            <a href="#" class="button">Подробнее</a>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="personal_card">
                        <div class="personal_card_img">
                            <img src="{{ asset('tmp_data/doctors/d_2.webp') }}" alt="Задорожная Наталья Викторовна">
                        </div>
                        <div class="personal_card_text">
                            <h3>Задорожная Наталья Викторовна</h3>
                            <p>Врачь-стом а толог терапевт</p>
                            <a href="#" class="button">Подробнее</a>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="personal_card">
                        <div class="personal_card_img">
                            <img src="{{ asset('tmp_data/doctors/d_3.webp') }}" alt="Бокарева анастасия Федоровна">
                        </div>
                        <div class="personal_card_text">
                            <h3>Бокарева анастасия Федоровна</h3>
                            <p>Врачь-стоматолог общей практики</p>
                            <a href="#" class="button">Подробнее</a>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="personal_card">
                        <div class="personal_card_img">
                            <img src="{{ asset('tmp_data/doctors/d_4.webp') }}" alt="Казакова Виктория викторовна">
                        </div>
                        <div class="personal_card_text">
                            <h3>Казакова Виктория викторовна</h3>
                            <p>Врачь-стоматолог терапевт</p>
                            <a href="#" class="button">Подробнее</a>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
            <div class="personal_slider_control">
                <div class="swiper_control_wrap">
                    <div id="personal_slider_prev" class="swiper-control swiper-button-prev"></div>
                    <div id="personal_slider_next" class="swiper-control swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="sertificates" id="sertificates">
        <div class="container">
            <h2>Сертификаты наших специалистов</h2>
            <p>Наши специалисты регулярно повышают квалификациюи участвуют в зарубежных программах подготовки</p>
            <swiper-container class="main-sert-swiper" init="false">
                <swiper-slide>
                    <img src="{{ asset('tmp_data/sert/sert1.webp') }}" alt="sert 1">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{ asset('tmp_data/sert/sert2.webp') }}" alt="sert 2">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{ asset('tmp_data/sert/sert3.webp') }}" alt="sert 3">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{ asset('tmp_data/sert/sert4.webp') }}" alt="sert 4">
                </swiper-slide>
            </swiper-container>
            <div class="sertificates_slider_control">
                <div class="swiper_control_wrap">
                    <div id="sert_slider_prev" class="swiper-control swiper-button-prev"></div>
                    <div id="sert_slider_next" class="swiper-control swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>


@endsection

