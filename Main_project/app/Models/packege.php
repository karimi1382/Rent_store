<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packege extends Model
{
    use HasFactory;
    public function order(){
        return $this->hasMany(order::class);
    }
}
