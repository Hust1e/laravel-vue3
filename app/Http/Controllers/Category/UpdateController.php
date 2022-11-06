<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequests\UpdateCategoryRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        $request->session()->flash('category.status.update', "The category updated successfully");

        return view('category.show', compact('category'));
    }
}
