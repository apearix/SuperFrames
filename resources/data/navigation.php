<?php

return [
    'main_menu' => [
        [
            'title' => 'Home',
            'url' => '/',
            'is_active' => true,
        ],
        [
            'title' => 'Shop by Occasion',
            'url' => '/shop-by-occasion',
            'is_active' => false,
            'children' => [
                ['title' => 'Anniversary', 'url' => '/occasion/anniversary'],
                ['title' => 'Birthday', 'url' => '/occasion/birthday'],
                ['title' => 'Baby & Newborn', 'url' => '/occasion/baby'],
                ['title' => 'Wedding & Bridal', 'url' => '/occasion/wedding'],
                ['title' => 'Family Memories', 'url' => '/occasion/family'],
                ['title' => 'Pets', 'url' => '/occasion/pet'],
                ['title' => 'Graduation', 'url' => '/occasion/graduation'],
            ]
        ],
        [
            'title' => 'Shop by Frame Style',
            'url' => '/shop-by-frame-style',
            'is_active' => false,
            'children' => [
                ['title' => '3D Shadow Box Frame', 'url' => '/frame-style/3d-shadow-box'],
                ['title' => 'Quilling Name Frame', 'url' => '/frame-style/quilling-name-frame'],
                ['title' => '3D Mini Desk Frame', 'url' => '/frame-style/3d-mini-desk-frame'],
                ['title' => 'Classic A4 Print Frame', 'url' => '/frame-style/classic-a4-print-frame'],
                ['title' => 'Pop-up Frame', 'url' => '/frame-style/pop-up-frame'],
            ]
        ],
        [
            'title' => 'Best Sellers',
            'url' => '/best-sellers',
            'is_active' => false,
        ],
        [
            'title' => 'Gallery',
            'url' => '/gallery',
            'is_active' => false,
        ],
        [
            'title' => 'Our Story',
            'url' => '/about',
            'is_active' => false,
        ],
        [
            'title' => 'Blog',
            'url' => '/blog',
            'is_active' => false,
        ],
        [
            'title' => 'Contact Us',
            'url' => '/contact',
            'is_active' => false,
        ],
    ],

    'footer_links' => [
        'quick_links' => [
            ['title' => 'Home', 'url' => '/'],
            ['title' => 'Shop by Occasion', 'url' => '/shop-by-occasion'],
            ['title' => 'Shop by Frame Style', 'url' => '/shop-by-frame-style'],
            ['title' => 'Best Sellers', 'url' => '/best-sellers'],
            ['title' => 'Gallery', 'url' => '/gallery'],
            ['title' => 'Customer Memory Wall', 'url' => '/memory-wall'],
            ['title' => 'Our Story', 'url' => '/about'],
            ['title' => 'Blog', 'url' => '/blog'],
            ['title' => 'Contact Us', 'url' => '/contact'],
        ],
        'occasions' => [
            ['title' => 'Anniversary', 'url' => '/occasion/anniversary'],
            ['title' => 'Birthday', 'url' => '/occasion/birthday'],
            ['title' => 'Baby', 'url' => '/occasion/baby'],
            ['title' => 'Wedding', 'url' => '/occasion/wedding'],
            ['title' => 'Family', 'url' => '/occasion/family'],
            ['title' => 'Pet', 'url' => '/occasion/pet'],
            ['title' => 'Graduation', 'url' => '/occasion/graduation'],
        ],
        'frame_styles' => [
            ['title' => '3D Shadow Box', 'url' => '/frame-style/3d-shadow-box'],
            ['title' => 'Quilling Name Frame', 'url' => '/frame-style/quilling-name-frame'],
            ['title' => '3D Mini Desk Frame', 'url' => '/frame-style/3d-mini-desk-frame'],
            ['title' => 'Classic A4 Print Frame', 'url' => '/frame-style/classic-a4-print-frame'],
            ['title' => 'Pop-up Frame', 'url' => '/frame-style/pop-up-frame'],
        ],
        'legal' => [
            ['title' => 'Privacy Policy', 'url' => '/privacy-policy'],
            ['title' => 'Terms of Use', 'url' => '/terms'],
            ['title' => 'Shipping Info', 'url' => '/shipping'],
            ['title' => 'Return Policy', 'url' => '/return-policy'],
        ]
    ],

    'actions' => [
        'whatsapp' => [
            'number' => '+91 98765 43210',
            'link' => 'https://wa.me/919876543210',
            'message' => 'Hello Super Frames, I would like to inquire about a customized photo frame.',
        ]
    ]
];