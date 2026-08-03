@extends('layouts.app')

@section('content')
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="mb-8">
            <a href="{{ route('projects.index') }}" class="text-sm font-medium text-slate-500 hover:text-indigo-600 transition">
                ← Kembali ke Daftar Proyek
            </a>
        </div>

        <div class="overflow-hidden rounded-3xl bg-slate-100 shadow-lg mb-8">
            <img src="{{ $project['image'] }}" class="w-full h-auto object-cover" alt="{{ $project['title'] }}">
        </div>

        <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight">{{ $project['title'] }}</h1>

        <div class="mt-4 flex flex-wrap gap-2">
            @foreach($project['tech'] as $t)
                <span class="text-xs font-bold px-3 py-1 bg-indigo-50 text-indigo-600 rounded-lg tracking-wide">{{ $t }}</span>
            @endforeach
        </div>

        <hr class="my-8 border-slate-100">

        <div class="prose max-w-none">
            <h3 class="text-xl font-bold text-slate-900 mb-4">Deskripsi Proyek</h3>
            <p class="text-slate-600 text-lg leading-relaxed">{{ $project['desc'] }}</p>
        </div>
    </div>
</section>
@endsection