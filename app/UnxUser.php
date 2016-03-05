<?php

namespace App;

class UnxUser extends User
{
  protected $table = 'users';

  protected $guarded = [
    'role'
  ];

  public function is( $role ) {
    return $this->role && $this->role === $role;
  }
}
