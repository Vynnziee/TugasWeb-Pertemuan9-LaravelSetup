@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1 class="text-4xl font-bold">Hello, {{ $nama }}! 🎉</h1>
    <p class="text-slate-600 mt-2">Halaman ini memakai route parameter <code class="bg-slate-200 px-1 rounded">/hello/{nama}</code>.</p>
@endsection
