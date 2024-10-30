<x-slides.title-and-body title="How does it work?" class="text-5xl">
  <div x-transition x-show="$wire.slide === 0" wire:ignore class="flex flex-col gap-10">
    <p>Create a table with a binary column</p>
<x-markdown>```sql
CREATE TABLE `tenants` (
   `name` VARCHAR(255) NOT NULL PRIMARY,
   `data` BINARY
);
```</x-markdown>
  </div>
  <div x-transition x-show="$wire.slide === 1" wire:ignore class="flex flex-col gap-10">
    <p>Load that field into PHP memory</p>
<x-markdown>```php
$db = fopen('php://memory', 'wr');
fwrite($db, $tenant->data);
```</x-markdown>
  </div>
  <div x-transition x-show="$wire.slide === 2" wire:ignore class="flex flex-col gap-10">
    <p>Set up your ORM to use the in-memory database</p>
<x-markdown>```php
return [
    'connections' => [
        'yesql' => [
            'driver' => 'sqlite',
            'url' => 'php://memory',
        ],
    ],
];
```</x-markdown>
  </div>
  <div x-transition x-show="$wire.slide >= 3" wire:ignore class="flex flex-col gap-10">
    <p>...</p>
  <div x-transition x-show="$wire.slide >= 4" wire:ignore class="flex flex-col gap-10">
    <p>...</p>
  </div>
  <div x-transition x-show="$wire.slide >= 5" wire:ignore class="flex flex-col gap-10">
    <p>...Profit?</p>
  </div>
  <div x-transition x-show="$wire.slide >= 6" wire:ignore class="flex flex-col gap-10">
    <p class="text-xl">Lose your data.</p>
  </div>
  </div>
</x-slides.title-and-body>
