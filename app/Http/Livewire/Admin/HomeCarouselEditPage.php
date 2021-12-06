<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HomeCarouselEditPage extends Component
{
    public function render()
    {
        return view('livewire.admin.home-carousel-edit-page')->layout('layouts.admin');
    }
}
