<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Cart;

class SaveForLaterPage extends Component
{
    public function destroy(Request $request, $rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
        $request->session()->flash('status', 'Product removed from Save for Later successful!');
    }

    public function saveForLaterToCart($rowId, Request $request)
    {
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->model->title,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('frontend.cart-count', 'refresh');
        $request->session()->flash('status', 'Product Remove from Save-For-Later and Added to :cart successful!', ['cart' => '<a href="'.route('cart').'" class="text-sm text-gray-600">Cart</a>']);
        // return redirect()->route('cart');
    }

    public function render()
    {
        return view('livewire.frontend.save-for-later-page')->layout('layouts.base');
    }
}
