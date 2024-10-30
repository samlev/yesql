<?php

use App\Livewire\Landing;
use App\Livewire\Slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class);
Route::get('slides', Landing::class);
Route::get('slides/why-nosql', Slides\WhyNosql::class);
Route::get('slides/nosql-to-the-rescue', Slides\NosqlToTheRescue::class);


Route::get('slides/the-end', Slides\NosqlToTheRescue::class);

Route::get('/reset', function (Request $request) {
    $request->session()->invalidate();

    return redirect('/');
});
