<?php

namespace App\Http\Controllers;

use App\Models\GuestOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class OrderController extends Controller
{
   public function addToBaseOrderGuest()
   {
       $name = $_GET['name'];
       $phone = $_GET['phone'];
       $address = $_GET['city'] . ', ' . $_GET['street'] . ', ' . $_GET['house'] . ', ' . $_GET['apartment'];
       $cart = session()->get('cart');
       $maxIdOrder = DB::table('guest_order')->max('id_orders') ?? 'g0';
       $Id_order = (int) substr($maxIdOrder, 1) + 1;
       $Id_order = 'g' . $Id_order;
       foreach ($cart as $id => $item) {
           DB::table('guest_order')->insert(['id_orders'=>$Id_order,'name' => $name, 'phone' => $phone,'address'=>$address,'product'=>$item['name'],'quantity'=>$item['quantity'],'created_at' => now()]);
       }
       session()->forget('cart');
       return response()->json(['status' => 'success']);
   }

    public function addToBaseOrderAuth()
    {
        $userId=Auth::id();
        $maxIdOrder = DB::table('carts')->max('id_orders') ?? 0;
        $Id_order = $maxIdOrder + 1;
        DB::table('carts')->insert(['id_users'=>$userId,'id_orders' => $Id_order,'created_at' => now()]);
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $address = $_GET['city'] . ', ' . $_GET['street'] . ', ' . $_GET['house'] . ', ' . $_GET['apartment'];
        $cart = session()->get('cart');
        foreach ($cart as $id => $item) {
            DB::table('guest_order')->insert(['id_orders'=>$Id_order,'name' => $name, 'phone' => $phone,'address'=>$address,'product'=>$item['name'],'quantity'=>$item['quantity'],'created_at' => now()]);
        }
        session()->forget('cart');
        return response()->json(['status' => 'success']);
    }

    public function showOrderHistory()
    {
        $userId=Auth::id();
        $OrderHistorys = DB::table('carts')
            ->join('guest_order', 'carts.id_orders', '=', 'guest_order.id_orders')
            ->where('carts.id_users', $userId)
            ->select('carts.*', 'guest_order.address','guest_order.id_orders','guest_order.created_at')
            ->distinct('carts.id_orders')
            ->get();
        return view('layouts.OrderHistoryPage', compact('OrderHistorys',));
    }

    public function showOrderHistoryID($id)
    {
        $OrderHistoryIDs = DB::table('guest_order')
            ->select('guest_order.product','guest_order.quantity')
            ->where('id_orders', $id)
            ->get();
        return response()->json(['OrderHistoryIDs' => $OrderHistoryIDs]);
    }

}
