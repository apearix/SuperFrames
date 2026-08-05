import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, EffectFade } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
export function initHeroSlider() {
    const heroElement = document.querySelector(".hero-swiper");
    if (!heroElement) return;
    return new Swiper(heroElement, {
        modules: [Navigation, Pagination, Autoplay, EffectFade],
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        slidesPerView: 1,
        speed: 900,
        loop: true,
        rewind: false,
        watchOverflow: false,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: ".hero-swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".hero-swiper-next",
            prevEl: ".hero-swiper-prev",
        },
        on: {
            init() {
                window.refreshLucideIcons?.();
            },
            slideChangeTransitionEnd() {
                window.refreshLucideIcons?.();
            },
        },
    });
}
