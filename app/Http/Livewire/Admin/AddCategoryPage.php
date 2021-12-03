<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;

class AddCategoryPage extends Component
{
    public $name;
    public $slug;
    public $description;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeItem(Request $request)
    {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->description = $this->description;
        $category->save();
        $request->session()->flash('status', 'New Category Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.add-category-page')->layout('layouts.admin');
    }
}
