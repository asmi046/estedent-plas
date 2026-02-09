    <section class="clinic galery" id="Galery{{ $index }}">
        <div class="container">
            <div class="clinic_top">
                <div class="clinic_slider_wrap">
                    <swiper-container class="main-clinic-swiper" init="false">
                        @foreach ($information as $item)
                            <swiper-slide class="swiper-slide">
                                <a data-fslightbox="clinic_main-gallery" href="{{ Storage::url($item['picture']) }}">
                                    <img src="{{ Storage::url($item['picture']) }}" alt="{{ $item['title'] ?? '' }}">
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
                <div class="clinic_info center">
                    <h2>{{ $title }}</h2>
                    {!! $text !!}
                </div>
            </div>
        </div>
    </section>
