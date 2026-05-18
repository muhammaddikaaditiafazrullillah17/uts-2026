<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {

    $projects = Project::latest()->get();

    return view('welcome', compact('projects'));

});

Route::get('/test', function () {
    return view('test');
});

Route::get('/admin', function () {
    return redirect('/filament');
});