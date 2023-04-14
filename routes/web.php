<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Proveedores\ListSupplier;
use App\Http\Livewire\Proveedores\EditSupplider;
use App\Http\Livewire\Proveedores\CreateSupplider;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/proveedores', ListSupplier::class)->name('supplier.index');
    Route::get('/crear_proveerdor', CreateSupplider::class)->name('supplier.create');
    Route::get('/editar_proveerdor/{id}', EditSupplider::class)->name('supplier.edit');



});



