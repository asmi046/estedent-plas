// Импортируем Swiper
import { register } from 'swiper/element/bundle';

// Регистрируем Swiper элементы
register();

// Инициализация Swiper слайдера для главной страницы
class MainBannerSwiper {
    constructor() {
        this.init();
        console.log('MainBannerSwiper initialized');
    }

    init() {
        // Ждем загрузки DOM
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                this.initSwiper();
            });
        } else {
            this.initSwiper();
        }
    }

    initSwiper() {
        const swiperContainer = document.querySelector('.main-banner-swiper');

        if (!swiperContainer) return;

        // Настройки Swiper
        const swiperParams = {
            slidesPerView: 1,
            loop: true,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        };

        // Применяем настройки к swiper-container
        Object.assign(swiperContainer, swiperParams);

        // Инициализируем Swiper
        swiperContainer.initialize();
    }
}

// Экспортируем класс
export default MainBannerSwiper;
