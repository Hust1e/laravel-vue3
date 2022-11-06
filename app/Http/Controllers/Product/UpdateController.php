<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        $request->session()->flash('product.status.update', "The product updated successfully");

        return view('product.show', compact('product'));
    }
}
