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
Route::get('/settings/footer', App\Http\Livewire\Admin\Settings\Footer\Index::class)->name('admin.settings.footer');
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

//------------------------------------------Logs--------------------------------------------//
Route::get('/logs', App\Http\Livewire\Admin\Logs\Index::class)->name('admin.logs');

//---------------------------------------Permissions---------------------------------------//
Route::get('/permissions', App\Http\Livewire\Admin\Permissions\Index::class)->name('admin.permissions');
Route::get('/permissions/edit/{permission}', App\Http\Livewire\Admin\Permissions\Edit::class)->name('admin.permissions.edit');
Route::get('/permissions/trashed', App\Http\Livewire\Admin\Permissions\Trash::class)->name('admin.permissions.trash');

//---------------------------------------Roles---------------------------------------//
Route::get('/roles', App\Http\Livewire\Admin\Roles\Index::class)->name('admin.roles');
Route::get('/roles/edit/{role}', App\Http\Livewire\Admin\Roles\Edit::class)->name('admin.roles.edit');
Route::get('/roles/trashed', App\Http\Livewire\Admin\Roles\Trash::class)->name('admin.roles.trash');

//---------------------------------------Users---------------------------------------//
Route::get('/users', App\Http\Livewire\Admin\Users\Index::class)->name('admin.users');
Route::get('/users/trashed', App\Http\Livewire\Admin\Users\Trash::class)->name('admin.users.trash');
Route::get('/users/create', App\Http\Livewire\Admin\Users\Create::class)->name('admin.users.create');
Route::get('/users/permission/{user}', App\Http\Livewire\Admin\Users\Permission::class)->name('admin.users.permission');
Route::get('/users/info/{user}', App\Http\Livewire\Admin\Users\Info::class)->name('admin.users.info');
Route::get('/users/edit/{user}', App\Http\Livewire\Admin\Users\Edit::class)->name('admin.users.edit');


//---------------------------------------Product Categories---------------------------------------//
Route::get('/product/categories', App\Http\Livewire\Admin\products\Categories\create\Index::class)->name('admin.product.categories');
Route::get('/product/categories/edit/{category}', App\Http\Livewire\Admin\products\edit\Index::class)->name('admin.product.categories.edit');
Route::get('/product/categories/trashed', App\Http\Livewire\Admin\products\Trash::class)->name('admin.product.categories.trash');
