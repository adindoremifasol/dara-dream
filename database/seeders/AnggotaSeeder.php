<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['6304221001', 'Ahmad Fauzi', 'ahmad.fauzi@student.polbeng.ac.id', 'Keamanan Sistem Informasi', 2022],
            ['6304221002', 'Bella Anggraini', 'bella.anggraini@student.polbeng.ac.id', 'Keamanan Sistem Informasi', 2022],
            ['6304231003', 'Citra Dewi', 'citra.dewi@student.polbeng.ac.id', 'Rekayasa Perangkat Lunak', 2023],
            ['6304231004', 'Dimas Prayoga', 'dimas.prayoga@student.polbeng.ac.id', 'Keamanan Sistem Informasi', 2023],
            ['6304231005', 'Eka Saputra', 'eka.saputra@student.polbeng.ac.id', 'Teknik Informatika', 2023],
            ['6304241006', 'Fitri Handayani', 'fitri.handayani@student.polbeng.ac.id', 'Keamanan Sistem Informasi', 2024],
            ['6304241007', 'Gilang Ramadhan', 'gilang.ramadhan@student.polbeng.ac.id', 'Rekayasa Perangkat Lunak', 2024],
            ['6304241008', 'Hana Lestari', 'hana.lestari@student.polbeng.ac.id', 'Teknik Informatika', 2024],
        ];

        foreach ($data as $item) {
            Anggota::create([
                'nim' => $item[0],
                'nama' => $item[1],
                'email' => $item[2],
                'program_studi' => $item[3],
                'angkatan' => $item[4],
            ]);
        }
    }
}