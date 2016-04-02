<?php

use Illuminate\Database\Seeder;
use App\UnxUser as User;

class UserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $password = str_random(10);

    User::create([
      'name' => 'admin',
      'email' => 'admin@site.com',
      'password' => bcrypt($password),
      'role' => 'admin'
    ]);
  }
}
