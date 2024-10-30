<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ implode(' - ', array_filter(['YeSQL', $title ?? ''])) }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
  class="bg-slate-50 text-slate-700 dark:bg-slate-800 dark:text-slate-100 w-full min-h-screen flex flex-col gap-12 items-center justify-center h-screen"
  x-data="{
    mode: $persist('system'),
    system() {
      return window.matchMedia('(prefers-color-scheme: dark)').matches;
    },
    dark() {
      switch (this.mode) {
        case 'dark':
          return true;
        case 'light':
          return false;
        default:
          return this.system();
      }
    },
    toggle() {
       this.mode = this.dark() ? 'light' : 'dark';
    },
    resetMode() {
      this.mode = 'system';
    },
    next() {
      $dispatch('next-slide');
    },
    prev() {
      $dispatch('previous-slide');
    },
    mouseNav(e) {
      if ([3, 4].includes(e.button)) {
        e.preventDefault();
        e.button === 3 ? this.prev() : this.next();
      }
    },
    reset() {
      Livewire.navigate('/reset');
    }
  }"
  :class="{ 'dark': dark() }"
  @keydown.ctrl.m.window="toggle"
  @keydown.ctrl.r.window="resetMode"
  @keydown.crtl.backspace.window.prevent="reset"
  @keydown.left.window="prev"
  @keydown.backspace.window.prevent="prev"
  @keydown.right.window="next"
  @keydown.space.window.prevent="next"
  @mouseup.window="mouseNav($event)"
>
 <main class="w-full min-h-screen">
  {{ $slot }}
 </main>
<div class="fixed top-0 left-0 right-0 h-screen">
<button type="button" class="absolute bottom-2 left-2 rounded-full lg:top-0 lg:bottom-0 lg:left-0 lg:opacity-0 lg:w-20 w-10 h-10 lg:h-auto z-20 bg-slate-700 text-slate-100 shadow-lg lg:shadow-none flex lg:block flex-col items-center justify-center" @click="prev">&lt;<span class="sr-only">Previous slide</span></button>
<button type="button" class="absolute bottom-2 right-2 rounded-full lg:top-0 lg:bottom-0 lg:right-0 lg:opacity-0 lg:w-20 w-10 h-10 lg:h-auto z-20 bg-slate-700 text-slate-100 shadow-lg lg:shadow-none flex lg:block flex-col items-center justify-center" @click="next">&gt;<span class="sr-only">Next slide</span></button>
</div>
</body>
</html>
