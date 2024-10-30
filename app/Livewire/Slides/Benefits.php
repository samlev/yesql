<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Benefits extends Component
{
    use HasSlides;

    public const int SLIDES = 5;
    public const string PREVIOUS = '/slides/how-does-it-work';
    public const string NEXT = '/slides/the-end';

    public function render(): View
    {
        return view('livewire.slides.benefits');
    }
}
