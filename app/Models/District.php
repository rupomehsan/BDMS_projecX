<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profile(){
        return $this->hasMany(Profile::class);
    } 

    public function post(){
        return $this->hasMany(Post::class);
    } 
}
