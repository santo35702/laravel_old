<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Sale;
use Illuminate\Http\Request;

class AddSalePage extends Component
{
    public $sale_date;
    public $status;

    public function addSale(Request $request)
    {
        $sale = new Sale();
        $sale->sale_date = $this->sale_date;
        $sale->status = $this->status;
        $sale->save();
        $request->session()->flash('status', 'Sale Time Added successfully!');
    }

    public function render()
    {
        return view('livewire.admin.add-sale-page')->layout('layouts.admin');
    }
}
