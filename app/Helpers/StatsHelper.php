<?php

use App\UnxUser as User;

if (!function_exists('totalUsers')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalUsers()
    {
      return User::count();
    }
}

if (!function_exists('totalCareers')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalCareers()
    {
      return 1;
    }
}
