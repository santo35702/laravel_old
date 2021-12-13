<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Sale;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class ProductPage extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 20;
    }

    public function addToCart($product_id, $product_title, $product_price, Request $request)
    {
        Cart::add($product_id, $product_title, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        if ($this->sorting === 'name') {
            $products = Product::orderBy('title', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'name-desc') {
            $products = Product::orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'price') {
            $products = Product::orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'price-desc') {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date') {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date-desc') {
            $products = Product::orderBy('created_at', 'asc')->paginate($this->pagesize);
        } else {
            $products = Product::paginate($this->pagesize);
        }

        $popular_products = Product::inRandomOrder()->limit(5)->get();
        $sale_date = Sale::find(1);
        return view('livewire.frontend.product-page', ['products' => $products, 'popular_products' => $popular_products, 'sale_date' => $sale_date])->layout('layouts.base');
    }
}
