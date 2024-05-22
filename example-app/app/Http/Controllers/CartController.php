<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
   public function checkout()
   {
    return view('layouts.checkout');
   }
    public function showCartTable()
    {
        $Product = Product::all();

        return view('layouts.cart', compact('Product'));
    }

    public function addToCart($id)
    {
        $Product = Product::find($id);
        if (!$Product) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $Product->name,
                "quantity" => 1,
                "price" => $Product->price,
                "description" => $Product->description,
                "image"=>$Product->image,
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
