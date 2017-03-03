<?php

use Illuminate\Database\Seeder;
use ZooVirtual\Coleccion;

class ColeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coleccions')->delete();

        Coleccion::create(['coleccion' => 'Mamífero']);
        Coleccion::create(['coleccion' => 'Pájaro']);
        Coleccion::create(['coleccion' => 'Pez']);
        Coleccion::create(['coleccion' => 'Reptil']);
        Coleccion::create(['coleccion' => 'Anfibio']);

    }
}
