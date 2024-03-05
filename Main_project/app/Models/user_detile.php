<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_detile extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(user::class,'user_id','id');
    }
    protected $fillable=['user_id','city','country','address','mobile','instagram','linkedin','mobile_verify','email_verify','mobile_random_code','email_random_code','photo_address'];

}
