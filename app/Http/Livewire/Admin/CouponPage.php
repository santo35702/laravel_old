<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponPage extends Component
{
    public function deleteItem(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        $request->session()->flash('status', 'Coupon has been Deleted successfully!');
        // return redirect()->route('admin.categories.index');
    }

    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.coupon-page', ['coupons' => $coupons])->layout('layouts.admin');
    }
}
