<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;

class ProductPage extends Component
{
    public function render()
    {
        $products = Product::paginate(24);
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.product-page', ['products' => $products, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
