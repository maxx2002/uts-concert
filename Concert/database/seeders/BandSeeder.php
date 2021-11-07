<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('band')->insert([
            'band_name' => 'Antivirus',
            'genre' => 'Rock',
            'band_member' => '4',
            'band_price' => '2000000',
            'band_email' => 'antivirus@gmail.com',
            'band_phone' => '093649728475',
            'band_poster' => 'band-posters/antivirus.jpg'
        ]);

        DB::table('band')->insert([
            'band_name' => 'Kangen',
            'genre' => 'Dangdut',
            'band_member' => '4',
            'band_price' => '3000000',
            'band_email' => 'kangen@gmail.com',
            'band_phone' => '093649728475',
            'band_poster' => 'band-posters/kangen.jpeg'
        ]);

        DB::table('band')->insert([
            'band_name' => 'Pas',
            'genre' => 'Pop',
            'band_member' => '5',
            'band_price' => '4000000',
            'band_email' => 'pas@gmail.com',
            'band_phone' => '093649728475',
            'band_poster' => 'band-posters/pas.jpeg'
        ]);
    }
}
