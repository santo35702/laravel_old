<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ProductByBrand extends Component
{
    public function render()
    {
        return view('livewire.frontend.product-by-brand')->layout('layouts.base');
    }
}
