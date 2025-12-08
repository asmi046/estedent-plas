<section class="banner_section">
        <div class="container" >
            <div class="banner_section__left text_styles">
                <h1>{{ $options['main_1']->title }}</h1>
                <p>{{ $options['main_1']->value }}</p>
                {!! $options['main_2']->value !!}
                <div class="banner_section__buttons">
                    <a href="{{ route('services.index') }}" class="button">Наши услуги</a>
                    <a href="{{ route('specialists.index') }}" class="button">Наши врачи</a>
                </div>
            </div>
            <div class="banner_section__right">
                <swiper-container class="main-banner-swiper" init="false">

                    @foreach ($banners as $item)
                        <swiper-slide>
                            <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
                        </swiper-slide>
                    @endforeach


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
