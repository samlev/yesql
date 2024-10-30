<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class NosqlProblems extends Component
{
    use HasSlides;

    public const int SLIDES = 5;
    public const string PREVIOUS = '/slides/nosql-to-the-rescue';
    public const string NEXT = '/slides/introducing-yesql';

    public function render(): View
    {
        return view('livewire.slides.nosql-problems');
    }
}
