<?php

namespace Database\Seeders;

use App\Models\AppointmentHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $days=config('appointment.days');
       foreach( $days as $day){
        AppointmentHour::query()->updateOrCreate(['day'=>$day],
        [
            'from'=>"09:00",
            'to'=>'13:00',
            'step'=>30
        ]);
       }
    }
}
