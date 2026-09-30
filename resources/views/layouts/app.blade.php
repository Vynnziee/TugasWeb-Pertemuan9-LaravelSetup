<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Setup') — {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    <nav class="bg-white shadow">
        <div class="max-w-4xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xl font-bold text-red-600">{{ config('app.name') }}</a>
            <div class="flex gap-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-red-600 {{ request()->routeIs('home') ? 'text-red-600' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-red-600 {{ request()->routeIs('about') ? 'text-red-600' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="hover:text-red-600 {{ request()->routeIs('contact') ? 'text-red-600' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-4xl w-full mx-auto px-6 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-slate-500 py-6">
        Tugas Rutin 9 — Pemrograman Web · Laravel {{ app()->version() }}
    </footer>
</body>
</html>
