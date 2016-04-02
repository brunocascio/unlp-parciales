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
      $this->call(UserTableSeeder::class);
      $this->call(ConfigTableSeeder::class);
      $this->call(TypeTableSeeder::class);
      $this->call(TeacherTableSeeder::class);
      $this->call(CareerTableSeeder::class);
      $this->call(CourseTableSeeder::class);
      $this->call(CourseCareerTableSeeder::class);
    }
}
