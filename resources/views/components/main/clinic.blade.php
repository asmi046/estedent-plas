    <section class="clinic" id="clinic">
        <div class="container">
            <div class="clinic_top">
                <div class="clinic_slider_wrap">
                    <swiper-container class="main-clinic-swiper" init="false">
                        @foreach ($galery as $item)
                            <swiper-slide class="swiper-slide">
                                <a data-fslightbox="clinic_main-gallery" href="{{ Storage::url($item->img) }}">
                                    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
                                </a>
                            </swiper-slide>
                        @endforeach

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
                        <p>Адреса:</p>
                        <p>{{ $contacts['adress']->value ?? 'г.Курск' }}, <br>время работы:
                            {{ $contacts['work_time']->value ?? 'Ежедневно с 09:00-20:00' }}</p>
                        <hr>
                        <p>{{ $contacts['adress_2']->value ?? 'г.Курск' }}, <br>время работы:
                            {{ $contacts['work_time2']->value ?? 'Ежедневно с 09:00-21:00' }}</p>


                    </div>

                    <a href="#consultation" class="button">Записаться на прием</a>
                </div>
            </div>
            <div class="clinic_bottom">
                @foreach ($galery as $item)
                    <div class="clinic_photo_item">
                        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
