<?php

use App\Livewire\Landing;
use App\Livewire\Slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class);
Route::get('slides', Landing::class);
Route::get('slides/why-nosql', Slides\WhyNosql::class);
Route::get('slides/nosql-to-the-rescue', Slides\NosqlToTheRescue::class);
Route::get('slides/nosql-problems', Slides\NosqlProblems::class);
Route::get('slides/introducing-yesql', Slides\IntroducingYesql::class);
Route::get('slides/how-does-it-work', Slides\HowDoesItWork::class);
Route::get('slides/benefits', Slides\Benefits::class);


Route::get('slides/the-end', Slides\TheEnd::class);

Route::get('/reset', function (Request $request) {
    $request->session()->invalidate();

    return redirect('/');
});
