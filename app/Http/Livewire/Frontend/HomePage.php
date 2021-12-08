<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use App\Models\HomeCarousel;
use Illuminate\Http\Request;
use Cart;

class HomePage extends Component
{
    public function addToCart($product_id, $product_title, $product_price, Request $request)
    {
        Cart::add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        $carousel = HomeCarousel::where('status', 1)->inRandomOrder()->limit(3)->get();
        $new_arrival = Product::orderBy('created_at', 'DESC')->get()->take(10);
        return view('livewire.frontend.home-page', ['carousel' => $carousel, 'new_arrival' => $new_arrival])->layout('layouts.base');
    }
}
