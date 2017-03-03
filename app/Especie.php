<?php

namespace ZooVirtual;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    //
    protected $table = "especies";
    protected $fillable = ['nombre_comun', 'nombre_cientifico', 'descripcion', 'peso', 'altura', 'dato_curioso', 'id_coleccion', 'id_color'];
    protected $hidden = ['id_area'];

    public function color() {
        return $this->hasOne('ZooVirtual\Color', 'id'); // Le indicamos que se va relacionar con el atributo id
    }

    public function coleccion() {
        return $this->hasOne('ZooVirtual\Coleccion', 'id'); // Le indicamos que se va relacionar con el atributo id
    }

	public function area() {
        return $this->hasOne('ZooVirtual\Area', 'id'); // Le indicamos que se va relacionar con el atributo id
    }


}
