<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddSalePage extends Component
{
    public function render()
    {
        return view('livewire.admin.add-sale-page')->layout('layouts.admin');
    }
}
