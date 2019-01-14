<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GpfAdvanceValidation extends FormRequest
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
            'approvedby_cbo'    => 'required',
            'order_no_txt'      => 'required | alpha_dash',
            'order_dt_txt'      => 'required | date',
            'advance_type_cbo'  => 'required',
            'reason_cbo'        => 'required',
            'sanction_year_cbo' => 'required',
            'approved_amt_txt'  => 'required | numeric',
            'category_cbo'      => 'required',
            'designation_cbo'   => 'required',
            'gpf_no_txt'        => 'required | numeric',
            'emp_name_txt'      => 'required |',

        ];
    }
}
