<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	\DB::table('usuarios')->insert([
  		'id' => 1,
  		'rut' => '19.766.223-3',
      'nombre' => 'Mauricio',
      'apellido' => 'Angulo',
      'telefono' => '676656765',
  		]);
    \DB::table('usuarios')->insert([
      'id' => 2,
      'rut' => '14.876.455-3',
      'nombre' => 'Cristobal',
      'apellido' => 'Berrios',
      'telefono' => '567886587',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 3,
      'rut' => '15.878.434-3',
      'nombre' => 'Camilo',
      'apellido' => 'Cuevas',
      'telefono' => '346545678',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 4,
      'rut' => '19.766.435-3',
      'nombre' => 'Adrian',
      'apellido' => 'Herrera',
      'telefono' => '876765456',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 5,
      'rut' => '19.433.987-2',
      'nombre' => 'Benjamín',
      'apellido' => 'Huete',
      'telefono' => '765665434',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 6,
      'rut' => '17.766.567-k',
      'nombre' => 'Gino',
      'apellido' => 'Zerega',
      'telefono' => '876765487',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 7,
      'rut' => '19.766.654-9',
      'nombre' => 'Edgardo',
      'apellido' => 'Fuentealba',
      'telefono' => '765425765',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 8,
      'rut' => '21.766.876-5',
      'nombre' => 'Marco',
      'apellido' => 'Reyes',
      'telefono' => '875434543',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 9,
      'rut' => '19.766.245-9',
      'nombre' => 'Juan',
      'apellido' => 'Gonzales',
      'telefono' => '876587653',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 10,
      'rut' => '18.683.667-7',
      'nombre' => 'Pedro',
      'apellido' => 'Manríquez',
      'telefono' => '324123473',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 11,
      'rut' => '17.436.323-2',
      'nombre' => 'Domingo',
      'apellido' => 'Obreque',
      'telefono' => '765478654',
      ]);
    \DB::table('usuarios')->insert([
      'id' => 12,
      'rut' => '15.432.423-8',
      'nombre' => 'Leandro',
      'apellido' => 'Vargas',
      'telefono' => '934123456',
      ]);
    
  }
}
