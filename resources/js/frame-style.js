import Swiper from "swiper";
import { Autoplay, Pagination, Navigation } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

export function initFrameStyleSlider() {
    const sliderEl = document.querySelector(".frame-style-swiper");
    if (!sliderEl) return;

    new Swiper(sliderEl, {
        modules: [Autoplay, Pagination, Navigation],

        slidesPerView: 1.15,
        centeredSlides: true,
        spaceBetween: 24,

        loop: true,
        loopAddBlankSlides: false,
        watchOverflow: false,
        centeredSlidesBounds: false,

        navigation: {
            nextEl: ".frame-next",
            prevEl: ".frame-prev",
        },

        pagination: {
            el: ".frame-pagination",
            clickable: true,
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        breakpoints: {
            640: {
                slidesPerView: 1.25,
                spaceBetween: 28,
            },
            1024: {
                slidesPerView: 1.35,
                spaceBetween: 36,
            },
        },
    });
}
