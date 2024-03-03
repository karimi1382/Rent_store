<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    public function project_types(){
        return $this->belongsTo(project_type::class);
    }
    public function orders(){
        return $this->hasMany(order::class);
    }
}
