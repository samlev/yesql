<x-slides.title-and-body title="But NoSQL has problems...">
  <div class="flex flex-col w-full gap-16 text-4xl p-10 justify-start grow h-max">
    <p x-transition x-show="$wire.slide >= 1">Finding your data can be hard...</p>
    <p x-transition x-show="$wire.slide >= 2">When you don't know what shape your data has, it's hard to use it...</p>
    <p x-transition x-show="$wire.slide >= 3">If only these couple of records could be related...</p>
    <p x-transition x-show="$wire.slide >= 4">Hosting can be expensive and unstable...</p>
    <p x-transition x-show="$wire.slide >= 5">There's also that data loss thing...</p>
  </div>
</x-slides.title-and-body>
