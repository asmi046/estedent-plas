@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <a href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo" >
                </a>
            </div>
            <div class="header__address">
                Адрес: г.Курск <br>Павлуновского, 114 <br>Ежедневно с 09:00-21:00
            </div>
            <div class="header__phone">
                <a href="tel:+74712770303">+7 (4712) 77-03-03</a>
            </div>
            <div class="header__button">
                <a href="#" class="button">Записаться</a>
            </div>
        </div>
    </header>

    <section class="main_menu_section">
        <div class="container">
            <nav class="main_menu">
                <ul>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Специалисты</a></li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Клиника</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </section>

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
@endsection

