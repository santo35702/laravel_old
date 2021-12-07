<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeCarousel;

class HomeCarouselPage extends Component
{
    public function render()
    {
        $carousel = HomeCarousel::get();
        return view('livewire.admin.home-carousel-page', ['carousel' => $carousel])->layout('layouts.admin');
    }
}
