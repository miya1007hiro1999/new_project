<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('tests/test',[TestController::class,'index']);

// Route::resource('contacts',ContactFormController::class); 全部読み込む方法

//Route::get('contacts',[ContactFormController::class,'index'])->name('contacts.index');//一行ごとに書く方法

Route::prefix('contacts')
->middleware(['auth'])
->controller(ContactFormController::class)
->name('contacts.')
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/','store')->name('store');
    Route::get('/{id}','show')->name('show');
    Route::get('/{id}/edit','edit')->name('edit');
    Route::post('/{id}','update')->name('update');
    Route::post('{id}/destroy','destroy')->name('destroy');
});

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
});

require __DIR__.'/auth.php';
