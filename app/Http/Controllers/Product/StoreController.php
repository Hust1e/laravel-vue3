<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequests\StoreProductRequest;
use App\Models\Product;

class StoreController extends Controller
{
    public function __invoke(StoreProductRequest $request)
    {
        $data = $request->validated();
        Product::FirstOrCreate($data);
        $request->session()->flash('product.status.create', "The product created successfully");

        return redirect()->route('product.index');
    }
}
