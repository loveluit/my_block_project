<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Mail_verifyController;
use App\Http\Controllers\PassResetController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollectionIterator;

    // Route::get('/', function () {
    //     return view('welcome');
    // });

   // Route::get('/dashboard', function () {
   // return view('dashboard');
   // })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::get('/Admin',[AdminController::class,'Admin']);
Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// User Admin
Route::get('/edite/profile',[UserController::class,'edite_profile'])->middleware(['auth', 'verified'])->name('edite.profile');
Route::post('/update/profile',[UserController::class,'update_profile'])->middleware(['auth', 'verified'])->name('update.profile');
Route::post('/update/password',[UserController::class,'update_password'])->middleware(['auth', 'verified'])->name('change.pass');
Route::post('/update/photo',[UserController::class,'update_photo'])->middleware(['auth', 'verified'])->name('update.photo');
//User List
Route::get('/user/list',[UserController::class,'user_list'])->middleware(['auth', 'verified'])->name('user.list');
Route::POST('/Add/user',[UserController::class,'Add_user'])->middleware(['auth', 'verified'])->name('add.user');
Route::get('/delete/{id}',[UserController::class,'delete_user'])->middleware(['auth', 'verified'])->name('delete.user');
Route::get('/Authors',[UserController::class,'Author'])->middleware(['auth', 'verified'])->name('author.list');
Route::get('/All_post',[UserController::class,'Author_all_post'])->middleware(['auth', 'verified'])->name('author.allpost');
Route::get('/All_post/status/{id}',[UserController::class,'Author_all_post_status'])->middleware(['auth', 'verified'])->name('allpost.status');


//Category page
Route::get('/category',[CategoryController::class,'category'])->middleware(['auth', 'verified'])->name('category.page');
Route::post('/category/insert',[CategoryController::class,'category_insert'])->middleware(['auth', 'verified'])->name('category.insert');
Route::get('/Delete/{cat_id}',[CategoryController::class,'delete_cate'])->middleware(['auth', 'verified'])->name('del.category');
Route::get('/Edit/category/{id}',[CategoryController::class,'edit_category'])->middleware(['auth', 'verified'])->name('edit.category');

Route::POST('/Update/category/{id}',[CategoryController::class,'update_category'])->middleware(['auth', 'verified'])->name('update.category');

// Trash Bin
Route::get('/Trash/Bin',[CategoryController::class,'Trash_category'])->middleware(['auth', 'verified'])->name('trash.category');
Route::get('/Trash/restore/{id}',[CategoryController::class,'Restore_category'])->middleware(['auth', 'verified'])->name('restore.category');
Route::get('/Trash/delete/{id}',[CategoryController::class,'hard_detele_category'])->middleware(['auth', 'verified'])->name('hard.delete');
Route::POST('/check/delete',[CategoryController::class,'checkdel_category'])->middleware(['auth', 'verified'])->name('check.del');
Route::POST('/check/restore',[CategoryController::class,'check_restore_category'])->middleware(['auth', 'verified'])->name('check.restore');
//Tags
Route::get('/Tag',[CategoryController::class,'Tag'])->middleware(['auth', 'verified'])->name('tag.category');
Route::POST('/Tag/store',[CategoryController::class,'Tag_store'])->middleware(['auth', 'verified'])->name('tag.store');
Route::get('/Tag/delete/{id}',[CategoryController::class,'Tag_delete'])->middleware(['auth', 'verified'])->name('tag.del');

// Font_End Page
Route::get('/',[FontendController::class,'Master'])->name('index.page');
Route::get('/Author/login',[FontendController::class,'Author_login'])->name('author.login');
Route::get('/Author/register',[FontendController::class,'Author_register'])->name('author.register');
Route::POST('/Author/register/post',[FontendController::class,'Author_insert'])->name('insert.register');

//author list
Route::get('/list',[PostController::class,'Author_list'])->name('authors.list');

// Author / Multiauthetication
Route::POST('/Author/login/post',[AuthorController::class,'author_post'])->name('post.author');
Route::get('/Author/logout',[AuthorController::class,'Author_logout'])->name('author.logout');
//Author Admin Dashboard
//Route::get('/Author/dashboard',[AuthorController::class,'Author_dashboard'])->middleware(['auth', 'author'])->name('author.dashboard');
Route::get('/Author/Status/{id}',[AuthorController::class,'Author_status'])->middleware(['auth', 'verified'])->name('author.status');

// Author / Multiauthetication
Route::middleware(['auth:author'])->group(function () {
    Route::get('/Author/dashboard',[AuthorController::class,'Author_dashboard'])->name('author.dashboard');
    Route::get('/Author/edit',[AuthorController::class,'Author_edit'])->name('author.edit');
    Route::POST('/Author/edit/update',[AuthorController::class,'Author_update'])->name('author.update');
    Route::POST('/Author/psaa/update',[AuthorController::class,'Author_pass_update'])->name('author.pass');
    //Author Add_Post
    Route::get('/Author/Add_post',[PostController::class,'Author_Add_post'])->name('author.post');
    Route::POST('/Author/post',[PostController::class,'Author_post_insert'])->name('post.insert');
    Route::get('/Author/my_post',[PostController::class,'Author_my_post'])->name('author.mypost');
    Route::get('/Author/post_del/{id}',[PostController::class,'Author_post_del'])->name('post.delete');




});



//Fonend Page

Route::get('/Author/post_details/{slug_id}',[FontendController::class,'Author_post_details'])->name('post.details');
Route::get('/Author/post/{author_id}',[FontendController::class,'Author_post'])->name('author.posts');
Route::get('/category/post/{category_id}',[FontendController::class,'Author_post_category'])->name('author.category');


  //Mail_veriry
  Route::get('/Author/mail_verify/{token}',[FontendController::class,'Mail_verify'])->name('mail.verify');

//Search Bar
Route::get('/search',[FontendController::class,'Search'])->name('search');

//Role parmission
Route::get('/role/permission',[RoleController::class,'Role_permission'])->middleware(['auth', 'verified'])->name('permission');
Route::POST('/role/permission/store',[RoleController::class,'Role_permission_store'])->middleware(['auth', 'verified'])->name('permission.store');
Route::POST('/role/store',[RoleController::class,'Role_store'])->middleware(['auth', 'verified'])->name('role.store');


// Password Reset
Route::get('/pass/reset',[PassResetController::class,'pass_reset'])->name('pass.reset');
Route::POST('/pass/reset/send',[PassResetController::class,'pass_reset_post'])->name('pass.reset.send');
Route::get('/pass/reset/form/{token}',[PassResetController::class,'pass_reset_form'])->name('pass.reset.form');
Route::POST('/pass/reset/update/{token}',[PassResetController::class,'pass_reset_update'])->name('pass.reset.update');
