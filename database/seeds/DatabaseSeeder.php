<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(GeneroSeeder::class);
      $this->call(AutorSeeder::class);
      $this->call(EstadoSeeder::class);
      $this->call(UsuarioSeeder::class);
      $this->call(LibroSeeder::class);
    }
}
