<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestacionImagen extends Model
{
    protected $table = 'prestaciones_imag';

    protected $fillable = ['id', 'cod_sap','cod_imed','descripcion','valor_habil', 'valor_inhabil'];

    public $timestamps = false;
    
    
    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
}



