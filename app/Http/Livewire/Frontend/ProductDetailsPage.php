<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;

class ProductDetailsPage extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $related_product = Product::where('category_id', $product->category_id)->orWhere('brand_id', $product->brand_id)->inRandomOrder()->limit(10)->get();
        return view('livewire.frontend.product-details-page', ['product' => $product, 'related_product' => $related_product])->layout('layouts.base');
    }
}
