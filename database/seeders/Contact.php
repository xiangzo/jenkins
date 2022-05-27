<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'nama' => 'bunga',
            'email' => 'bungaelf@gmail.com',
            'subject' => 'test',
            'pesan' => 'gajah itu gendut',
            'status' => '2',
        ]);
    }
}
