<section class="sertificates" id="sertificates">
        <div class="container">
            <h2>Сертификаты наших специалистов</h2>
            <p>Наши специалисты регулярно повышают квалификациюи участвуют в зарубежных программах подготовки</p>
            <swiper-container class="main-sert-swiper" init="false">
                @foreach ($certificates as $certificate)
                    <swiper-slide>
                        <a data-fslightbox="sert_main-gallery" href="{{ Storage::url($certificate) }}">
                            <img src="{{ Storage::url($certificate) }}" alt="sert 1">
                        </a>

                    </swiper-slide>
                @endforeach


            </swiper-container>
            <div class="sertificates_slider_control">
                <div class="swiper_control_wrap">
                    <div id="sert_slider_prev" class="swiper-control swiper-button-prev"></div>
                    <div id="sert_slider_next" class="swiper-control swiper-button-next"></div>
                </div>
            </div>
        </div>
</section>
