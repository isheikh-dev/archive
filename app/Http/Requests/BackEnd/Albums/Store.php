<?php

namespace App\Http\Requests\Backend\Albums;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
        $rules = [
            'name' => ['required', 'max:191'],
            'category' => ['required'  ,'integer' ],
            'sub_category' => ['required'  ,'integer' ],
            'location' => ['required'  ,'integer' ],
            'adminstration' => ['required'  ,'integer' ],
            'department' => ['required'  ,'integer' ],
            'date' => ['required' ,'date' ],
            'school' => ['required' ,'integer' ],
            //'attachments' => ['required', 'mimes:jpeg,bmp,png,psd,docx,doc,pdf'],
        ];

        if($this->method() == 'PUT'){
            //'attachments' => ['mimes:jpeg,bmp,png,psd,docx,doc,pdf'],
        }

        return $rules;
    }

   public function attributes(){

        return [
            'category' => 'التصنيف',
            'sub_category' => 'التصنيف الفرعي',
            'location' => 'مكان الفعالية',
            'adminstration' => 'الإدارة',
            'department' => 'القسم',
            'school' => 'المدرسة',
            'attachments' => 'المرفقات',
        ];

   }
    
}
