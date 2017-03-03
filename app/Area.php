<?php

namespace ZooVirtual;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table = "areas";
    protected $fillable = ['area', 'estatus'];

    public function especie() {
        return $this->belongsTo('ZooVirtual\Especie', 'id');
    }
}
