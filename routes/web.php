<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 1. Home — data dinamis (array) dikirim dari route ke view
Route::get('/', function () {
    return view('home', [
        'name'    => 'Vinando Syahputra',
        'courses' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'],
    ]);
})->name('home');

// 2. About — data dinamis (array) dari route
Route::get('/about', function () {
    return view('about', [
        'title' => 'Tentang Project Ini',
        'stack' => [
            'Laravel'      => 'Framework PHP dengan arsitektur MVC',
            'Composer'     => 'Package manager PHP',
            'Blade'        => 'Templating engine bawaan Laravel',
            'Tailwind CSS' => 'Styling lewat CDN',
        ],
    ]);
})->name('about');

// 3. Contact — lewat controller (hasil php artisan make:controller)
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Bonus: route parameter
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => $nama]);
})->name('hello');
