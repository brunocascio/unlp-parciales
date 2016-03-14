<?php

use Illuminate\Database\Seeder;

use App\Config;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Config::create([
        'key' => 'title',
        'value' => 'UNXParciales',
      ]);

      Config::create([
        'key' => 'google-analitycs',
        'value' => '',
      ]);
    }
}
