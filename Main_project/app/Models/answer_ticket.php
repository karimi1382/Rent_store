<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer_ticket extends Model
{
    use HasFactory;
    public function files(){
        return $this->belongsTo(file::class);
    }

    public function users(){
        return $this->hasMany(user::class);
    }
    public function main_tickets(){
        return $this->belongsTo(main_ticket::class,'main_ticket_id','id');
    }
    
}
