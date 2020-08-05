<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected  $fillable = ['title'];
    public function seed(){
        return $this->belongsTo('App\Seed', 'seed_id');
    }
    
}
