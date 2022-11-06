<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequests\StoreCategoryRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        Category::FirstOrCreate($data);
        $request->session()->flash('category.status.create', "The category created successfully");

        return redirect()->route('category.index');
    }
}
