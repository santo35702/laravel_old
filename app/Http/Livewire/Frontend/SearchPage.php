<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class SearchPage extends Component
{
    public $sorting;
    public $pagesize;

    public $search;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 20;
        $this->fill(request()->only('search'));
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
            $products = Product::where('title', 'like', '%'.$this->search.'%')->orderBy('title', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'name-desc') {
            $products = Product::where('title', 'like', '%'.$this->search.'%')->orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'price') {
            $products = Product::where('title', 'like', '%'.$this->search.'%')->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'price-desc') {
            $products = Product::where('title', 'like', '%'.$this->search.'%')->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date') {
            $products = Product::where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'date-desc') {
            $products = Product::where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('title', 'like', '%'.$this->search.'%')->paginate($this->pagesize);
        }

        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.search-page', ['products' => $products, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
