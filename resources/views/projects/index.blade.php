@extends('layouts.app')

@section('content')
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Semua Proyek & Sertifikat</h2>
            <p class="text-slate-500 mt-2">Daftar lengkap hasil karya dan pencapaian saya.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            @foreach($projects as $id => $p)
                <div class="group">
                    <div class="relative overflow-hidden rounded-3xl bg-slate-100 aspect-video shadow-inner">
                        <img src="{{ $p['image'] }}" class="object-cover w-full h-full group-hover:scale-102 transition duration-300" alt="{{ $p['title'] }}">
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-slate-900">{{ $p['title'] }}</h3>
                    <p class="mt-2 text-slate-600 leading-relaxed">{{ Str::limit($p['desc'], 120) }}</p>
                    
                    <div class="mt-4 flex gap-2">
                        @foreach($p['tech'] as $t)
                            <span class="text-xs font-bold px-3 py-1 bg-slate-100 text-slate-500 rounded-lg tracking-wide">{{ $t }}</span>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('projects.show', $id) }}" class="inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-800 transition">
                            Lihat Detail Halaman →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection