<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Models\HomeCarousel;

class HomeCarouselAddPage extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $link;
    public $image;
    public $status;

    public function mount()
    {
        $this->status = 0;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);
    }

    public function storeItem(Request $request)
    {
        $this->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);

        $carousel = new HomeCarousel();
        $carousel->title = $this->title;
        $carousel->subtitle = $this->subtitle;
        $carousel->link = $this->link;
        $carousel->status = $this->status;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('slideshow-banners', $imageName);
        $carousel->image = $imageName;
        $carousel->save();
        $request->session()->flash('status', 'New Carousel Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.home-carousel-add-page')->layout('layouts.admin');
    }
}
