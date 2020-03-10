<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';

    protected $primaryKey='idcategoria';

    public $timestamps=false;

    protected $fillable=[
        'nomrbe',
        'descripcion', 
        'condicion'
    ];

    protected $guarded = [
        
    ];

}
