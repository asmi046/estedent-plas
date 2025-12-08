import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler'
import ModalWindow from "./components/ModalWindow.vue"
import EmptyModal from "./components/EmptyModal.vue"
import { VMaskDirective } from 'v-slim-mask'
import fslightbox from 'fslightbox'

import axios from 'axios'
import VueAxios from 'vue-axios'

const global_app = createApp({
        components:{
            ModalWindow,
            EmptyModal,
        },
        setup() {}
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");


import MainBannerSwiper from './sliders/main-banner-swiper.js';

new MainBannerSwiper();

import './sliders/main-clinic-swiper.js';
import './sliders/main-personal-swiper.js';
import './sliders/main-sert-swiper.js';

document.addEventListener("DOMContentLoaded", (event) => {
    new isvek.Bvi();
});

