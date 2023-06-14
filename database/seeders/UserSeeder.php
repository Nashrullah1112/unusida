<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            // Create a user for Mahasiswa
            $mahasiswaFirstName = $faker->firstNameMale;
            $mahasiswaLastName = $faker->lastName;
            $mahasiswaFullName = $mahasiswaFirstName . ' ' . $mahasiswaLastName;
            $dosenFirstName = $faker->firstNameMale;
            $dosenLastName = $faker->lastName;
            $dosenFullName = $dosenFirstName . ' ' . $dosenLastName;

            $userMahasiswa = User::create([
                'name' => $mahasiswaFullName,
                'email' => $mahasiswaFirstName . '@student.unusida.ac.id',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'verified' => false,
            ]);

            // Create a user for Mahasiswa
            $userDosen = User::create([
                'name' => $dosenFullName,
                'email' => $dosenFirstName . '@lecturer.unusida.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'verified' => false,
            ]);

            // Create a dosen and associate the user
            $dosen = Dosen::create([
                'user_id' => $userDosen->id,
                'alamat' => $faker->address(),
                'nip' => $faker->numberBetween(100000000, 999999999),
                'gender' => $faker->randomElement(['laki-laki', 'perempuan']),
                'agama' => $faker->randomElement(['islam', 'kristen', 'katolik']),
            ]);

            // Create a mahasiswa and associate the user and dosen
            Mahasiswa::create([
                'user_id' => $userMahasiswa->id,
                'dosen_id' => $dosen->id,
                'nim' => $faker->numberBetween(100000000, 999999999),
                'gender' => $faker->randomElement(['laki-laki', 'perempuan']),
                'agama' => $faker->randomElement(['islam', 'kristen', 'katolik']),
                'jurusan' => 'Teknik Informatika',
                'tahun_angkatan' => '2020',
                'semester' => '5',
                'alamat' => $faker->address(),
                'program' => $faker->randomElement(['kp', 'kkn']),
            ]);
        }

        // Create additional users, dosen, and mahasiswa as needed
    }
}
