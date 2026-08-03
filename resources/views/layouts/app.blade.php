<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Laravel Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col justify-between">

    <nav class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <span class="text-2xl font-bold tracking-tighter text-indigo-600">Portofolio</span>
            
            <div class="hidden md:flex items-center space-x-8 font-medium relative z-50">
                <a href="{{ url('/') }}" target="_self" class="text-slate-600 hover:text-indigo-600 transition cursor-pointer">Beranda</a>
                
                <a href="{{ route('projects.index') }}" target="_self" class="text-slate-600 hover:text-indigo-600 transition cursor-pointer">Proyek</a>
                
                <a href="{{ url('/') }}#skill" target="_self" class="text-slate-600 hover:text-indigo-600 transition cursor-pointer">Keahlian</a>
                
                <a href="{{ url('/') }}#contact" target="_self" class="px-5 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition cursor-pointer">Kontak</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    <footer class="py-8 bg-white border-t border-slate-100 mt-20">
        <div class="text-center text-slate-500 text-sm">
            &copy; 2026 Portofolio Asdi. Dibuat dengan Laravel.
        </div>
    </footer>

</body>
</html>