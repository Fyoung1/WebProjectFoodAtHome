<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MilkProduct;
use Illuminate\Support\Facades\DB;

class Product extends Component
{
    public $cart;
    public $totalPrice = 0;

    public function calculateTotalPrice()
    {
        $this->totalPrice = 0;

        if (session()->has('cart')) {
            foreach (session('cart') as $id => $details) {
                $this->totalPrice += $details['price'] * $details['quantity'];
            }
        }
    }
    public function updateTotalPrice()
    {
        $this->emit('totalPriceUpdated', $this->totalPrice);
    }

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

                $cart[$id]['quantity'] -= 1;
                if ($cart[$id]['quantity'] == 0) {
                    unset($cart[$id]);
                }

                session()->put('cart', $cart);
            }
        }
    }
    public function AddCart($id)
    {
        if ($id) {

            $cart = session()->get('cart');

            if (isset($cart[$id])) {

                $cart[$id]['quantity'] += 1;
                session()->put('cart', $cart);
            }
        }

    }
}
