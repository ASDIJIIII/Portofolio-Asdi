<nav class="flex items-center gap-6 relative z-50">
    <a href="{{ url('/') }}" target="_self" class="text-slate-600 hover:text-indigo-600 font-medium transition cursor-pointer">Beranda</a>
    
    <a href="{{ route('projects.index') }}" target="_self" class="text-slate-600 hover:text-indigo-600 font-medium transition cursor-pointer">Proyek</a>
    
    <a href="{{ url('/') }}#skill" target="_self" class="text-slate-600 hover:text-indigo-600 font-medium transition cursor-pointer">Keahlian</a>
    
    <a href="{{ url('/') }}#contact" target="_self" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-full font-medium transition cursor-pointer">Kontak</a>
</nav>