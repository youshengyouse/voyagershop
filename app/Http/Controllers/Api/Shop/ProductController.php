<?php

namespace App\Http\Controllers\Api\Shop;

use App\Models\Shop\ShopProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getProductsList()
    {
        $productList = json_encode(ShopProduct::paginate(5));

        return $productList;
    }

    public function getProductDetail($slug)
    {
        $productDetail = json_encode(ShopProduct::where('slug', "$slug" )->get());

        return $productDetail;
    }
}
