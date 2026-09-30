@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>

    <div class="bg-white rounded-lg shadow divide-y">
        @foreach ($stack as $nama => $deskripsi)
            <div class="px-5 py-4">
                <p class="font-semibold text-red-600">{{ $nama }}</p>
                <p class="text-slate-600 text-sm">{{ $deskripsi }}</p>
            </div>
        @endforeach
    </div>
@endsection
