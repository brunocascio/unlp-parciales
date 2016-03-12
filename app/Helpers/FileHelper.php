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
    function get_public_resources_path($path = null)
    {
      return public_path() . "/files/{$path}";
    }
}

if (!function_exists('get_public_files_url')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function get_public_files_url($path = null)
    {
      return  url("/files/{$path}");
    }
}
