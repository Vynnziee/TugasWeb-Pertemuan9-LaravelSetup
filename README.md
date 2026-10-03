# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 — Pemrograman Web (3KOM40115) · Setup Laravel, Route, dan Blade View.

## Fitur
- 3 route custom: `/`, `/about`, `/contact` (return Blade view)
- Data dinamis (array) dikirim dari route ke view
- `PageController` (dibuat dengan `make:controller`) untuk halaman Contact
- Model `Course` + migration (dibuat dengan `make:model Course -m`)
- Layout Blade dengan Tailwind CSS via CDN
- Bonus: route parameter `/hello/{nama}`

## Prasyarat
PHP >= 8.2, Composer, MySQL (Laragon/XAMPP), Node.js (opsional).

## Langkah Install (dari nol)
```bash
# 1. Buat project
composer create-project laravel/laravel TugasWeb-P9-LaravelSetup
cd TugasWeb-P9-LaravelSetup

# 2. Buat database `laravel_p9` di phpMyAdmin, lalu edit .env
#    DB_CONNECTION=mysql
#    DB_HOST=127.0.0.1
#    DB_PORT=3306
#    DB_DATABASE=laravel_p9
#    DB_USERNAME=root
#    DB_PASSWORD=

# 3. Generate file dengan Artisan
php artisan make:controller PageController
php artisan make:model Course -m

# 4. Salin/timpa file dari repo ini (routes, controller, model, migration, views)

# 5. Jalankan migration & server
php artisan migrate
php artisan serve
# buka http://127.0.0.1:8000
```

## Struktur Folder
| Folder / File | Fungsi |
|---|---|
| `app/Models/` | Model Eloquent (**M** pada MVC) |
| `app/Http/Controllers/` | Controller (**C** pada MVC) |
| `resources/views/` | Blade view (**V** pada MVC) |
| `routes/web.php` | Peta URL → controller / closure |
| `database/migrations/` | Versi skema database |
| `public/` | Document root; satu-satunya folder yang diakses browser |
| `config/` | File konfigurasi aplikasi |
| `storage/` | Cache, log, dan upload |
| `vendor/` | Dependency hasil Composer |
| `.env` | Konfigurasi rahasia lokal (jangan di-commit) |

## Screenshot

- `screenshots/ss.png` — welcome page default (`php artisan serve`)
- `screenshots/home.png`, `about.png`, `contact.png`
