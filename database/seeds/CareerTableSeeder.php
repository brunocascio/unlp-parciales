<?php

use Illuminate\Database\Seeder;

use App\Career;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Career::create([
        'name' => 'Licenciatura en Sistemas'
      ]);

      Career::create([
        'name' => 'Licenciatura en Informática'
      ]);

      Career::create([
        'name' => 'Analista Programador Universitario'
      ]);
    }
}
