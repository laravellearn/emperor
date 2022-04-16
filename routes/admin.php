<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Http\Livewire\Admin\Home\Index::class)->name('admin.home');

//Settings Footer
Route::get('/settings/footer/label', App\Http\Livewire\Admin\Settings\Footer\Label::class)->name('admin.settings.footer.label');
Route::get('/settings/footer/socialmedia', App\Http\Livewire\Admin\Settings\Footer\Social::class)->name('admin.settings.footer.social');
Route::get('/settings/footer/logo', App\Http\Livewire\Admin\Settings\Footer\Logo::class)->name('admin.settings.footer.logo');
