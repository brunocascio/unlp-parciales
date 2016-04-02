<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends StoreUserRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return parent::authorize();
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    $rules = parent::rules();

    // Don't check emails existence when is updated
    $rules['email'] .= ",{$this->users}";

    // Is password updated?
    if ( empty($this->get('password')) )
    {
      unset($rules['password']);
    }

    return $rules;
  }
}
