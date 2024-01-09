<?php

namespace App\Service;

use App\interface\HomeInterface;
use App\Models\Product;

class HomeService implements HomeInterface
{

    public function getPaged()
    {
        return Product::orderBy('created_at', 'desc')->paginate(5);
    }
}
