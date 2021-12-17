<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class WishlistCount extends Component
{
    protected $listeners = ['refresh' => '$refresh'];
    
    public function render()
    {
        return view('livewire.frontend.wishlist-count');
    }
}
