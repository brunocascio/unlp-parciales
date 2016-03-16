<?php

namespace App;

class UnxUser extends User
{
  protected $table = 'users';

  public static $ROLE_ADMIN = 'admin';
  public static $ROLE_MODERATOR = 'moderator';
  public static $ROLE_USER = 'user';

  public function is( $role )
  {
    return $this->role === 'admin' || $this->role === $role;
  }

  public function isAdmin()
  {
    return $this->is(static::$ROLE_ADMIN);
  }

  public function isModerator()
  {
    return $this->is(static::$ROLE_MODERATOR);
  }

  public function setPasswordAttribute($password)
  {
    $this->attributes['password'] = bcrypt($password);
  }

  public function setRoleAttribute($role)
  {
    $this->attributes['role'] = $role;
  }
}
