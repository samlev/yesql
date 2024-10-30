<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Livewire\Component;

class HowDoesItWork extends Component
{
    use HasSlides;

    public const int SLIDES = 6;
    public const string PREVIOUS = '/slides/introducing-yesql';
    public const string NEXT = '/slides/the-end';

    public function render()
    {
        return view('livewire.slides.how-does-it-work');
    }
}
