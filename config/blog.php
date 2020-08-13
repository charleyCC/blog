<?php
return [
    'name' => "Laravel 学习",
    'title' => "Laravel 学习",
    'subtitle' => '在这里，记录你的美好',
    'description' => 'Laravel个人博客学习项目',
    'author' => '博客',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage',
    ],
    'contact_email'=>env('MAIL_FROM'),
];