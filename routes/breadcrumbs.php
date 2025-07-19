<?php

use App\Models\Course;
use App\Models\CourseQuestion;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Dashboard > Course
Breadcrumbs::for('manage-course', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Manage Course', route('dashboard.courses.index'));
});

// Home > Course > Create
Breadcrumbs::for('create-course', function (BreadcrumbTrail $trail) {
    $trail->parent('manage-course');
    $trail->push('New Course', route('dashboard.courses.create'));
});

// Home > Course > [Course]
Breadcrumbs::for('course-show', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('manage-course');
    $trail->push("{$course->name} Details", route('dashboard.courses.show', $course));
});

// Home > Course > [Course] > Create Question
Breadcrumbs::for('create-course-question', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('course-show', $course);
    $trail->push("Create Question", route('dashboard.course.create.question', $course));
});

// Home > Course > [Course] > Create Question
Breadcrumbs::for('edit-course-question', function (BreadcrumbTrail $trail, Course $course, CourseQuestion $question) {
    $trail->parent('course-show', $course);
    $trail->push("Edit Question", route('dashboard.course-questions.edit', $question));
});
