<?php

return [
    'site' => [
        'name' => 'SuperFrames',
        'tagline' => 'Frames That Hold Memories Forever',
        'description' => 'Handcrafted personalized photo frames, 3D shadow boxes, and quilling art designed to preserve your precious memories forever.',
        'url' => env('APP_URL', 'http://localhost'),
        'currency_symbol' => '₹',
        'currency_code' => 'INR',
    ],

    'contact' => [
        'phone' => '+91 98765 43210',
        'email' => 'hello@superframes.in',
        'address' => [
            'name' => 'Super Frames Studio',
            'line1' => 'Shop No. 12, Shreeji Complex',
            'line2' => 'Station Road, Civil Lines',
            'city' => 'Nagpur',
            'state' => 'Maharashtra',
            'zip' => '440001',
            'country' => 'India',
            'google_maps_url' => 'https://maps.google.com/?q=Nagpur+Maharashtra',
        ],
        'whatsapp' => [
            'number' => '919876543210',
            'formatted_number' => '+91 98765 43210',
            'default_message' => 'Hello Super Frames, I would like to inquire about a customized photo frame.',
            'link' => 'https://wa.me/919876543210',
        ],
    ],

    'socials' => [
        'instagram' => [
            'handle' => '@superframes',
            'url' => 'https://instagram.com',
            'icon' => 'instagram',
        ],
        'youtube' => [
            'handle' => 'Super Frames',
            'url' => 'https://youtube.com',
            'icon' => 'youtube',
        ],
        'pinterest' => [
            'handle' => 'Super Frames',
            'url' => 'https://pinterest.com',
            'icon' => 'pinterest',
        ],
        'google' => [
            'handle' => 'Super Frames Nagpur',
            'url' => 'https://google.com/maps',
            'icon' => 'map-pin',
        ],
    ],

    'business_hours' => [
        'days' => 'Monday – Saturday',
        'hours' => '10:00 AM – 8:00 PM IST',
        'note' => 'Sunday: Closed (WhatsApp inquiries open 24/7)',
    ],

    'announcement_bar' => [
        'enabled' => true,
        'message' => '✨ Free Delivery on All Orders Across India | Custom WhatsApp Orders Open!',
        'link' => 'https://wa.me/919876543210',
        'button_text' => 'Order Now',
    ],
];