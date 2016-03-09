<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Type::create([
        'name' => 'Resúmenes'
      ]);

      Type::create([
        'name' => 'Parciales'
      ]);

      Type::create([
        'name' => 'Finales'
      ]);

      Type::create([
        'name' => 'Recuperatorios'
      ]);

      Type::create([
        'name' => 'Coloquios'
      ]);

      Type::create([
        'name' => 'Teorías'
      ]);

      Type::create([
        'name' => 'Prácticas'
      ]);

      Type::create([
        'name' => 'Seminarios'
      ]);
    }
}
