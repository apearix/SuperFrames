I do not need to making ui component.
And We Focus Only only making Static Website using Final Stack
Laravel 13, Blade, Tailwind CSS v4, Alpine.js, Swiper.js,LucidIcon, GLightbox, Lucide Icons, Vite,AOS (optional) , and (Responsive Targets).

Current our Folder Structure.

SuperFrame/
├── app
│   ├── Http
│   │   └── Controllers
│   │       └── Controller.php
│   ├── Models
│   │   └── User.php
│   └── Providers
│       └── AppServiceProvider.php
├── bootstrap
│   ├── cache
│   │   ├── packages.php
│   │   └── services.php
│   ├── app.php
│   └── providers.php
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   └── 0001_01_01_000002_create_jobs_table.php
│   ├── seeders
│   │   └── DatabaseSeeder.php
│   └── database.sqlite
├── public
│   ├── fonts
│   │   ├── dm-serif-display
│   │   │   └── DMSerifDisplay-Regular.woff2
│   │   ├── playwrite-cuba
│   │   │   └── PlaywriteCU-Regular.woff2
│   │   ├── roboto
│   │   │   ├── Roboto-Bold.woff2
│   │   │   ├── Roboto-Medium.woff2
│   │   │   └── Roboto-Regular.woff2
│   │   └── TestFont.woff2
│   ├── images
│   │   ├── banners
│   │   ├── blogs
│   │   ├── hero
│   │   ├── icons
│   │   ├── memories
│   │   └── products
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources
│   ├── css 
│   │   ├── app.css 
│   │   ├── fonts.css 
│   │
│   ├── data
│   │   ├── about.php
│   │   ├── blogs.php
│   │   ├── contact.php
│   │   ├── faqs.php
│   │   ├── frame-styles.php
│   │   ├── hero.php
│   │   ├── memories.php
│   │   ├── navigation.php
│   │   ├── occasions.php
│   │   ├── products.php
│   │   ├── settings.php
│   │   └── testimonials.php
│   ├── js
│   │   ├── accordion.js
│   │   ├── animation.js
│   │   ├── app.js
│   │   ├── filters.js
│   │   ├── gallery.js
│   │   ├── helpers.js
│   │   ├── hero-slider.js
│   │   ├── lightbox.js
│   │   ├── navbar.js
│   │   └── tabs.js
│   └── views
│       ├── components
│       │   ├── cards
│       │   │   ├── blog-card.blade.php
│       │   │   ├── faq-card.blade.php
│       │   │   ├── feature-card.blade.php
│       │   │   ├── frame-style-card.blade.php
│       │   │   ├── gallery-card.blade.php
│       │   │   ├── memory-card.blade.php
│       │   │   ├── occasion-card.blade.php
│       │   │   ├── process-card.blade.php
│       │   │   ├── product-card.blade.php
│       │   │   └── social-card.blade.php
│       │   ├── forms
│       │   │   ├── contact-form.blade.php
│       │   │   ├── filter-form.blade.php
│       │   │   └── newsletter-form.blade.php
│       │   ├── sections
│       │   │   ├── best-sellers.blade.php
│       │   │   ├── contact-info.blade.php
│       │   │   ├── cta.blade.php
│       │   │   ├── faq.blade.php
│       │   │   ├── gallery.blade.php
│       │   │   ├── hero.blade.php
│       │   │   ├── instagram-feed.blade.php
│       │   │   ├── latest-blogs.blade.php
│       │   │   ├── memory-wall.blade.php
│       │   │   ├── section-heading.blade.php
│       │   │   ├── shop-by-frame-style.blade.php
│       │   │   ├── shop-by-occasion.blade.php
│       │   │   └── testimonials.blade.php
│       │   └── sliders
│       │       ├── blog-slider.blade.php
│       │       ├── frame-slider.blade.php
│       │       ├── gallery-slider.blade.php
│       │       ├── hero-slider.blade.php
│       │       ├── memory-slider.blade.php
│       │       ├── occasion-slider.blade.php
│       │       └── product-slider.blade.php
│       ├── errors
│       │   ├── 404.blade.php
│       │   ├── 500.blade.php
│       │   └── maintenance.blade.php
│       ├── layouts
│       │   ├── app.blade.php
│       │   ├── empty.blade.php
│       │   └── guest.blade.php
│       ├── pages
│       │   ├── 404.blade.php
│       │   ├── about.blade.php
│       │   ├── best-sellers.blade.php
│       │   ├── blog-detail.blade.php
│       │   ├── blog.blade.php
│       │   ├── contact.blade.php
│       │   ├── frame-style-detail.blade.php
│       │   ├── frame-style.blade.php
│       │   ├── gallery.blade.php
│       │   ├── home.blade.php
│       │   ├── memory-detail.blade.php
│       │   ├── memory-wall.blade.php
│       │   ├── occasion-detail.blade.php
│       │   ├── occasion.blade.php
│       │   ├── privacy-policy.blade.php
│       │   ├── product-detail.blade.php
│       │   ├── return-policy.blade.php
│       │   ├── shipping.blade.php
│       │   └── terms.blade.php
│       ├── partials
│       │   ├── breadcrumbs.blade.php
│       │   ├── footer.blade.php
│       │   ├── mobile-menu.blade.php
│       │   ├── navbar.blade.php
│       │   ├── newsletter.blade.php
│       │   ├── page-banner.blade.php
│       │   ├── page-header.blade.php
│       │   ├── scripts.blade.php
│       │   ├── scroll-top.blade.php
│       │   └── whatsapp-floating.blade.php
│       └── welcome.blade.php
├── routes
│   ├── console.php
│   └── web.php
├── artisan
├── composer.json
├── composer.lock
├── package-lock.json
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js

<!-- Font-
1. Playwrite Cuba (Eyebrow Text / Section Label)
2. Playfair Display (Hero Title / Page Title / Section Title / Product Title)
3. Roboto (All descriptions, paragraphs, body text)
-->

C:\laragon\www\SuperFrame\resources\css\app.css
@import "./fonts.css";
@import "tailwindcss";

@source "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php";
@source "../../storage/framework/views/*.php";
@source "../views/**/*.blade.php";

/* ==========================================================================
   SuperFrames Theme
   ========================================================================== */

@theme {
    /* ===============================================================
       Colors
       =============================================================== */

    --color-primary: #0e2b6d;
    --color-primary-hover: #123887;

    --color-secondary: #c89a4b;
    --color-secondary-hover: #b58436;

    --color-heading: #1f2937;
    --color-body: #4b5563;

    --color-background: #fbf9f5;
    --color-section: #f3f0e9;
    --color-surface: #ffffff;

    --color-border: #e5e7eb;

    --color-success: #16a34a;
    --color-warning: #f59e0b;
    --color-danger: #dc2626;

    --color-white: #ffffff;
    --color-black: #000000;

    /* ===============================================================
       Typography
       =============================================================== */

    --font-heading: "Playfair Display", Georgia, serif;
    --font-body: "Roboto", ui-sans-serif, system-ui, sans-serif;
    --font-eyebrow: "Playwrite CU", cursive;
    --font-sans: "Roboto", ui-sans-serif, system-ui, sans-serif;
}

/* ==========================================================================
   Global Styles
   ========================================================================== */
html {
    scroll-behavior: smooth;
    color-scheme: light;
}

body {
    background: var(--color-background);
    color: var(--color-body);
    font-family: var(--font-body);
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* Default Heading Font */

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: var(--font-heading);
    color: var(--color-heading);
}

/* Form Elements */

button,
input,
textarea,
select {
    font: inherit;
}

button {
    cursor: pointer;
}

/* Text Selection */

::selection {
    background: var(--color-primary);
    color: var(--color-white);
}

/* Scrollbar */

::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--color-background);
}

::-webkit-scrollbar-thumb {
    background: var(--color-primary);
    border-radius: 999px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--color-primary-hover);
}

Current Stage : 0