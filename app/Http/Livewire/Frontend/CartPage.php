<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Cart;

class CartPage extends Component
{
    public function increaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    public function destroy(Request $request, $rowId)
    {
        Cart::remove($rowId);
        $request->session()->flash('status', 'Product removed from Cart successful!');
    }

    public function removeAll(Request $request)
    {
        Cart::destroy();
        $request->session()->flash('status', 'All Products removed from Cart successful!');
    }

    public function render()
    {
        return view('livewire.frontend.cart-page')->layout('layouts.base');
    }
}
