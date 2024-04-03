<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MilkProduct;
use App\Models\VegetablesProduct;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showMainPage()
    {
        $MilkProducts=MilkProduct::all();
        $VegetablesProducts=VegetablesProduct::all();
        return view('home.index',compact('MilkProducts','VegetablesProducts' ));
    }

}
