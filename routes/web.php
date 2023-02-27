<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ckeditorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Models\User;
use App\Models\Post;
use App\Models\Course;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::redirect('home', '/');


Route::group(['prefix' => 'dashboard', 'middleware' => ['can:admin']], function () {
    Route::get('create-course',            [AdminController::class, 'create_course'])->name('create-course');
    Route::get('create-post',              [AdminController::class, 'create_post'])->name('admin-createpost');
    Route::get('edit/post/{post:slug}',    [AdminController::class, 'edit_post'])->name('admin-editpost');
    Route::get('',                         [AdminController::class, 'index'])->name('admin-index');
    Route::get('review/post-comments',     [AdminController::class, 'post_comments'])->name('post-comments');
    Route::get('/courses',                 [AdminController::class, 'courses'])->name('admin-courses');
    Route::get('/posts',                   [AdminController::class, 'posts'])->name('admin-posts');
    Route::get('/profile',                 [AdminController::class, 'profile'])->name('admin-profile');
    Route::get('/activity',                [AdminController::class, 'activity'])->name('admin-activity');
    Route::get('/messages',                [AdminController::class, 'messages'])->name('admin-messages');
    Route::get('/contact',                 [AdminController::class, 'contact'])->name('admin-contact');
    Route::get('/templates',               [AdminController::class, 'templates'])->name('admin-templates');
    Route::get('templates/{template:name}',[AdminController::class, 'template_edit'])->name('template-edit');
    Route::patch('template/{template}/edit',[AdminController::class, 'edit_template'])->name('edit-template');
    Route::patch('/contact-edit',          [ContactController::class,'contact_edit'])->name('contact-edit');
    Route::get('edit-about',               [AdminController::class,  'edit_about'])->name('edit-about');
    Route::post('editabout/{AboutInformations}',          [AdminController::class,  'edit_about_informations'])->name('edit-information');
    Route::get('events',                   [AdminController::class, 'events_index'])->name('admin.events.index');
    Route::get('events/{event}/edit',      [AdminController::class, 'events_edit'])->name('admin.events.edit');
    Route::delete('events/{event}',        [AdminController::class, 'events_destroy'])->name('admin.events.destroy');


});

Route::get('login',           [UserController::class, 'createlogin'])->name('show-login')->middleware('guest');
Route::get('register',        [UserController::class, 'createregister'])->name('show-register')->middleware('guest');
Route::post('register',       [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('login',          [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('logout',         [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('forget-password', [UserController::class, 'createforgetpassword'])->name('forgetpassword');

Route::get('courses',         [WebController::class,  'courses'])->name('courses');
Route::get('courses/{course:slug}', [CourseController::class,  'show'])->name('show');
Route::get('courses/{course}/edit',  [CourseController::class,   'edit'])->name('course.edit');
Route::put('courses/{course}/update',  [CourseController::class, 'update'])->name('course.update');
Route::post('courses/create',  [CourseController::class, 'create'])->name('create');
Route::patch('courses/change/{course}/status', [CourseController::class, 'change_status'])->name('update_status_course');
Route::delete('courses/{course}/delete',   [CourseController::class, 'destroy'])->name('delete-course')->middleware('auth');

Route::get('/',               [WebController::class,  'index'])->name('home');
Route::get('about',           [WebController::class,  'about'])->name('about');



Route::resource('events', EventController::class);

Route::get('events-details',  [WebController::class,  'events_details'])->name('events-details');
Route::get('contact',         [WebController::class,  'contact'])->name('contact');
Route::get('example',         [WebController::class,  'example'])->name('example');


Route::get('blog',                              [PostController::class, 'index'])->name('blog');
Route::post('blog/posts/create',                [PostController::class, 'store'])->name('store-post')->middleware('auth');
Route::get('blog/posts/{post:slug}',            [PostController::class, 'show'])->name('show-post');
Route::patch('blog/posts/{post}/edit',          [PostController::class, 'update'])->name('update-post')->middleware('auth');
Route::delete('blog/posts/{post}/delete',       [PostController::class, 'destroy'])->name('delete-post')->middleware('auth');

Route::get('/markasread/{id}',                  [CommentController::class, 'markasread'])->name('markasread');
Route::post('/blog/posts/{post:slug}/comments', [CommentController::class, 'store'])->name('post-comment');
Route::post('/reply/store',                     [CommentController::class, 'reply'])->name('reply-post');
Route::delete('/blog/posts/{comment}/comments/', [CommentController::class, 'destroy'])->name('delete-comment');
Route::patch('/blog/posts/comments/{comment}',  [CommentController::class, 'update'])->name('edit-comment');
Route::get('/blog/posts/{comment}/edit',        [CommentController::class, 'show'])->name('show-comment');


Route::get('/blog/authors/{author:name}',       [PostController::class, 'userindex'])->name('getusername');
Route::get('/blog/categories/{category:slug}',  [PostController::class, 'categoryindex'])->name('getcategory');

Route::post('ckeditor/image_upload',            [ckeditorController::class, 'upload'])->name('upload');
