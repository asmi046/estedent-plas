@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="banner_section">
        <div class="container" >
            <div class="banner_section__left text_styles">
                <h1>Стоматологическая клиника Эстедент плюс</h1>
                <p>Мы дарить вам здоровую и красивую улыбку, которая станет вашим пропуском в мир успеха и уверенности</p>
                <ul>
                    <li>Передовые технологии и мастерство, отточенное временем</li>
                    <li>Многолетняя репутация семейной стоматологии</li>
                    <li>Опытные врачи со стажем 6-19 лет</li>
                </ul>
                <div class="banner_section__buttons">
                    <a href="#" class="button">Наши услуги</a>
                    <a href="#" class="button">Наши врачи</a>
                </div>
            </div>
            <div class="banner_section__right">
                <swiper-container class="main-banner-swiper" init="false">
                    <swiper-slide>
                        <img src="{{ asset('tmp_data/slide_1.webp') }}" alt="Slide 1">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset('tmp_data/slide_2.webp') }}" alt="Slide 2">
                    </swiper-slide>
                </swiper-container>
            </div>


        </div>

        <div class="container bg_none">
            <div class="swiper_control_wrap">
                <div class="swiper-control swiper-button-prev"></div>
                <div class="swiper-control swiper-button-next"></div>
            </div>
        </div>

    </section>

    <section class="advantages" id="advantages">
        <div class="container">
            <div class="advantages_wrap">
                <div class="advantages_item">
                    <div class="advantages_item_icon">
                        <img src="{{ asset('img/icon/adv/adv_1.svg') }}" alt="Современное оборудование">
                    </div>
                    <div class="advantages_item_text_block">
                        <h2>Современное оборудование</h2>
                        <p>Используем передовые технологии и цифровую диагностику для точного и безболезненного лечения</p>
                    </div>
                </div>
                <div class="advantages_item">
                    <div class="advantages_item_icon">
                        <img src="{{ asset('img/icon/adv/adv_2.svg') }}" alt="Опытные специалисты">
                    </div>
                    <div class="advantages_item_text_block">
                        <h2>Опытные специалисты</h2>
                        <p>Команда врачей с многолетней практикой и узкой специализацией в различных областях стоматологии</p>
                    </div>
                </div>
                <div class="advantages_item">
                    <div class="advantages_item_icon">
                        <img src="{{ asset('img/icon/adv/adv_3.svg') }}" alt="Удобное расположение">
                    </div>
                    <div class="advantages_item_text_block">
                        <h2>Удобное расположение</h2>
                        <p>Клиника рядом с вами, работаем по гибкому расписанию, включая вечерние часы и выходные.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta" id="cta">
        <div class="container">
            <div class="cta_wrap">
                <h2>Подробная консультация и подбор плана лечения</h2>
                <div class="cta_decor_block"></div>
                <div class="cta_contact_block">
                    <p>Работаем для вас с 09:00-21:00</p>
                    <a class="phone" href="tel:+74712770303">+7 (4712) 77-03-03</a>
                </div>
                <div class="cta_button_block">
                    <a href="#" class="button">Обратный звонок</a>
                </div>
            </div>
        </div>
    </section>


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


    <section class="clinic" id="clinic">
        <div class="container">
            <div class="clinic_top">
                <div class="clinic_slider_wrap">
                    <swiper-container class="main-clinic-swiper" init="false">
                        <swiper-slide>
                            <img src="{{ asset('tmp_data/photo/p1.webp') }}" alt="photo 1">
                        </swiper-slide>
                        <swiper-slide>
                            <img src="{{ asset('tmp_data/photo/p2.webp') }}" alt="photo 2">
                        </swiper-slide>
                    </swiper-container>
                    <div class="clinic_slider_control">
                        <div class="swiper_control_wrap">
                            <div id="clinic_slider_prev" class="swiper-control swiper-button-prev"></div>
                            <div id="clinic_slider_next" class="swiper-control swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="clinic_info">
                    <h2>Наша клиника</h2>

                    <div class="info">
                        <p>Адрес: г.Курск ул.Иванова 22</p>
                        <hr>
                        <p>Ежедневно с 09:00-21:00</p>
                    </div>

                    <a href="#" class="button">Записаться на прием</a>
                </div>
            </div>
            <div class="clinic_bottom">
                <div class="clinic_photo_item">
                    <img src="{{ asset('tmp_data/photo/p1.webp') }}" alt="Изображение 1">
                </div>
                <div class="clinic_photo_item">
                    <img src="{{ asset('tmp_data/photo/p2.webp') }}" alt="Изображение 2">
                </div>
                <div class="clinic_photo_item">
                    <img src="{{ asset('tmp_data/photo/p3.webp') }}" alt="Изображение 3">
                </div>
                <div class="clinic_photo_item">
                    <img src="{{ asset('tmp_data/photo/p4.webp') }}" alt="Изображение 4">
                </div>
                <div class="clinic_photo_item">
                    <img src="{{ asset('tmp_data/photo/p5.webp') }}" alt="Изображение 5">
                </div>
            </div>
        </div>
    </section>

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

