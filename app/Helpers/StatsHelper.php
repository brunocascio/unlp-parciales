<?php

use App\UnxUser as User;
use App\Career;
use App\Course;

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

if (!function_exists('totalCourses')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalCourses()
    {
      return Course::count();
    }
}
