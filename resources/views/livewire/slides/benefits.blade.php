<x-slides.title-and-body title="What are the benefits?" class="text-2xl">
  <div class="flex flex-col gap-10">
    <p class="text-lg">A solution looking for a problem</p>
    <h3 class="text-bold text-5xl">You don't need a lot of database compute</h3>
    <p>You can use a tiny RDS instance because connections aren't held open for long.</p>
  <div x-transition x-show="$wire.slide >= 1" wire:ignore class="flex flex-col gap-10">
    <h3 class="text-bold text-5xl">Multi-database multi-tenancy with a single database</h3>
    <p>Multi-database multi-tenancy sucks. You can give each tenant their own DB without provisioning more infra.</p>
  </div>
  <div x-transition x-show="$wire.slide >= 2" wire:ignore class="flex flex-col gap-10">
    <h3 class="text-bold text-5xl">You can edge-load the database</h3>
    <p>Using bref, roadrunner, or franken PHP a single instance doesn't need to reload the database.</p>
  </div>
  <div x-transition x-show="$wire.slide >= 3" wire:ignore class="flex flex-col gap-10">
    <p>...</p>
  </div>
  <div x-transition x-show="$wire.slide >= 4" wire:ignore class="flex flex-col gap-10">
    <p>...</p>
  </div>
  <div x-transition x-show="$wire.slide === 5" wire:ignore class="flex flex-col gap-10">
    <p class="text-xl">Lose your data.</p>
  </div>
  </div>
</x-slides.title-and-body>
