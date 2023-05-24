<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\commentReplyController;
//////////public routes
//Home page
Route::get('/', [HomeController::class, "Home"]);
Route::view('/contact', 'contact')->name('contact');
//Admin
Route::middleware(['admin', "auth"])->group(function () {
    //show the dashboard
    Route::get('/admin-dashboard/admin/{id}', [AdminController::class, 'index'])->name('dash');
    //unconfirmed donations table
    Route::get('/admin-dashboard/donations/unconfirmed_donation', [AdminController::class, 'unconfirmed_donation'])
        ->name('unconfirmed');
    //Confirm donation
    Route::put('/admin-dashboard/donations/confirm-donation/{id}', [AdminController::class, 'confirm_donation'])
        ->name('confirm_donation');
    //Delete unconfirmed donation
    Route::match(['get', 'head', 'put', 'delete', 'post'], '/admin-dashboard/donations/delete-donation/{id}', [AdminController::class, 'destroy'])
        ->name('destroy_donation');
    //get admin profile
    Route::get('/admin-dashboard/profile/{id}', [AdminController::class, 'profile'])->name("admin-profile");
    //update Admin infos
    Route::post('/admin-dashboard/profile/update/{id}', [AdminController::class, 'updateAdminProfile'])
        ->name('updateAdminProfile');
    //update Admin profile avatar
    Route::put('/admin-dashboard/profile/update-avatar/{id}', [AdminController::class, 'updateAdminAvatar'])
        ->name('update-admin-avatar');
    //show change password view
    Route::get('/admin-dashboard/profile/update-password/{id}', [AdminController::class, 'showUpdatePassForm'])
        ->name('update-admin-password-form');
    //change password
    Route::put('/admin-dashboard/profile/update-password/{id}', [AdminController::class, 'changeAdminPassword'])
        ->name('update-admin-password');
    Route::get('/admin-dashboard/blogs/unconfirmed_blogs', [AdminController::class, "unconfirmed_blogs"])
        ->name('unconfirmed_blogs');
    Route::put('/admin-dashboard/blogs/unconfirmed_blogs/confirm/{id}', [AdminController::class, "confirm_blog"])
        ->name("confirm-blog");
    //Delete unconfirmed blog
    Route::match(['get', 'head', 'put', 'delete', 'post'], '/admin-dashboard/blogs/unconfirmed_blogs/delete/{id}', [AdminController::class, 'delete_blog'])
        ->name('destroy_blog');
});

//authentification
Route::view('/reset-password', 'authentification.forgot-password')->name('reset-password');
Route::get('/register', [MembreController::class, 'create'])->name('register');
Route::post('/users', [MembreController::class, 'store']);
Route::get('/login', [MembreController::class, 'login'])->name('login');
// logout
Route::post('/logout', [MembreController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/users/authenticate', [MembreController::class, 'authenticate'])->name("users.authenticate");
//user profile
Route::middleware(['auth'])->group(
    function () {
        Route::get('/profile/{id}', [ProfileController::class, "show"]);
        Route::put('/profile/{id}', [ProfileController::class, 'update']);
        Route::post('crop', [ProfileController::class, 'crop'])->name('crop');
    }
);


//donations routes
Route::controller(DonationController::class)->group(function () {
    Route::get('/donations', 'index')->name('donations');
    Route::get('/donations/single-donation/{id}', "show")->name('donation-detail');
    Route::get('update-donation/{id}', 'create')->name('update-donation')->middleware("auth");
    Route::post('/update-donation/{id}', "update")->middleware("auth");
    Route::get('/create-donation', function () {
        return view('donations.edit-donation');
    })->name("add-donation")->middleware("auth");
    Route::post('/add-donation', 'store')->middleware("auth");
    Route::delete('/delete-donation/{id}', 'destroy')->name("destroy-donation")->middleware("auth");
    Route::get('/search-donation', 'search')->name('search_donation');
    Route::get('/recent-donations', 'recentDonations');
});
// Blogs Routes
Route::controller(BlogController::class)->group(
    function () {
        // get all blogs
        Route::get('/blogs', 'index')->name('blogs');
        //blog detail
        Route::get('/blogs/single-blog/{id}', "show")->name('blog-detail');
        //update blog form
        Route::get('/blogs/update-blog/{id}', 'create')->name('update-blog')->middleware('auth');
        //create new blog
        Route::post('/blogs/add-blog', 'store')->name('add-blog')->middleware('auth');
        //create blog form
        Route::get('/blogs/create-blog', function () {
            return view('blogs.edit-blog');
        })->name('create-blog')->middleware('auth');
        Route::post('/blogs/single-blogs/edit-blog/{id}', 'update')->middleware("auth");
        Route::match(['get', 'head', 'put', 'delete', 'post'], '/delete-blog/{id}', 'destroy')->middleware("auth");
    }
);
Route::controller(CommentController::class)->group(function () {
    Route::post('/blogs/single-blog/{id}/comments/add-comment', 'store')
        ->name('add-comment')->middleware('auth');
    Route::delete("/comments/{id}/delete", 'destroy') // Use DELETE method
        ->name("delete-comment")->middleware("auth");
    Route::post('/update-comment/{id}', 'update')->name("update-comment");
});

Route::post('/comments/{id}/add-comment-reply', [commentReplyController::class, 'store'])->name('add-comment-reply')->middleware('auth');
Route::post('/comments/update_reply/{id}', [commentReplyController::class, 'update'])->name('update-comment-reply')->middleware('auth');
Route::match(['get', 'head', 'put', 'delete', 'post'], '/comments/replies/single-reply/{id}', [commentReplyController::class, 'destroy'])->name('destroy-comment-reply')->middleware('auth');
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders', 'index')->name('orders')->middleware("auth");
    Route::get('/orders/create/{id}', 'store')->name('add-order')->middleware("auth");
    Route::delete('/order/{id}', 'destroy')->name('delete-order')->middleware("auth");
    Route::delete('/delete-orders', 'deleteAllOrders')->name('delete-orders')->middleware("auth");
    Route::get('/requests', 'getMyProductOrders')->name("requests")->middleware("auth");
});
// Route::view('/requests', 'requests');
