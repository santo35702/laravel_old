<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HomeCarouselAddPage extends Component
{
    public function render()
    {
        return view('livewire.admin.home-carousel-add-page')->layout('layouts.admin');
    }
}
