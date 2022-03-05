<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StsFbmModelController;
use App\Models\StsFbmModel;

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

//route group
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource('products', ProductController::class);

    Route::resource('categories', CategoryController::class, [
        'names' => [
            'index' => 'categories.index',
            'store' => 'categories.store',
            'create' => 'categories.create',
            'update' => 'categories.update',
            'destroy' => 'categories.destroy',
            'edit' => 'categories.edit'
        ]
    ]);

});

Route::get('/', function () {
    return view('welcome');
});


require __DIR__ . '/auth.php';




