<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryPage extends Component
{
    public function deleteItem(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        $request->session()->flash('status', 'Category has been Deleted successfully!');
        return redirect()->route('admin.categories.index');
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin.category-page', ['categories' => $categories])->layout('layouts.admin');
    }
}
