<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(usuarioSeeder::class);
        $this->call(publicacionesSeeder::class);
        $this->call(comentariosSeeder::class);
    }
   
    
}

