<x-slides.title-and-body title="NoSQL to the rescue!">
  <div class="flex justify-around items-center gap-20 flex-wrap" x-transition x-show="$wire.slide === 1">
    <x-image src="resources/img/mongodb.png" alt="MongoDB logo" class="h-72" />
    <x-image src="resources/img/redis.png" alt="Redis logo" class="h-72" />
    <x-image src="resources/img/json.png" alt="JSON logo" class="h-72" />
    <x-image src="resources/img/firebase.png" alt="Firebase logo" class="h-72" />
  </div>
  <div class="flex flex-col gap-20 items-center h-full w-full text-3xl p-10" x-show="$wire.slide >= 2 && $wire.slide < 5">
    <p x-show="$wire.slide === 2" x-transition class="text-5xl">No need to structure your data!</p>
    <div wire:ignore x-show="$wire.slide === 2" x-transition class="w-full">
      <x-markdown>```json
{
  "name": "Sam",
  "age": 39,
  "location": "Brisbane",
  "hobbies": ["coding", "gaming", "reading", "breaking things"],
  "pets": [
    {
      "name": "Scotty",
      "species": "dog",
      "breed": "border collie"
    },
    {
      "name": "Schrodinger",
      "species": "cat",
      "breed": "domestic short hair"
    }
  ]
}
```</x-markdown>
    </div>
    <p x-show="$wire.slide === 3" x-transition class="text-5xl">No need for SQL!</p>
    <div wire:ignore x-show="$wire.slide === 3" x-transition class="w-full">
      <x-markdown>```js
const cursor = db.collection('inventory').find('my-user-id');
```</x-markdown>
    </div>
    <p x-show="$wire.slide === 3" x-transition>Just use the keys to retrieve data!</p>
    <p x-show="$wire.slide === 4" x-transition class="text-5xl">Everything is <i>FAST!</i></p>
    <p x-show="$wire.slide === 4" x-transition class="text-xl">And you'll only lose your data sometimes!</p>
  </div>
  <div class="w-full flex flex-col justify-around items-center gap-40" x-show="$wire.slide === 5">
    <p class="text-3xl">Ultimately, It's...</p>
    <div x-transition:enter.duration.1000ms.delay.1500ms x-show="$wire.slide === 5">
      <p class="text-9xl animate-wiggle"><span class="animate-rainbow">WEBSCALE!!!</span></p>
    </div>
  </div>
</x-slides.title-and-body>
