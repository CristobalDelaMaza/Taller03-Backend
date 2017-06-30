<?php

use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	\DB::table('autores')->insert([
  		'id' => 1,
  		'nombre' => 'Edgar Allan',
      'apellido' => 'Poe',
  		]);
  	\DB::table('autores')->insert([
  		'id' => 2,
  		'nombre' => 'George',
      'apellido' => 'Martin',
  		]);
  	\DB::table('autores')->insert([
  		'id' => 3,
      'nombre' => 'Mark',
      'apellido' => 'Twain',
  		]);
  	\DB::table('autores')->insert([
  		'id' => 4,
      'nombre' => 'León',
      'apellido' => 'Tolstoi',
  		]);
    \DB::table('autores')->insert([
      'id' => 5,
      'nombre' => 'William',
      'apellido' => 'Shakespeare',
    ]);
    \DB::table('autores')->insert([
      'id' => 6,
      'nombre' => 'Fernando',
      'apellido' => 'Aramburu',
    ]);
    \DB::table('autores')->insert([
      'id' => 7,
      'nombre' => 'Fernando',
      'apellido' => 'Aramburu',
    ]);
    \DB::table('autores')->insert([
      'id' => 8,
      'nombre' => 'Megan',
      'apellido' => 'Maxwell',
    ]);
    \DB::table('autores')->insert([
      'id' => 9,
      'nombre' => 'Paula',
      'apellido' => 'Hawkings',
    ]);
    \DB::table('autores')->insert([
      'id' => 10,
      'nombre' => 'Lorenzo',
      'apellido' => 'Silva',
    ]);
    \DB::table('autores')->insert([
      'id' => 11,
      'nombre' => 'Eva',
      'apellido' => 'García',
    ]);
    \DB::table('autores')->insert([
      'id' => 12,
      'nombre' => 'Carme',
      'apellido' => 'Chapparro',
    ]);
    \DB::table('autores')->insert([
      'id' => 13,
      'nombre' => 'Juan José',
      'apellido' => 'Millás',
    ]);
    \DB::table('autores')->insert([
      'id' => 14,
      'nombre' => 'Jesús',
      'apellido' => 'Cintora',
    ]);
    \DB::table('autores')->insert([
      'id' => 15,
      'nombre' => 'Ángela',
      'apellido' => 'Quintanas',
    ]);
    
  }
}
