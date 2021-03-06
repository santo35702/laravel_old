<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeCarousel;
use App\Models\HomeCategory;
use App\Models\Sale;
use Illuminate\Http\Request;
use Cart;

class HomePage extends Component
{
    public function addToCart($product_id, $product_title, $product_price, Request $request)
    {
        Cart::instance('cart')->add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function addToWishlist($product_id, $product_title, $product_price, Request $request)
    {
        Cart::instance('wishlist')->add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('frontend.wishlist-count', 'refresh');
        $request->session()->flash('status', 'Product add to Wishlist successful!');
    }

    public function render()
    {
        $carousel = HomeCarousel::where('status', 1)->inRandomOrder()->limit(3)->get();
        $new_arrival_cat = HomeCategory::find(1);
        $new_arrival_cat_id = explode(',', $new_arrival_cat->category_id);
        $no_of_products = $new_arrival_cat->no_of_products;
        $new_arrival = Category::whereIn('id', $new_arrival_cat_id)->get();
        $sale_date = Sale::find(1);
        return view('livewire.frontend.home-page', ['carousel' => $carousel, 'new_arrival' => $new_arrival, 'no_of_products' => $no_of_products, 'sale_date' => $sale_date])->layout('layouts.base');
    }
}
