<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket_type extends Model
{
    use HasFactory;
    public function main_tickets(){
        return $this->hasMany(main_ticket::class);
    }
}
