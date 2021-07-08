<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';

    public $timestamps = false;
    
    
    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
}

