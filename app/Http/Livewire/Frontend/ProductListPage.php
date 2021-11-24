<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ProductListPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.product-list-page')->layout('layouts.base');
    }
}
