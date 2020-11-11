<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class piezas extends Model
{
    protected $table ='piezas';
    protected $filable=['Nombre','Descripcion','NumeroPiezas','CostoPieza'];
}
