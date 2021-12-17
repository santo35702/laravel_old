<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Category;
use Illuminate\Http\Request;
use Cart;

class ProductByCategory extends Component
{
    public $sorting;
    public $pagesize;
    public $slug;

    public $min_price;
    public $max_price;

    public function mount($slug)
    {
        $this->sorting = "default";
        $this->pagesize = 20;
        $this->slug = $slug;

        $this->min_price = 1;
        $this->max_price = 1000;
    }

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
        $category = Category::where('slug', $this->slug)->first();

        if ($this->sorting === 'name') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->orderBy('title', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'name-desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'price') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'price-desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date-desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->orderBy('created_at', 'asc')->paginate($this->pagesize);
        } else {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category->id)->paginate($this->pagesize);
        }

        $popular_products = Product::inRandomOrder()->limit(5)->get();
        $sale_date = Sale::find(1);
        return view('livewire.frontend.product-by-category', ['products' => $products, 'popular_products' => $popular_products, 'category' => $category, 'sale_date' => $sale_date])->layout('layouts.base');
    }
}
