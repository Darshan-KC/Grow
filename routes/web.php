<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeHeroController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\SiteConfigController;
use App\Http\Controllers\SiteContactController;
use App\Http\Controllers\CourseContentController;
use App\Http\Controllers\CoursesInstructorController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\InstructorController;
// use App\Http\Controllers\CoursesInstructorController;
use App\Http\Controllers\ProfileUpdateController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ---- ROUTE FOR BACKEND ------
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('backend.index');
    })->name('home');
    Route::resource('home', HomeHeroController::class);
    Route::resource('course/instructor', CoursesInstructorController::class);
    Route::resource('about', AboutUsController::class);
    Route::resource('notes', NoteController::class);
    Route::resource('contact', ContactUsController::class);
    Route::resource('course', CourseController::class);
    Route::resource('admin_user', UserController::class);
    Route::resource('site-config', SiteConfigController::class);
    Route::resource('site-contact', SiteContactController::class);
});
Route::get('/', function () {
    return view('frontend.home');
});

// ---- ROUTE FOR FRONTEND ------
Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/user_dashboard', [FrontendController::class, 'user'])->name('user')->middleware('auth');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend-contact');
Route::get('/courses', [FrontendController::class, 'courses'])->name('courses');
Route::get('/courses_details/{id}', [FrontendController::class, 'courses_details'])->name('course.details');
Route::get('/discussion', [FrontendController::class, 'discussion'])->name('discussion'); // yeslai resource banauna parcha.
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/testimonial', [FrontendController::class, 'testimonial'])->name('testimonial');
Route::get('/privacy', [FrontendController::class, 'privacy_policy'])->name('privacy');
Route::get('/terms_condition', [FrontendController::class, 'terms_condition'])->name('terms_condition');
Route::get('/quiz', [FrontendController::class, 'quiz'])->name('quiz'); //yeslai ne resource controller banauni ho

// ---- ROUTE FOR ENROLLMENT ------
Route::prefix('/enrollment')->middleware('auth')->group(function () {
    Route::resource('enroll_save',EnrollController::class);
    Route::get('/', [EnrollmentController::class, 'enroll'])->name('enroll');
    Route::get('/course_tutorial/{id}', [EnrollmentController::class, 'enroll_course_tutorial'])->name('enroll.course_tutorial');
    Route::get('/course_content/{id}', [EnrollmentController::class, 'enroll_innercourses'])->name('enroll.course_content');
    // Route::get('/live_session', [EnrollmentController::class, 'live_session'])->name('enroll.live_session');
});

Route::prefix('/instructor')->name('instructor.')->group(function () {
    Route::get('/dashboard',[InstructorController::class,'dashboard'])->name('dashboard');
    Route::get('/course/{id}',[InstructorController::class,'course'])->name('course_create');
    Route::resource('/course-content',CourseContentController::class);
    Route::resource('/quiz',QuizController::class);
    Route::resource('/notes',NoteController::class);
});

Route::resource('/update_profile',ProfileUpdateController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
