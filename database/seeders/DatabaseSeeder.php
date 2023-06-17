<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\User;
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
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@unusida.ac.id',
            'password'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role'      => 'admin',
            'verified'  => true,
        ]);
        $userDosen = User::create([
            'name'      => 'Dosen',
            'email'     => 'dosen@lecturer.unusida.ac.id',
            'password'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role'      => 'dosen',
            'verified'  => true,
        ]);
        $userMahasiswa = User::create([
            'name'      => 'Mahasiswa',
            'email'     => 'mahasiswa@student.unusida.ac.id',
            'password'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role'      => 'mahasiswa',
            'verified'  => true,
        ]);

        // Create a dosen and associate the user
        $dosen = Dosen::create([
            'user_id' => $userDosen->id,
            'alamat' => 'Sepuluh Nopember Institute of Technology, Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya, East Java 60111',
            'nip' => '000000000',
            'gender' => 'laki-laki',
            'agama' => 'islam',
        ]);

        // Create a mahasiswa and associate the user and dosen
        Mahasiswa::create([
            'user_id' => $userMahasiswa->id,
            'dosen_id' => $dosen->id,
            'nim' => '000000000',
            'gender' => 'laki-laki',
            'agama' => 'islam',
            'jurusan' => 'Teknik Informatika',
            'tahun_angkatan' => '2020',
            'semester' => '5',
            'alamat' => 'Sepuluh Nopember Institute of Technology, Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya, East Java 60111',
            'program' => 'kp',
        ]);

        $this->call(UserSeeder::class);
    }
}
