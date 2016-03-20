<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Carbon\Carbon;

class StoreResourceRequest extends Request
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
    return [
      "name" => "required|min:4|max:100",
      "resource_date" => "required|date|after:{$this->after()}|before:{$this->before()}",
      "number" => "numeric|max:10",
      "course_id" => "required|exists:courses,id",
      "teacher_id" => "exists:teachers,id",
      "type_id" => "required|exists:types,id",
      "description" => "max:255",
      "file" => "required|max:10000|mimes:{$this->file_extensions()}",
    ];
  }

  private static function before(){
    return Carbon::tomorrow()->toDateString();
  }

  private static function after(){
    return Carbon::parse("01/01/2000")->toDateString();
  }

  private static function file_extensions() {
    return implode(',', file_allowed_extensions());
  }
}
