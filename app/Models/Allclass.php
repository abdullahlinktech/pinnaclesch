<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allclass extends Model
{
    use HasFactory;
    public function school(){
        return $this->belongsTo(School::class,'school_id', 'id');
    }
    public function section( ){
        return $this->hasMany(Section::class);
    }
}
