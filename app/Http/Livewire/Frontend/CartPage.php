<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Cart;

class CartPage extends Component
{
    public function increaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('frontend.cart-count', 'refresh');
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('frontend.cart-count', 'refresh');
    }

    public function destroy(Request $request, $rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'Product removed from Cart successful!');
    }

    public function removeAll(Request $request)
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'All Products removed from Cart successful!');
    }

    public function saveForLater($rowId, Request $request)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id, $item->model->title, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'Product Remove from Cart and Added to :save_for_later successful!', ['save_for_later' => '<a href="'.route('save_for_later').'" class="text-sm text-gray-600">Save-For-Later</a>']);
    }

    public function render()
    {
        return view('livewire.frontend.cart-page')->layout('layouts.base');
    }
}
