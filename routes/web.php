<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\CourseStudentController;
use App\Http\Controllers\CourseQuestionController;
use App\Http\Controllers\StudentAnswerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('courses', CourseController::class)
            ->middleware('role:teacher');

        Route::get('/course/question/create/{course}', [CourseQuestionController::class, 'create'])
            ->middleware('role:teacher')
            ->name('course.create.question');

        Route::post('/course/question/save/{course}', [CourseQuestionController::class, 'store'])
            ->middleware('role:teacher')
            ->name('course.create.question.store');

        Route::resource('/course_questions', CourseQuestionController::class)
            ->middleware('role:teacher');
        
            // Melihat daftar student
        Route::get('course/students/show/{course}', [CourseStudentController::class, 'index'])
            ->middleware('role:teacher')
            ->name('course.course_students.index');
        // Membuat data student
        Route::get('course/students/create/{course}', [CourseStudentController::class, 'create'])
            ->middleware('role:teacher')
            ->name('course.course_students.create');
        // Menyimpan data student
        Route::post('course/students/save/{course}', [CourseStudentController::class, 'store'])
            ->middleware('role:teacher')
            ->name('course.course_students.store');

        // Rute untuk student
        Route::get('learning/finished/{course}', [LearningController::class, 'learning_finished'])
            ->middleware('role:student')
            ->name('learning.finished.course');

        Route::get('learning/rapport/{course}', [LearningController::class, 'learning_rapport'])
            ->middleware('role:student')
            ->name('learning.rapport.course');
        // Menampilkan beberapa kelas yang diberikan oleh guru
        Route::get('/learning', [LearningController::class, 'index'])
            ->middleware('role:student')
            ->name('learning.index');
        // Buat ngisi jawaban
        Route::get('/learning/{course}/{question}', [LearningController::class, 'learning'])
            ->middleware('role:student')
            ->name('learning.course');

        Route::post('/learning/{course}/{question}', [StudentAnswerController::class, 'store'])
            ->middleware('role:student')
            ->name('learning.course.answer.store');
    });
});

require __DIR__ . '/auth.php';
