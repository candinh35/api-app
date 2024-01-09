<?php

namespace App\Service;

use App\interface\HomeInterface;
use App\Models\Product;

class HomeService implements HomeInterface
{

    public function getPaged($request)
    {
        $products = Product::orderBy('created_at', 'desc')->paginate($request->size);
        foreach ($products as $index => $product){
            $product['rating'] = [
                'rate' =>  round(1.1 * rand(1,4), 1),
                'count' => $index + rand(1,10),
            ];
        }
        return $products;
    }
}
