<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_type extends Model
{
    use HasFactory;
    public function projects(){
        return $this->hasMany(project::class);
    }
}
