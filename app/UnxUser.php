<?php

namespace App;

class UnxUser extends User
{
  protected $table = 'users';

  public function is( $role ) {
    return $this->role && $this->role === $role;
  }

  public function isAdmin() {
    return $this->is('admin');
  }
}
