<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_ticket extends Model
{
    use HasFactory;
    public function answer_tickets(){
        return $this->hasMany(answer_ticket::class);
    }
    public function users(){
        return $this->hasMany(user::class);
    }
    public function ticket_types(){
        return $this->belongsTo(ticket_type::class,'ticket_type_id','id');
    }
}
