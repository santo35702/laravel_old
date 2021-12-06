<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HomeCarouselPage extends Component
{
    public function render()
    {
        return view('livewire.admin.home-carousel-page')->layout('layouts.admin');
    }
}
