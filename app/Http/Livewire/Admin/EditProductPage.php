<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
use App\Models\Product;

class EditProductPage extends Component
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
    public $newImage;
    public $category_id;

    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->title = $product->title;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->sku = $product->sku;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->product_id = $product->id;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'short_description' => 'required',
            'regular_price' => 'required|numeric',
            // 'image' => 'required|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'sku' => 'required',
        ]);
    }

    public function updateItem(Request $request)
    {
        $this->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'short_description' => 'required',
            'regular_price' => 'required|numeric',
            // 'image' => 'required|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'sku' => 'required',
        ]);

        $product = Product::find($this->product_id);
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
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('product-images', $imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;
        $product->save();
        $request->session()->flash('status', 'Product has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.edit-product-page')->layout('layouts.admin');
    }
}
