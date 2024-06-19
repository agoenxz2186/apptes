<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
        DB::table('pasiens')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tanggal_lahir' => $faker->date,
                'tempat_lahir' => $faker->city,
                'golongan_darah' => $faker->randomElement(['A', 'B', 'AB', 'O']),
                'status_perkawinan' => $faker->randomElement(['Belum Menikah', 'Menikah', 'Janda', 'Duda']),
                'pekerjaan' => $faker->jobTitle,
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
                'no_ktp' => $faker->numerify('###########'),
                'no_bpjs' => $faker->numerify('###########'),
                'nama_wali' => $faker->name,
                'alamat_wali' => $faker->address,
                'no_hp_wali' => $faker->phoneNumber,
                'hubungan_wali' => $faker->randomElement(['Orang Tua', 'Saudara', 'Teman']),
            ]);

}



    }
}
