<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class ProductListPage extends Component
{
    public function addToCart($product_id, $product_title, $product_price, Request $request)
    {
        Cart::add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }
    
    public function render()
    {
        $products = Product::paginate(24);
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.product-list-page', ['products' => $products, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
