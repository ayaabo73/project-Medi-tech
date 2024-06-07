<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Appointment extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'doctorID',
        'sectionID',
        'name',
        'email',
        'phone',
        'type',
        'appointment',
        'notes',
    ];
   
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctorID','id');
    }
    public function section(){
        return $this->belongsTo(Section::class,'sectionID','id');
    }
    
}


