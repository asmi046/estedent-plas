document.addEventListener('DOMContentLoaded', () => {
    const personalSwiper = document.querySelector('.main-personal-swiper');

    const personalSwiperParams = {
        slidesPerView: 4,
        spaceBetween: 30,
        autoHeight: true,
        loop: true,

        navigation: {
            nextEl: '#personal_slider_next',
            prevEl: '#personal_slider_prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20
            },
            820: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        },
        on: {
            init() {
                //
            },
        },
    };

    Object.assign(personalSwiper, personalSwiperParams);

    personalSwiper.initialize();
});
