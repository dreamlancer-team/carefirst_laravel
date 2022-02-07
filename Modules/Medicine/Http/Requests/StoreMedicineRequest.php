<?php

namespace Modules\Medicine\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicineRequest extends FormRequest
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
            'name' => 'required|unique:medicines,name',
            'description' => 'sometimes',
            'medicine_brand_id' => 'required',
            'medicine_category_id' => 'required',
            'medicine_type_id' => 'required',
            'user_id' => 'required',
        ];
    }
}
