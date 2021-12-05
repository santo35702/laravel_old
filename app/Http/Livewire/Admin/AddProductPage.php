<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddProductPage extends Component
{
    public function render()
    {
        return view('livewire.admin.add-product-page')->layout('layouts.admin');
    }
}
