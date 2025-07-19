<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\CourseStudentController;
use App\Http\Controllers\StudentAnswerController;
use App\Http\Controllers\CourseQuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::middleware('role:teacher')->group(function () {
            Route::resource('courses', CourseController::class);

            Route::get('/courses/{course}/question/create', [CourseQuestionController::class, 'create'])
                ->name('course.create.question');

            Route::post('/courses/{course}/question/save', [CourseQuestionController::class, 'store'])
                ->name('course.create.question.store');

            Route::resource('course-questions', CourseQuestionController::class);

            // Melihat daftar student
            Route::get('courses/{course}/students/show', [CourseStudentController::class, 'index'])
                ->name('course.course_students.index');
            // Membuat data student
            Route::get('courses/{course}/students/create', [CourseStudentController::class, 'create'])
                ->name('course.course_students.create');
            // Menyimpan data student
            Route::post('courses/{course}/students/save', [CourseStudentController::class, 'store'])
                ->name('course.course_students.store');
        });

        Volt::route('messages', 'pages.messages.index')->name('messages');
        Volt::route('analytics', 'pages.admin.analytics.index')->name('analytics');
        Volt::route('chat', 'pages.ai_plugin.index')->name('ai');

        Route::prefix('data')->name('data.')->group(function () {
            Volt::route('categories', 'pages.admin.data.category.index')->name('category.index');
            Volt::route('students', 'pages.admin.data.student.index')->name('student.index');
        });



        // Rute untuk student
        // Menampilkan beberapa kelas yang diberikan oleh guru
        Route::middleware('role:student')->group(function () {
            Volt::route('/learning', 'pages.student.course.index')
                ->name('learning.index');

            Volt::route('/portfolio', 'pages.student.portfolio.index')
                ->name('portfolio.index');

            Route::get('learning/finished/{course}', [LearningController::class, 'learning_finished'])
                ->name('learning.finished.course');

            Route::get('learning/rapport/{course}', [LearningController::class, 'learning_rapport'])
                ->name('learning.rapport.course');
            // Buat ngisi jawaban
            Route::get('/learning/{course}/{question}', [LearningController::class, 'learning'])
                ->name('learning.course');

            Route::post('/learning/{course}/{question}', [StudentAnswerController::class, 'store'])
                ->name('learning.course.answer.store');
        });
    });
});

require __DIR__ . '/auth.php';
