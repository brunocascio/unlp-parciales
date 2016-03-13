<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCourseFormRequest extends Request
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    // dd($this->request->all());

    return [
      'name' => "required|unique:courses,name,{$this->courses}|min:4|max:100",
      'careers.*.id' => 'required|distinct|exists:careers,id'
    ];
  }
}
