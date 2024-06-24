<?php

namespace Database\Seeders;

use App\Models\Days;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days=config('appointment.days');
        foreach($days as $day){
           Days::query()->updateOrCreate(['day'=>$day]);
        }
    }
}
