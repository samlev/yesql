<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class WhyNosql extends Component
{
    use HasSlides;

    public const int SLIDES = 4;
    public const string PREVIOUS = '/slides';
    public const string NEXT = '/slides/why-nosql';

    public function render(): View
    {
        return view('livewire.slides.why-nosql');
    }
}
