<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showMainPage()
    {
        $MilkProducts = Product::where('category', 'MilkProduct')->get();
        $VegetablesProducts= Product::where('category', 'VegetablesProduct')->get();
        $fruitsandberriesProducts= Product::where('category', 'FruitsAndBerriesProduct')->get();
        $CandyProducts= Product::where('category', 'CandyProduct')->get();
        $MeatAndBidrds= Product::where('category', 'MeatAndBirdProduct')->get();
        $FishProducts= Product::where('category', 'FishProduct')->get();
        return view('home.index',compact('MilkProducts','VegetablesProducts','fruitsandberriesProducts','CandyProducts','MeatAndBidrds','FishProducts' ));
    }

}
