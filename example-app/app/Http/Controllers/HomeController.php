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
        $VegetablesProducts = Product::where('category', 'VegetablesProduct')->get();
        $fruitsandberriesProducts = Product::where('category', 'FruitsAndBerriesProduct')->get();
        $CandyProducts = Product::where('category', 'CandyProduct')->get();
        $MeatAndBidrds = Product::where('category', 'MeatAndBirdProduct')->get();
        $FishProducts = Product::where('category', 'FishProduct')->get();
        $FreezingProducts = Product::where('category', 'Freezing')->get();
        $WaterAndDrinksProducts= Product::where('category', 'WaterAndDrinks')->get();
        $SausagesProducts= Product::where('category', 'Sausages')->get();
        $BreadProducts=Product::where('category', 'Bread')->get();
        $CheeseProducts=Product::where('category', 'Cheese')->get();
        $PastaAndCerealsProducts=Product::where('category', 'PastaAndCereals')->get();
        return view('home.index', compact('MilkProducts', 'VegetablesProducts', 'fruitsandberriesProducts', 'CandyProducts', 'MeatAndBidrds', 'FishProducts','FreezingProducts','WaterAndDrinksProducts','SausagesProducts','BreadProducts','CheeseProducts','PastaAndCerealsProducts'));
    }

    public function showMilkProduct()
    {
        $MilkProducts = Product::where('category', 'MilkProduct')->get();
        return view('layouts.MilkProductPage', compact('MilkProducts',));
    }

    public function showVegetablesProduct()
    {
        $VegetablesProducts = Product::where('category', 'VegetablesProduct')->get();
        return view('layouts.VegetablesProductPage', compact('VegetablesProducts',));
    }

    public function showFruitsandBerriesProduct()
    {
        $fruitsandberriesProducts = Product::where('category', 'FruitsAndBerriesProduct')->get();
        return view('layouts.FruitsandBerriesProductPage', compact('fruitsandberriesProducts',));
    }

    public function showCandyProduct()
    {
        $CandyProducts = Product::where('category', 'CandyProduct')->get();
        return view('layouts.CandyProductPage', compact('CandyProducts',));
    }

    public function showMeatAndBirdsProduct()
    {
        $MeatAndBirds = Product::where('category', 'MeatAndBirdProduct')->get();
        return view('layouts.MeatAndBirdsProductPage', compact('MeatAndBirds',));
    }

    public function showFishProduct()
    {
        $FishProducts = Product::where('category', 'FishProduct')->get();
        return view('layouts.FishProductPage', compact('FishProducts',));
    }
    public function showFreezingProduct()
    {
        $FreezingProducts = Product::where('category', 'Freezing')->get();
        return view('layouts.FreezingProductPage', compact('FreezingProducts',));
    }

    public function showWaterAndDrinksProduct()
    {
        $WaterAndDrinksProducts = Product::where('category', 'WaterAndDrinks')->get();
        return view('layouts.WaterAndDrinksProductPage', compact('WaterAndDrinksProducts',));
    }

    public function showSausagesProduct()
    {
        $SausagesProducts = Product::where('category', 'Sausages')->get();
        return view('layouts.SausagesProductPage', compact('SausagesProducts',));
    }

    public function showBreadProduct()
    {
        $BreadProducts = Product::where('category', 'Bread')->get();
        return view('layouts.BreadProductPage', compact('BreadProducts',));
    }

    public function showCheeseProduct()
    {
        $CheeseProducts = Product::where('category', 'cheese')->get();
        return view('layouts.CheeseProductPage', compact('CheeseProducts',));
    }

    public function showPastaAndCerealsProduct()
    {
        $PastaAndCerealsProducts = Product::where('category', 'PastaAndCereals')->get();
        return view('layouts.PastaAndCerealsProductPage', compact('PastaAndCerealsProducts',));
    }


}
