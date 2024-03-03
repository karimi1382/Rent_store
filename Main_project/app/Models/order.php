<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function projects(){
        return $this->belongsTo(project::class);
    }
    public function packeges(){
        return $this->belongsTo(packege::class);
    }
    public function filds(){
        return $this->belongsTo(fild::class);
    }
    protected $fillable=['user_id','project_id','packege_id','fild_id','name','color_1','color_2','color_3','url','admin','takephoto'];
}
