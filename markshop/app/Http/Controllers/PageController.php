<?php

namespace App\Http\Controllers;

use App\Http\Constants\Views;
use Illuminate\Http\Request;
use function MongoDB\BSON\fromJSON;

class PageController extends Controller
{
    public function getIndex()
    {
        $jsonString = file_get_contents(base_path('app\Http\Constants\product.json'));
        $product = json_decode($jsonString, false);
//        $product = json_encode($product1, true);
//        dd($product);
        return view(Views::home, ['product'=>$product]);
    }
}
