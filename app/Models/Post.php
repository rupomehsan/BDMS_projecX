<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bloodgp(){
        return $this->belongsTo(Bloodgroup::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function station(){
        return $this->belongsTo(Station::class);
    }

    public function userdonate(){
        return $this->hasMany(Userdonate::class);
    }


}
