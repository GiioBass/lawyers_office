<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
           [ 'id' => 1, 'name' => 'No iniciado'],
           [ 'id' => 2, 'name' => 'En tramite'],
           [ 'id' => 3, 'name' => 'Archivado'],
           [ 'id' => 4, 'name' => 'Finalizado'],
        ]);
    }
}
