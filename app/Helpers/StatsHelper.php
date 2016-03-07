<?php

use App\UnxUser as User;
use App\Career;

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
      return Career::count();
    }
}
