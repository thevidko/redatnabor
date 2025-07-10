<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method === "PUT") {
            return [
                'categoryId' => 'required|integer|exists:categories,id',
                'title' => 'required|string|max:255',
                'done' => 'boolean', //TODO required?
            ];
        }else{
            return [
                'categoryId' => 'sometimes|required|integer|exists:categories,id',
                'title' => 'sometimes|required|string|max:255',
                'done' => 'sometimes|boolean', //TODO required?
            ];
        }

    }

    protected function prepareForValidation()
    {
        if ($this->has('categoryId')) {
            $this->merge([
                'category_id' => $this->categoryId
            ]);
        }
    }
}
