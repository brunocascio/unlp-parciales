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
