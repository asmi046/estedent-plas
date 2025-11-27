    <section class="personal" id="personal">
        <div class="container">
            <h2>Специалисты клиники</h2>
            <swiper-container class="main-personal-swiper" init="false">

                @foreach ($specialists as $item)
                    <swiper-slide>
                        <x-cards.specialist :item="$item" />
                    </swiper-slide>
                @endforeach


            </swiper-container>
            <div class="personal_slider_control">
                <div class="swiper_control_wrap">
                    <div id="personal_slider_prev" class="swiper-control swiper-button-prev"></div>
                    <div id="personal_slider_next" class="swiper-control swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
