<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MilkProduct;
use Illuminate\Support\Facades\DB;

class Product extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session('cart', []);
    }

    public function render()
    {
        return view('livewire.product');
    }

    public function removeFromCart($id)
    {
        if ($id) {

            $cart = session()->get('cart');

            if (isset($cart[$id])) {

                unset($cart[$id]);

                session()->put('cart', $cart);
            }

        }
    }


}
