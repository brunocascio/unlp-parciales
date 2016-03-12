<?php

use App\UnxUser as User;
use App\Resource;
use App\Career;
use App\Course;
use App\Teacher;
use App\Type;

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

if (!function_exists('totalTeachers')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalTeachers()
    {
      return Teacher::count();
    }
}

if (!function_exists('totalTypes')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalTypes()
    {
      return Type::count();
    }
}

if (!function_exists('totalResources')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalResources()
    {
      return Resource::count();
    }
}

if (!function_exists('totalResourcesUnpublisheds')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function totalResourcesUnpublisheds()
    {
      return Resource::unpublished()->count();
    }
}
