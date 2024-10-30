@props(['title' => ''])
<article {{ $attributes->class(['grid gap-12 grid-cols-title-body h-full min-h-screen w-full p-10']) }}>
  <x-sub-title>{{ $title }}</x-sub-title>
  <section>{{ $slot }}</section>
</article>
