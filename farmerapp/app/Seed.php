<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    
    protected $fillable = [
        'seedname'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'id');
    }
    public function getinstruction(){
        return $this->hasMany('App\Instruction', 'seed_id', 'id');
    }
}
