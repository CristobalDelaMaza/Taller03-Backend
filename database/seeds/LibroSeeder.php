<?php

use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	\DB::table('libros')->insert([
  		'id' => 1,
  		'titulo' => 'Patria',
      'anno' => '1872',
      'autor_id' => 6,
      'genero_id' => 1,
  		]);
    \DB::table('libros')->insert([
      'id' => 2,
      'titulo' => 'Adelgaza para siempre',
      'anno' => '1772',
      'autor_id' => 7,
      'genero_id' => 2,
      ]);
    \DB::table('libros')->insert([
      'id' => 3,
      'titulo' => 'Destroza este libro',
      'anno' => '2019',
      'autor_id' => 8,
      'genero_id' => 1,
      ]);
    \DB::table('libros')->insert([
      'id' => 4,
      'titulo' => 'Al fondo a la izquiera',
      'anno' => '1092',
      'autor_id' => 9,
      'genero_id' => 1,
      ]);
    \DB::table('libros')->insert([
      'id' => 5,
      'titulo' => 'El arte de no amargarse la vida',
      'anno' => '2018',
      'autor_id' => 10,
      'genero_id' => 1,
      ]);
    \DB::table('libros')->insert([
      'id' => 6,
      'titulo' => 'Elsa Punset',
      'anno' => '1726',
      'autor_id' => 2,
      'genero_id' => 1,
      ]);
    \DB::table('libros')->insert([
      'id' => 7,
      'titulo' => 'Ser feliz no es caro',
      'anno' => '1766',
      'autor_id' => 1,
      'genero_id' => 1,
      ]);
    \DB::table('libros')->insert([
      'id' => 8,
      'titulo' => 'Tómate un respiro',
      'anno' => '1997',
      'autor_id' => 4,
      'genero_id' => 3,
      ]);
    \DB::table('libros')->insert([
      'id' => 9,
      'titulo' => 'Cuando me veas',
      'anno' => '2015',
      'autor_id' => 9,
      'genero_id' => 4,
      ]);
    \DB::table('libros')->insert([
      'id' => 10,
      'titulo' => 'Crea tus sueños',
      'anno' => '2007',
      'autor_id' => 3,
      'genero_id' => 2,
      ]);


    
  }
}
