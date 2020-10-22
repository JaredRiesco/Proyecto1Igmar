<?php

use Illuminate\Database\Seeder;
use App\Publicaciones;

class publicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Publicaciones::class, 75)->create();
    }
}
