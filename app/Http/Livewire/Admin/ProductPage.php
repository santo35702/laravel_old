<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductPage extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.admin.product-page', ['products' => $products])->layout('layouts.admin');
    }
}
