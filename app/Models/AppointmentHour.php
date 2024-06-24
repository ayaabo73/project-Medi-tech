<?php

namespace App\Models;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AppointmentHour extends Model
{ 
    use HasFactory;

    protected  $fillable=[
        'id',
        'doctors_id',
        'day_id',
        'from',
        'to',
        'step',

    ];

    public function TimesPeriod()
    {
      $times=CarbonInterval::minute($this->step)->toPeriod($this->from,$this->to)->toArray();
      return array_map(fn($time)=>$time->format('H:i'),$times);
    }


    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctors_id','id');
    }
    public function days(){
        return $this->belongsTo(days::class,'days_id','id');
    }
}

