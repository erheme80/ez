<?php

use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TuitionController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\User\Unicontroller;


// In web.php
Route::get('/', [UniController::class, 'index'])->name('universities.index');
Route::get('/university/{id}', [UniController::class, 'show'])->name('university.show');
Route::get('/university/{id}/scholarships', [UniversityController::class, 'showScholarships'])->name('university.scholarships');
Route::get('/university/{id}/departments', [UniversityController::class, 'showDepartments'])->name('university.departments');
Route::get('/university/{universityId}/departments/{departmentId}/courses', [UniversityController::class, 'showCourses'])->name('university.departments.courses');

// Route::get('/register', [RegisteredUserController::class, 'create'])
//     ->middleware('guest')
//     ->name('register');

// Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->name('views.welcome');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth',AdminMiddleware::class])->prefix('admin')->group(function(){
    Route::get('dashboard',function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::controller(UniversityController::class)->group(function() {
        Route::get('university', 'index')->name('admin.university.index');
        Route::get('university/create', 'create')->name('admin.university.create');
        Route::get('university/{id}/edit', 'edit')->name('admin.university.edit');
        Route::put('university/{id}', 'update')->name('admin.university.update');
        Route::post('university', 'store')->name('admin.university.store');  
        Route::delete('university/{id}', 'destroy')->name('admin.university.destroy');
    });
    
    Route::controller(DepartmentController::class)->group(function() {
        Route::get('departments', 'index')->name('admin.department.index');
        Route::get('departments/create', 'create')->name('admin.department.create');
        Route::get('departments/edit/{id}', 'edit')->name('admin.department.edit');
        Route::post('departments', 'store')->name('admin.department.store');
        Route::put('departments/{id}', 'update')->name('admin.department.update');
        Route::delete('departments/{id}', 'destroy')->name('admin.department.destroy');
    });
    
    Route::controller(CourseController::class)->group(function() {
        Route::get('courses', 'index')->name('admin.course.index');
        Route::get('courses/create', 'create')->name('admin.course.create');
        Route::get('courses/edit/{id}', 'edit')->name('admin.course.edit');
        Route::post('courses', 'store')->name('admin.course.store');
        Route::put('courses/{id}', 'update')->name('admin.course.update');
        Route::delete('courses/{id}', 'destroy')->name('admin.course.destroy');
    });
    
    Route::controller(TuitionController::class)->group(function() {
        Route::get('tuition', 'index')->name('admin.tuition.index');
        Route::get('tuition/create', 'create')->name('admin.tuition.create');
        Route::get('tuition/edit/{id}', 'edit')->name('admin.tuition.edit');
        Route::post('tuition', 'store')->name('admin.tuition.store');
        Route::put('tuition/{id}', 'update')->name('admin.tuition.update');
        Route::delete('tuition/{id}', 'destroy')->name('admin.tuition.destroy');
    });
    
    Route::controller(ScholarshipController::class)->group(function() {
        Route::get('scholarships', 'index')->name('admin.scholarship.index');
        Route::get('scholarships/create', 'create')->name('admin.scholarship.create');
        Route::get('scholarships/edit/{id}', 'edit')->name('admin.scholarship.edit');
        Route::post('scholarships', 'store')->name('admin.scholarship.store');
        Route::put('scholarships/{id}', 'update')->name('admin.scholarship.update');
        Route::delete('scholarships/{id}', 'destroy')->name('admin.scholarship.destroy');
    });
    

});

require __DIR__.'/auth.php';