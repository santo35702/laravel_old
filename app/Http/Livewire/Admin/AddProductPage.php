<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use Livewire\WithFileUploads;

class AddProductPage extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'regular_price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'sku' => 'required',
        ]);
    }

    public function storeItem(Request $request)
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'regular_price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'sku' => 'required',
        ]);

        $product = new Product();
        $product->title = $this->title;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('product-images', $imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        $request->session()->flash('status', 'New Product Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.add-product-page')->layout('layouts.admin');
    }
}
