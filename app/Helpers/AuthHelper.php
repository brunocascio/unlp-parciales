<?php

if (!function_exists('isAdmin')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function isAdmin()
    {
      return Auth::check() && Auth::user()->isAdmin();
    }
}

if (!function_exists('isModerator')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function isModerator()
    {
      return Auth::check() && Auth::user()->isModerator();
    }
}
