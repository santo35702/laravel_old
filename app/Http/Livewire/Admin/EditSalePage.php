<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditSalePage extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-sale-page')->layout('layouts.admin');
    }
}
