@use(Illuminate\Support\Facades\Vite)
@props([
  'src',
  'alt' => '',
  'transition' => false,
  'duration' => 150,
  'delay' => 0,
])
<figure {{ $attributes->class(['bg-slate-200 p-5 rounded-xl overflow-hidden inline-block w-auto'])
    ->merge([
        sprintf('x-transition:enter.duration.%dms%s', $duration, $delay ? (sprintf('.delay.%dms', $delay)) : '') => $transition ? ' ' : false,
        'x-transition:leave.duration.150ms' => $transition ? ' ' : false,
    ]) }}
>
  <img src="{{ Vite::asset($src) }}" alt="{{ $alt }}" class="h-full object-contain" />
</figure>
