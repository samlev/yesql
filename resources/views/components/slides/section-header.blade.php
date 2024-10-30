<div {{ $attributes->class(['flex flex-col gap-12 items-center justify-center']) }}>
  {{ $slot }}
  @isset($subtitle)
    <x-sub-title>{{ $subtitle }}</x-sub-title>
  @endisset
</div>
