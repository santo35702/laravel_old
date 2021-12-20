<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Sale;
use Cart;

class WishlistPage extends Component
{
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

    public function moveFromWishlistToCart($rowId, Request $request)
    {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->model->title,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('frontend.wishlist-count', 'refresh');
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
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
