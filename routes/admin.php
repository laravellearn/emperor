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

//---------------------------------------HomePage---------------------------------------//
Route::get('/', App\Http\Livewire\Admin\Home\Index::class)->name('admin.home');

//---------------------------------------Settings---------------------------------------//
//Settings Footer ETC
Route::get('/settings/footer/label', App\Http\Livewire\Admin\Settings\Footer\Label::class)->name('admin.settings.footer.label');
Route::get('/settings/footer/socialmedia', App\Http\Livewire\Admin\Settings\Footer\Social::class)->name('admin.settings.footer.social');
//Settings Footer LOGO
Route::get('/settings/footer/logo', App\Http\Livewire\Admin\Settings\Footer\Logo::class)->name('admin.settings.footer.logo');
Route::get('/settings/footer/logo/{Footerlogo}', App\Http\Livewire\Admin\Settings\Footer\LogoUpdate::class)->name('admin.settings.footer.logo.update');
Route::get('/settings/footer/trashed/logo', App\Http\Livewire\Admin\Settings\Footer\LogoTrash::class)->name('admin.settings.footer.logo.trash');
//Settings Footer MENU
Route::get('/settings/footer/menu', App\Http\Livewire\Admin\Settings\Footer\Menu::class)->name('admin.settings.footer.menu');
Route::get('/settings/footer/menu/{Footermenu}', App\Http\Livewire\Admin\Settings\Footer\menuUpdate::class)->name('admin.settings.footer.menu.update');
//Settings Footer Enamad
Route::get('/settings/footer/namad', App\Http\Livewire\Admin\Settings\Footer\Namad::class)->name('admin.settings.footer.namad');

//--------------------------------------------------------------------------------------//
