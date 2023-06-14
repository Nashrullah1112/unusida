<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()->count(5)->create();

        foreach ($users as $user) {
            $dosen = Dosen::factory()->create([
                'user_id' => $user->id,
            ]);

            Mahasiswa::factory()->create([
                'user_id' => $user->id,
                'dosen_id' => $dosen->id,
            ]);
        }
    }
}
