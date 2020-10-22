<?php

use Illuminate\Database\Seeder;
use App\Comentarios;

class comentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comentarios::class, 75)->create();
    }
}
