<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Sale;
use Cart;

class WishlistPage extends Component
{
    public function addToCart($product_id, $product_title, $product_price, Request $request)
    {
        Cart::instance('cart')->add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function removeFromWishlist($product_id, Request $request)
    {
        foreach (Cart::instance('wishlist')->content() as $key) {
            if ($key->id == $product_id) {
                Cart::instance('wishlist')->remove($key->rowId);
                $this->emitTo('frontend.wishlist-count', 'refresh');
                $request->session()->flash('status', 'Product removed from Wishlist successful!');
                return;
            }
        }
    }

    public function removeAll(Request $request)
    {
        Cart::instance('wishlist')->destroy();
        $this->emitTo('frontend.wishlist-count', 'refresh');
        $request->session()->flash('status', 'All Products removed from Wishlist successful!');
    }

    public function render()
    {
        $sale_date = Sale::find(1);
        return view('livewire.frontend.wishlist-page', ['sale_date' => $sale_date])->layout('layouts.base');
    }
}
