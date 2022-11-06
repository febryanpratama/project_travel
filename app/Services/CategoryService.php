<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryService
{

    static function getAll()
    {
        $data = Category::get();

        return $data;
    }

    static function storeCat($data)
    {
        $validator = Validator::make($data, [
            'category_name' => 'required'
        ]);

        if ($validator->fails()) {
            return (object)[
                'status' => false,
                // 'message' => 'Your request has been processed failed',
                'message' => $validator->errors()->first()
            ];
        }
        # code...
        Category::create($data);

        return (object)[
            'status' => true,
            'message' => 'Your request has been processed successfully'
        ];
    }
}
