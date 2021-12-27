<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Cart;
use App\Models\Coupon;

class CartPage extends Component
{
    public $haveCouponCode;
    public $couponCode;
    public $discount;
    public $taxAfterDiscount;
    public $subtotalAfterDiscount;
    public $totalAfterDiscount;

    public function increaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('frontend.cart-count', 'refresh');
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('frontend.cart-count', 'refresh');
    }

    public function destroy(Request $request, $rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'Product removed from Cart successful!');
    }

    public function removeAll(Request $request)
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'All Products removed from Cart successful!');
    }

    public function saveForLater($rowId, Request $request)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id, $item->model->title, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'Product Remove from Cart and Added to :save_for_later successful!', ['save_for_later' => '<a href="'.route('save_for_later').'" class="text-sm text-gray-600">Save-For-Later</a>']);
    }

    public function applyCouponCode(Request $request)
    {
        $coupon = Coupon::where('code', $this->couponCode)->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
        if (!$coupon) {
            $request->session()->flash('coupon_status', 'Invalid Coupon Code!');
            return;
        }

        $request->session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value,
        ]);
    }

    public function calculateDiscounts()
    {
        if (session('coupon')) {
            if (session()->get('coupon')['type'] == 'fixed') {
                $this->discount = session()->get('coupon')['value'];
            } else {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
            }
            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }

    public function render()
    {
        if (session('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            } else {
                $this->calculateDiscounts();
            }

        }
        return view('livewire.frontend.cart-page')->layout('layouts.base');
    }
}
