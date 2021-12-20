<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditCouponPage extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-coupon-page')->layout('layouts.admin');
    }
}
