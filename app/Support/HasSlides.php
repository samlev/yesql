<?php

namespace App\Support;

use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

/**
 * @property-read int $total_slides
 * @property-read string $next_url
 * @property-read string $previous_url
 *
 * @mixin Component
 */
trait HasSlides
{
    #[Locked]
    public string $slide_key = '';

    #[Locked]
    #[Session(key: 'slide-{slide_key}')]
    public int $slide = 0;

    #[On('previous-slide')]
    public function prev(): void
    {
        if ($this->slide <= 0) {
            $this->redirect($this->previous_url, navigate: true);
        } else {
            $this->slide--;
        }
    }

    #[On('next-slide')]
    public function next(): void
    {
        if ($this->slide >= $this->total_slides) {
            $this->redirect($this->next_url, navigate: true);
        } else {
            $this->slide++;
        }
    }

    public function mountHasSlides(): void
    {
        $this->slide_key = Str::snake($this::class);
    }

    #[Computed]
    protected function totalSlides(): int
    {
        return (int) ($this::SLIDES ?? 0);
    }

    #[Computed]
    protected function previousUrl(): string
    {
        return (string) ($this::PREVIOUS ?? '/');
    }

    #[Computed]
    protected function nextUrl(): string
    {
        return (string) ($this::NEXT ?? '/');
    }
}
