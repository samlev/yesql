<?php

namespace App\Livewire\Slides;

use App\Support\HasSlides;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Why NoSQL?')]
class WhyNosql extends Component
{
    use HasSlides;

    public const int SLIDES = 5;
    public const string PREVIOUS = '/slides';
    public const string NEXT = '/slides/nosql-to-the-rescue';

    public function render(): View
    {
        return view('livewire.slides.why-nosql');
    }
}
