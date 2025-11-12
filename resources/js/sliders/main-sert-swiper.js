const sertSwiper = document.querySelector('.main-sert-swiper');

const sertSwiperParams = {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: '#sert_slider_next',
        prevEl: '#sert_slider_prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 20
        },
        820: {
            slidesPerView: 3,
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
