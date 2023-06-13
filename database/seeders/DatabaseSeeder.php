<?php

namespace Database\Seeders;

use App\Models\Kkn;
use App\Models\Kp;
use App\Models\Mahasiswa;
use CreateKpTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Mahasiswa::create([
            'nama' => 'nashrullah',
            'jenis_kelamin' => 'pria',
            'agama' => 'islam',
            'jurusan' => 'teknik informatika',
            'nim' => '3120500008',
            'email' => 'nashrullah@gmail.com',
            'alamat' => 'waru',
            'semester' => '10',
            'tahun_angkatan' => '2019',
            'program' => 'KP',

            
            
        ]);

        Kp::create([
            'id_mahasiswa' => 1,
            'data_kelompok' => 'navis,salwa,faiq',
            'tempat_kp' => 'PT Ralali',
            'waktu_mulai' => '2024-1-1',
            'waktu_berakhir' => '2024-2-2',
            'maps' => 'jl.rajawali no 112',
        ]);

        Kkn::create([
            'id_mahasiswa' => 1,
            'data_kelompok' => 'navis,salwa,faiq',
            'tempat_kkn' => 'Desa kembang desa',
            'waktu_mulai' => '2024-1-1',
            'waktu_berakhir' => '2024-2-2',
            'maps' => 'Jl. rusunawa, Ds Kembang desa',
            'program_kkn' => 'pdf',

        ]);

    }
}
