<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Pending extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pending')->insert([
            'name'=>'aya',
            'email'=>'aya33@gmail.com',
            'password'=>Hash::make('123456789')
          ]);
    }
}
