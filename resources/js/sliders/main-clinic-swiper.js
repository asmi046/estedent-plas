document.addEventListener('DOMContentLoaded', () => {
    const clinicSwiper = document.querySelector('.main-clinic-swiper');

    const clinicSwiperParams = {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '#clinic_slider_next',
            prevEl: '#clinic_slider_prev',
        },
        on: {
            init() {
                //
            },
        },
    };

    Object.assign(clinicSwiper, clinicSwiperParams);

    clinicSwiper.initialize();
});
