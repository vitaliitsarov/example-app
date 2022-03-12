<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema()
 */
class ProductStoreRequest extends FormRequest
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
     * @OA\Property(type="string", default="Tested Product", description="title", property="title"),
     * @OA\Property(type="number", format="float", default="100.00", description="price", property="price"),
     * @OA\Property(type="integer", format="int32", default="5", description="count", property="count"),
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
			'price' => 'numeric|between:0,999999999999.99',
			'count' => 'numeric|min:0',
        ];
    }
}
