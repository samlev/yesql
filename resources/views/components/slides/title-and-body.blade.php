@props(['title' => ''])
<div {{ $attributes->class(['grid gap-12 grid-cols-title-body']) }}>
  <x-sub-title>{{ $title }}</x-sub-title>
  <section>{{ $slot }}</section>
</div>
