<?php

namespace ZooVirtual;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "colors";
    protected $fillable = ['color', 'estatus'];

    public function especie() {
        return $this->belongsTo('ZooVirtual\Especie', 'id');
    }

}