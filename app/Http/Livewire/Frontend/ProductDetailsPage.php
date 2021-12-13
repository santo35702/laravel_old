<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Cart;

class ProductDetailsPage extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function addToCart($product_id, $product_title, $product_price, Request $request)
    {
        Cart::add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $related_product = Product::where('category_id', $product->category_id)->orWhere('brand_id', $product->brand_id)->inRandomOrder()->limit(10)->get();
        $sale_date = Sale::find(1);
        return view('livewire.frontend.product-details-page', ['product' => $product, 'related_product' => $related_product, 'sale_date' => $sale_date])->layout('layouts.base');
    }
}
