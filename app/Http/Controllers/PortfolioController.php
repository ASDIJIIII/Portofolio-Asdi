<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getProjectData()
    {
        return [
            1 => [
                'title' => 'Sertifikat Cisco Networking Academy',
                'desc' => 'Sertifikat kelulusan yang memvalidasi kemampuan dalam analisis masalah, pengembangan program logis, serta penulisan kode JavaScript yang efisien.',
                'tech' => ['JavaScript', 'Algorithms', 'OOP'],
                'image' => asset('img/sertifikat.jpg')
            ],
            2 => [
                'title' => 'UI/UX Design Aplikasi Logbook Sekolah',
                'desc' => 'Perancangan antarmuka pengguna (UI/UX) untuk aplikasi pencatatan jurnal digital (Logbook) sekolah dengan alur yang intuitif dan responsif.',
                'tech' => ['Figma', 'UI/UX', 'Mobile Design'],
                'image' => asset('img/logbook.jpg')
            ]
        ];
    }

    // Menampilkan halaman utama (home.blade.php)
    public function home()
    {
        return view('home');
    }

    // Menampilkan semua daftar proyek (projects/index.blade.php)
    public function index()
    {
        $projects = $this->getProjectData();
        return view('projects.index', compact('projects')); // Menggunakan 'projects' sesuai folder kamu
    }

    // Menampilkan detail proyek berdasarkan id (projects/show.blade.php)
    public function show($id)
    {
        $projects = $this->getProjectData();

        if (!isset($projects[$id])) {
            abort(404);
        }

        $project = $projects[$id];
        return view('projects.show', compact('project')); // Menggunakan 'projects' sesuai folder kamu
    }
}