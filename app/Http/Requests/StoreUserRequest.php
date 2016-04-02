<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Auth;

class StoreUserRequest extends Request
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return Auth::user()->isAdmin();
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    $roles = implode(",", getAvailableRoles());

    return [
      "name" => "required|alpha|min:4|max:50",
      "email" => "required|email|unique:users,email",
      "password" => "required|min:8|max:100",
      "role" => "required|in:{$roles}",
    ];
  }
}
