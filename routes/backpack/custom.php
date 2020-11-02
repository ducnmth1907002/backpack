<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('school', 'SchoolCrudController');
    Route::crud('sclass', 'SclassCrudController');
    Route::crud('student', 'StudentCrudController');
    Route::crud('school/{school_id}', 'SclassCrudController');
    Route::crud('school/{school_id}/sclass/{class_id}', 'SclassCrudController');
    Route::crud('sclass/{class_id}', 'StudentCrudController');
});
// this should be the absolute last line of this file
