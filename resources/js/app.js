import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import { createIcons, icons } from 'lucide';

// Import local JS modules
import { initAccordions } from './accordion';
import { initAnimations } from './animation';
import { initFilters } from './filters';
import { initGallerySliders } from './gallery';
import { shareProduct } from './helpers';
import { initHeroSlider } from './hero-slider';
import { initLightbox } from './lightbox';
import { initNavbarScroll } from './navbar';
import { initTabs } from './tabs';
import { initFrameStyleSlider } from './frame-style'; // <-- ADD THIS
import { initOccasionSlider } from './occasion-slider';
import { initLatestBlogSlider } from './latest-blog-slider';

// Register Alpine plugins & Expose Globally
Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();

// Expose Helpers to Window
window.shareProduct = shareProduct;

// Initialize All Modular Components on DOM Load
document.addEventListener('DOMContentLoaded', () => {
    // Icons
    createIcons({ icons });

    // Component Initializers
    initNavbarScroll();
    initHeroSlider();
    initGallerySliders();
    initLightbox();
    initAccordions();
    initAnimations();
    initFilters();
    initTabs();
    initFrameStyleSlider(); // <-- ADD THIS
    initOccasionSlider();
    initLatestBlogSlider();
});

// Refresh Lucide Icons Helper
window.refreshLucideIcons = function() {
    createIcons({ icons });
};