<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Cart;

class CartPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.cart-page')->layout('layouts.base');
    }
}
