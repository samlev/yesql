<?php

namespace App\Support;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

/**
 * @property-read string $slide_key
 * @property-read int $total_slides
 * @property-read string $next_url
 * @property-read string $previous_url
 *
 * @mixin Component
 */
trait HasSlides
{
    #[Locked]
    public int $slide = 0;

    #[On('previous-slide')]
    public function prev(): void
    {
        if ($this->slide <= 0) {
            $this->redirect($this->previous_url, navigate: true);
        } else {
            $this->slide--;

            session()->put($this->slide_key, $this->slide);
        }
    }

    #[On('next-slide')]
    public function next(): void
    {
        if ($this->slide >= $this->total_slides) {
            $this->redirect($this->next_url, navigate: true);
        } else {
            $this->slide++;

            session()->put($this->slide_key, $this->slide);
        }
    }

    public function mountHasSlides(): void
    {
        $this->slide = session($this->slide_key, 0);
    }

    #[Computed]
    protected function slideKey(): string
    {
        return sprintf('slide-%s', hash('md5', $this::class));
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
        return (string) ($this::NEXT ?? '/slides/the-end');
    }
}
