<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CouponPage extends Component
{
    public function render()
    {
        return view('livewire.admin.coupon-page')->layout('layouts.admin');
    }
}
