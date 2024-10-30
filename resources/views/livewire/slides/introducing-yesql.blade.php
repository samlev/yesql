<div class="w-full">
  <x-slides.title x-show="$wire.slide === 0">
    <x-title>Introducing YeSQL!</x-title>
  </x-slides.title>
  <x-slides.title-and-body title="Introducing YeSQL!" x-show="$wire.slide >= 1">
    <div class="flex flex-col w-full gap-16 text-4xl p-10 justify-start grow h-max" x-transition x-show="$wire.slide >= 1">
      <h3 class="text-5xl">Consider...</h3>
      <ul class="list-disc ml-10 space-y-10">
        <li>Databases are read more frequently than they're written.</li>
        <li x-transition x-show="$wire.slide >= 2">A big reason for DB infrastructure complexity is high read throughput and connection concurrency.</li>
        <li x-transition x-show="$wire.slide >= 3">SQLite has excellent read performance.</li>
        <li x-transition x-show="$wire.slide >= 4">You can load an entire SQLite database into memory and query it from there.</li>
        <li x-transition x-show="$wire.slide >= 5">You can persist an SQLite database to a single binary file.</li>
        <li x-transition x-show="$wire.slide >= 6">MySQL has a binary column type.</li>
      </ul>
    </div>
  </x-slides.title-and-body>
</div>
