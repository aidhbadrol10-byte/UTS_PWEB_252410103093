<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dashboard(Request $request)
    {
        $username = $request->input('username');
        return view('dashboard', ['username' => $username]);
    }
    public function pengelolaan(Request $request)
    {
        $username = $request->input('username');
        $tugas = [
            ['Matkul' => 'Pweb', 'Nama' => 'UTS PWEB', 'Deadline' => '10 November 2026', 'Status' => 'Belum Selesai'],
            ['Matkul' => 'PBO', 'Nama' => 'project pbo', 'Deadline' => '10 November 2026', 'Status' => 'Belum Selesai'],
            ['Matkul' => 'MKSI', 'Nama' => 'project mksi', 'Deadline' => '30 November 2026', 'Status' => 'Belum Selesai'],
            ['Matkul' => 'ADPL', 'Nama' => 'project adpl', 'Deadline' => '10 November 2026', 'Status' => 'Belum Selesai'],
            ['Matkul' => 'KB', 'Nama' => 'project kb', 'Deadline' => '30 November 2026', 'Status' => 'Belum Selesai'],
            ['Matkul' => 'PFungsioal', 'Nama' => 'presentasi', 'Deadline' => '10 November 2026', 'Status' => 'Belum Selesai']
        ];

        $tugasPerMatkul = collect($tugas)->groupBy('Matkul')->map(function ($items) {
            return $items->map(function ($item) {
                return [
                    'nama' => $item['Nama'],
                    'Deadline' => $item['Deadline'],
                    'Status' => $item['Status'],
                ];
            });
        });

        return view('pengelolaan', ['username' => $username, 'tugasPerMatkul' => $tugasPerMatkul]);
    }
    public function profile(Request $request)
    {
        $username = $request->input('username');
        $profile = ['Nama' => 'Said Idrus',
                    'NIM' => '252410103093',
                    'Kelas' => 'C',
                    'Program Studi' => 'Informatika', 
        ];
        return view('profile', ['username' => $username, 'profile' => $profile]);
    }
}
