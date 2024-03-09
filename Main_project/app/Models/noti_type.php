<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noti_type extends Model
{
    use HasFactory;
    public function noti_sends(){
        return $this->hasMany(noti_send::class);
    }
    protected $fillable=['sebject','text','url'];

}
