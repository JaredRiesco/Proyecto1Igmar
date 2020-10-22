<?php

use Illuminate\Database\Seeder;
use App\Usuarios;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Usuarios::class, 25)->create();
    
    }
}
