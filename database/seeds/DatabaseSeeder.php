<?php

use App\Affair;
use App\Client;
use App\Lawyer;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(Document_typeSeeder::class);

        factory(Client::class, 40)->create();
        factory(Lawyer::class,10)->create();
        factory(Affair::class, 40)->create();
    }
}
