<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ProductDetailsPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.product-details-page')->layout('layouts.base');
    }
}
