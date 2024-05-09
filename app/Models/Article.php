<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Article extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'doctorID',
    ];
   
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctorID','id');
    }
    
}


