<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ProductPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.product-page')->layout('layouts.base');
    }
}
