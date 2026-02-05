document.addEventListener('DOMContentLoaded', () => {
    const sertSwiper = document.querySelector('.main-sert-swiper');

    const sertSwiperParams = {
        slidesPerView: 2.5,
        spaceBetween: 30,
        navigation: {
            nextEl: '#sert_slider_next',
            prevEl: '#sert_slider_prev',
        },
        breakpoints: {
            820: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 30
            }
        },
        on: {
            init() {
                //
            },
        },
    };

    Object.assign(sertSwiper, sertSwiperParams);

    sertSwiper.initialize();
});
