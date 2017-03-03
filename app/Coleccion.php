<?php

namespace ZooVirtual;

use Illuminate\Database\Eloquent\Model;

class Coleccion extends Model
{
    protected $table = "coleccions";
    protected $fillable = ['id', 'coleccion', 'estatus'];

    public function especie() {
        return $this->belongsTo('ZooVirtual\Especie', 'id');
    }
 }
