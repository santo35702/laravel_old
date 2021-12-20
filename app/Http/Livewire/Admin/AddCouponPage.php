<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddCouponPage extends Component
{
    public function render()
    {
        return view('livewire.admin.add-coupon-page')->layout('layouts.admin');
    }
}
