<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
<<<<<<< HEAD
use App\Http\Controllers\MovieController;
=======
use App\Http\Controllers\UserController;
>>>>>>> b66230b (first commit)

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

// Route::get('login', [CrudUserController::class, 'login'])->name('login');
// Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

// Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
// Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

// Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

// Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

// Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
// Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

// Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

// Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/users', [UserController::class, 'list'])->name('user.list');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::get('/users/role/{role}', [UserController::class, 'showByRole'])->name('user.role');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/', function () {
    return view('welcome');
});

// Route hiển thị danh sách phim
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
