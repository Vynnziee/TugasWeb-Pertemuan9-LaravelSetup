@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Kontak</h1>

    <div class="bg-white rounded-lg shadow divide-y">
        @foreach ($contacts as $contact)
            <div class="px-5 py-4 flex justify-between">
                <span class="font-semibold">{{ $contact['label'] }}</span>
                <span class="text-slate-600">{{ $contact['value'] }}</span>
            </div>
        @endforeach
    </div>
@endsection
