@props(['title' => ''])
<article {{ $attributes->class(['grid gap-12 grid-rows-title-body h-full min-h-screen w-full p-10']) }}>
  <x-sub-title>{{ $title }}</x-sub-title>
  <section>{{ $slot }}</section>
</article>
