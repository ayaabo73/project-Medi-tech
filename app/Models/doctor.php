<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'location',
        'name',
        'email',
        'password',
        'sections_id',
        'phone',
        'image',
    ];
    public function section(){
        return $this->belongsTo(Section::class,'sections_id','id');
    }
    public function hours(){
        return $this->hasMany(AppointmentHour::class,'doctors_id','id');
    }
   
    
}


