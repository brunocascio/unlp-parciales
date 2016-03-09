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
        User::create([
          'name' => 'admin',
          'email' => 'admin@site.com',
          'password' => bcrypt('change_this_password'),
          'role' => 'admin'
        ]);
    }
}
