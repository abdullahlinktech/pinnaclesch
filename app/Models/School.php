<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class School extends Model
{
    use HasFactory;

    public function allclass(){
        return $this->hasMany(Allclass::class);
    }
    public function section() {
        return $this->hasMany(Section::class);
    }

}
