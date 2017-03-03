<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->delete();

        \ZooVirtual\Color::create(['color' => 'Azul']);
        \ZooVirtual\Color::create(['color' => 'Rojo']);
        \ZooVirtual\Color::create(['color' => 'Morado']);
        \ZooVirtual\Color::create(['color' => 'Verde']);
        \ZooVirtual\Color::create(['color' => 'Negro']);
        \ZooVirtual\Color::create(['color' => 'Blanco']);
        \ZooVirtual\Color::create(['color' => 'Naranja']);
        \ZooVirtual\Color::create(['color' => 'Rosa']);
        \ZooVirtual\Color::create(['color' => 'Gris']);
        \ZooVirtual\Color::create(['color' => 'Amarillo']);
        \ZooVirtual\Color::create(['color' => 'Marrón']);

    }
}
