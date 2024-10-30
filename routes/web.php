<?php

use App\Livewire\Landing;
use App\Livewire\Slides;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class);
Route::get('slides', Landing::class);
Route::get('slides/why-nosql', Slides\WhyNosql::class);
