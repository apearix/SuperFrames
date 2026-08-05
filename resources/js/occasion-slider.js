import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initOccasionSlider() {
    const sliderEl = document.querySelector('.occasion-swiper');
    if (!sliderEl) return;

    new Swiper(sliderEl, {
        modules: [Navigation, Pagination, Autoplay],
        slidesPerView: 2,
        spaceBetween: 16,
        centeredSlides: false,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: '.occasion-next',
            prevEl: '.occasion-prev',
        },
        pagination: {
            el: '.occasion-pagination',
            clickable: true,
        },
        breakpoints: {
            480: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 24,
            },
            1280: {
                slidesPerView: 7, // Desktop view jaisa reference image me hai
                spaceBetween: 28,
            }
        }
    });
}