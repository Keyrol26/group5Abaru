<?php

use App\Http\Controllers\App\Http\Controllers\HallController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/niceadmin', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('home2');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});


Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
    Route::get('/students', 'index')->name('students.index');
    Route::get('/students/create', 'create')->name('students.create');
    Route::post('/students', 'store')->name('students.store');
    Route::post('/students/{student}', 'show')->name('students.show');
    Route::get('/students/{student}/edit')->name('students.edit');
    Route::put('/students/{student}', 'update')->name('students.update');
    Route::delete('/students/{student}', 'destroy')->name('students.destroy');
});

Route::controller(App\Http\Controllers\SubjectController::class)->group(function () {
    Route::get('/subjects', 'index')->name('subjects.index');
    Route::get('/subjects/create', 'create')->name('subjects.create');
    Route::post('/subjects', 'store')->name('subjects.store');
    Route::post('/subjects/{subjects}', 'show')->name('subjects.show');
    Route::get('/subjects/{subjects}/edit')->name('subjects.edit');
    Route::put('/subjects/{subjects}', 'update')->name('subjects.update');
    Route::delete('/subjects/{subjects}', 'destroy')->name('subjects.destroy');
});

Route::controller(App\Http\Controllers\HallController::class)->group(function () {
    Route::get('/halls', 'index')->name('halls.index');
    Route::get('/halls/create', 'create')->name('halls.create');
    Route::post('/halls', 'store')->name('halls.store');
    Route::post('/halls{halls}',  'show')->name('halls.show');
    Route::get('/halls/{halls}/edit', 'edit')->name('halls.edit');
    Route::put('/halls/{halls}', 'update')->name('halls.update');
    Route::delete('/halls/{halls}',  'destroy')->name('halls.destroy');
});

Route::controller(App\Http\Controllers\StudentTimetableController::class)->group(function () {
    Route::get('/timetables', 'index')->name('timetables.index');
    Route::get('/timetables/create', 'create')->name('timetables.create');
    Route::post('/timetables', 'store')->name('timetables.store');
    Route::post('/timetables{timetables}',  'show')->name('timetables.show');
    Route::get('/timetables/{timetables}/edit', 'edit')->name('timetables.edit');
    Route::put('/timetables/{timetables}', 'update')->name('timetables.update');
    Route::delete('/timetables/{timetables}',  'destroy')->name('timetables.destroy');
});

Route::controller(App\Http\Controllers\LecturerGroupController::class)->group(function () {
    Route::get('/lecgroups', 'index')->name('lecgroups.index');
    Route::get('/lecgroups/create', 'create')->name('lecgroups.create');
    Route::post('/lecgroups', 'store')->name('lecgroups.store');
    Route::post('/lecgroups{lecgroups}',  'show')->name('lecgroups.show');
    Route::get('/lecgroups/{lecgroups}/edit', 'edit')->name('lecgroups.edit');
    Route::put('/lecgroups/{lecgroups}', 'update')->name('lecgroups.update');
    Route::delete('/lecgroups/{lecgroups}',  'destroy')->name('lecgroups.destroy');
});



// Route::resource('/halls', 'App\Http\Controllers\HallController');
// Route::resource('/timetables', 'StudentTimetableController');
Route::resource('/groups', 'LecturerGroupController');
