@extends('layouts.app')

@section('content')
<section id="home" class="pt-36 pb-20 px-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="text-left max-w-2xl">
            <span class="bg-indigo-100 text-indigo-600 text-xs font-semibold px-3 py-1.5 rounded-full uppercase tracking-wider">Available for Freelance</span>
            <h1 class="text-5xl font-extrabold text-slate-900 mt-4 tracking-tight">Rajamuda Asdi</h1>
            <p class="text-slate-500 mt-6 text-lg leading-relaxed">Halo, saya Asdi. Seorang Backend Developer yang fokus pada ekosistem Laravel untuk menciptakan solusi digital yang skalabel.</p>
        </div>
        
        <div class="w-64 h-64 md:w-80 md:h-80 shrink-0 rounded-full overflow-hidden border-4 border-white shadow-2xl">
            <img src="{{ asset('img/profile.jpg') }}" class="w-full h-full object-cover" alt="Foto Profil Asdi">
        </div>
    </div>
</section>

<section id="proyek" class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Proyek dan sertifikat saya</h2>
        <p class="text-slate-500 mt-2">Studi kasus pengembangan sistem yang pernah saya kerjakan.</p>
        <div class="mt-8">
            <a href="{{ route('projects.index') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-6 py-3 rounded-lg transition shadow-md">
                Lihat Semua Proyek Terpisah →
            </a>
        </div>
    </div>
</section>

<section id="skill" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-slate-900">Keahlian Utama</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 bg-white rounded-3xl border border-slate-100 shadow-sm space-y-4">
                <div class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center text-white font-bold">
                </div>
                <h3 class="text-xl font-bold text-slate-900">Backend Development</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Menguasai PHP, framework Laravel, pembuatan RESTful API, arsitektur database, dan keamanan otentikasi sistem.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Hubungi Saya</h2>
        <p class="text-slate-500 mt-2">Punya proyek menarik? Yuk, diskusikan bersama.</p>
        <div class="mt-6">
            <a href="mailto:emailmu@example.com" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-6 py-3 rounded-lg transition shadow-md">
                Kirim Email
            </a>
        </div>
    </div>
</section>
@endsection