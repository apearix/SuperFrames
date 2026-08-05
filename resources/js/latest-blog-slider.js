import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initLatestBlogSlider() {
    const sliderEl = document.querySelector('.latest-blog-swiper');
    if (!sliderEl) return;

    new Swiper(sliderEl, {
        modules: [Navigation, Pagination, Autoplay],
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 24,
        loop: true,
        loopAdditionalSlides: 5,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: '.blog-next',
            prevEl: '.blog-prev',
        },
        pagination: {
            el: '.blog-pagination',
            clickable: true,
        },
    });
}