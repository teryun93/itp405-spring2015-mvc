<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Artist extends Model {
    
    public function songs()
    {
        return $this->hasMany('App\Models\Song');
    }
    
    public function jam() 
    {
        echo "jamming";
        
    }
    
}


