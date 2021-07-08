<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $table = 'auditorias';

    public $timestamps = false;
    
    
    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
}

