<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Sale;

class AddSalePage extends Component
{
    public $time;
    public $status;

    public function storeTime(Request $request)
    {
        $time = new Sale();
        $time->sale_date = $this->time;
        $time->status = $this->status;
        $time->save();
        $request->session()->flash('status', 'Flash Sale Time Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.add-sale-page')->layout('layouts.admin');
    }
}
