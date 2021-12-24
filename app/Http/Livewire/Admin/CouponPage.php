<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class CouponPage extends Component
{
    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.coupon-page', ['coupons' => $coupons])->layout('layouts.admin');
    }
}
