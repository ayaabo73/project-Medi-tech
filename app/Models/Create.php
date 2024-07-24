<?php

namespace App\Models;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Create extends Model
{ 
    use HasFactory;

    protected $guarded= [];

    public function TimesPeriod()
    {
      $times=CarbonInterval::minute($this->step)->toPeriod($this->from,$this->to)->toArray();
      return array_map(fn($time)=>$time->format('H:i'),$times);
    }


}

