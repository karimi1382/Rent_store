<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noti_send extends Model
{
    use HasFactory;
    public function noti_types(){
        return $this->belongsTo(noti_type::class,'noti_type_id','id');
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
    public function users(){
        return $this->belongsTo(user::class);
    }
    protected $fillable=['noti_type_id','order_id','user_id'];

}
