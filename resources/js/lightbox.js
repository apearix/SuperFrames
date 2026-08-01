import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.min.css';

export function initLightbox() {
    return GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        zoomable: true,
        autoplayVideos: false
    });
}