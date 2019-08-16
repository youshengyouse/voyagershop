<?php

namespace App\Http\Controllers\Api\Shop;

use App\Models\Shop\ShopProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getProductsList()
    {
        $products = json_encode(ShopProduct::paginate(5));

        return $products;
    }

    public function getProductDetail($slug)
    {
        $product = json_encode(ShopProduct::where('slug', "$slug" )->get());

        return $product;
    }
}
