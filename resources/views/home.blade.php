@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold mb-2">Halo, {{ $name }}! 👋</h1>
    <p class="text-slate-600 mb-6">Selamat datang di project Laravel pertamaku. Berikut hal-hal yang sedang dan sudah dipelajari:</p>

    <ul class="grid grid-cols-2 sm:grid-cols-3 gap-3">
        @foreach ($courses as $course)
            <li class="bg-white rounded-lg shadow px-4 py-3 text-center font-medium">
                {{ $loop->iteration }}. {{ $course }}
            </li>
        @endforeach
    </ul>
@endsection
