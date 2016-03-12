<?php

use Illuminate\Http\UploadedFile;

if (!function_exists('file_allowed_extensions')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function file_allowed_extensions()
    {
      return [ 'jpeg', 'jpg', 'png', 'zip', 'rar', 'pdf' ];
    }
}

if (!function_exists('file_allowed_extensions_string')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function file_allowed_extensions_string()
    {
      return '"jpeg", "jpg", "png", "zip", "rar", "pdf"';
    }
}

if (!function_exists('get_public_resources_path')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function get_public_resources_path()
    {
      return public_path() . "/files/";
    }
}
