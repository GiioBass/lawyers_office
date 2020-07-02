<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class Document_typeSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert([
            ['id' => 1, 'type' => 'CC', 'name' => 'Cedula de Ciudadanía'],
            ['id' => 2, 'type' => 'CE', 'name' => 'Cedula de Extranjería'],
            ['id' => 3, 'type' => 'NIT', 'name' => 'Numero de Identificacion Tributaria'],
            ['id' => 4, 'type' => 'RUT', 'name' => 'Registro Unico Tributario'],
            ['id' => 5, 'type' => 'PA', 'name' => 'Pasaporte'],
            ['id' => 6, 'type' => 'RC', 'name' => 'Registro Civil'],
            ['id' => 7, 'type' => 'TI', 'name' => 'Tarjeta de Identidad'],
        ]);
    }
}
