<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Carbon\Carbon;

class UpdateResourceRequest extends StoreResourceRequest
{
  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    $rules = parent::rules();

    $rules['file'] = "mimes:{static::file_extensions()}";

    return $rules;
  }
}
