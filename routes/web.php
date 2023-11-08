<?php

use App\Livewire\Binding;
use App\Livewire\Workaround;
use Illuminate\Support\Facades\Route;

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

Route::get('binding/{foo}', Binding::class)->name('binding');

Route::get('workaround/{foo}', Workaround::class)->name('workaround');
