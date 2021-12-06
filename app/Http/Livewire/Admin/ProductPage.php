<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPage extends Component
{
    public function deleteItem(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        $request->session()->flash('status', 'Product has been Deleted successfully!');
        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        $products = Product::get();
        return view('livewire.admin.product-page', ['products' => $products])->layout('layouts.admin');
    }
}
