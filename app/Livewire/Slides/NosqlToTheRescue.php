<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('NoSQL To the Rescue')]
class NosqlToTheRescue extends Component
{
    use HasSlides;
    public const int SLIDES = 1;
    public const string PREVIOUS = '/slides/why-nosql';
    public const string NEXT = '/slides/why-nosql';

    public function render(): View
    {
        return view('livewire.slides.nosql-to-the-rescue');
    }
}