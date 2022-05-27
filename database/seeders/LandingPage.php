<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LandingPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('landing_pages2s')->insert([
            'cta' => 'bebas',
            'visi' => 'visi',
            'misi' => 'misi',
            'no_hp' => '123',
            'alamat' => 'Sidoarjo',
            'email' => 'email@gmail.com',
            'ig' => 'startup',
            'fb' => 'startup',
            'deskripsi' => 'deskripsi',
        ]);
    }
}
