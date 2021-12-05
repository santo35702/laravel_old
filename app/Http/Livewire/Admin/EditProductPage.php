<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditProductPage extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-product-page')->layout('layouts.admin');
    }
}
