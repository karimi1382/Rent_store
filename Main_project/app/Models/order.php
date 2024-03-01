<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function project(){
        return $this->belongsTo(project::class);
    }
    public function packege(){
        return $this->belongsTo(packege::class);
    }
    public function fild(){
        return $this->belongsTo(fild::class);
    }
}
