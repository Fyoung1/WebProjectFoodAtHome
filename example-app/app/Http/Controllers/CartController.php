<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MilkProduct;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showCartTable()
    {
        $MilkProduct = MilkProduct::all();

        return view('layouts.cart', compact('MilkProduct'));
    }

    public function addToCart($id)
    {
        $MilkProduct = MilkProduct::find($id);
        if (!$MilkProduct) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $MilkProduct->name,
                "quantity" => 1,
                "price" => $MilkProduct->price,
                "description" => $MilkProduct->description,
            ];
        }
        session()->put('cart', $cart);

    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back();
    }

}
