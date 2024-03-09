<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    public function answer_tickets(){
        return $this->hasone(answer_ticket::class);
    }
}
