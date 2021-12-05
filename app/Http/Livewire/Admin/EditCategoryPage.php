<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EditCategoryPage extends Component
{
    public $name;
    public $slug;
    public $description;

    public function mount($id)
    {
        $category = Category::where('id', $id)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateItem(Request $request)
    {
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->description = $this->description;
        $category->save();
        $request->session()->flash('status', 'Category has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.edit-category-page')->layout('layouts.admin');
    }
}
