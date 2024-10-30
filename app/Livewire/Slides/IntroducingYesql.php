<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class IntroducingYesql extends Component
{
    use HasSlides;

    public const int SLIDES = 6;
    public const string PREVIOUS = '/slides/nosql-problems';
    public const string NEXT = '/slides/the-end';

    public function render(): View
    {
        return view('livewire.slides.introducing-yesql');
    }
}
