<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    use HasFactory;
    protected  $fillable=['day'];
    
    public function hours(){
        return $this->hasMany(days::class,'doctors_id','id');
    }
}
