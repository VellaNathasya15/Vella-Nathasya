<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswanewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 100; $i++)
        {
            DB::table('mahasiswanew')->insert([
                'nim' => $faker->numberBetween($min = 00000000, 99999999),
                'nama' => $faker->name(),
                'gender' => $faker->randomElement($array = array('pria', 'wanita')),
                'jurusan' => $faker->randomElement($array = array('sistem informasi', 'informatika', 'kedokteran', 'arsitek','teknik sipil')),
                'bidang_minat' => $faker->randomElement($array = array ('SIE', 'SIK','Farmasi','Teknologi bahan','Konstruksi','Health care','Database','Nutrisi','UI/UX','Studi perancangan kota','Studi praktik arsitektur'))
            
            ]);
        }
    }
}
