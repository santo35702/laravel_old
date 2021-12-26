<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Coupon;

class AddCouponPage extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
        ]);
    }

    public function storeItem(Request $request)
    {
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
        ]);

        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->save();
        $request->session()->flash('status', 'New Coupon Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.add-coupon-page')->layout('layouts.admin');
    }
}
