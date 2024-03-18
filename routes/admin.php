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
//Settings Slider Index
Route::get('/settings/sliders', App\Http\Livewire\Admin\Settings\Index\Index::class)->name('admin.settings.sliders');
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
//Settings Index Page
Route::get('/settings/index', App\Http\Livewire\Admin\Settings\Index\Index::class)->name('admin.settings.index');

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

//---------------------------------------Products---------------------------------------//
Route::get('/products', App\Http\Livewire\Admin\products\Products\Index::class)->name('admin.products');
Route::get('/products/create', App\Http\Livewire\Admin\products\Products\Create::class)->name('admin.products.create');
Route::get('/products/{product}/edit', App\Http\Livewire\Admin\products\Products\Edit::class)->name('admin.products.edit');
Route::get('/products/trashed', App\Http\Livewire\Admin\products\Products\Trash::class)->name('admin.products.trash');
Route::get('/products/galleries', App\Http\Livewire\Admin\Products\Galleries\Index::class)->name('admin.product.galleries');

//---------------------------------------Product Categories Level1---------------------------------------//
Route::get('/product/categories', App\Http\Livewire\Admin\products\Categories\create\Index::class)->name('admin.product.categories');
Route::get('/product/categories/{category}/edit', App\Http\Livewire\Admin\products\Categories\edit\Index::class)->name('admin.product.categories.edit');
Route::get('/product/categories/trashed', App\Http\Livewire\Admin\products\Categories\Trash::class)->name('admin.product.categories.trash');
//---------------------------------------Product Categories Level2---------------------------------------//
Route::get('/product/categories/level2', App\Http\Livewire\Admin\products\Categories\create\Level2::class)->name('admin.product.categories.level2');
Route::get('/product/categories/level2/{category}/edit', App\Http\Livewire\Admin\products\Categories\edit\Level2::class)->name('admin.product.categories.edit.level2');
//---------------------------------------Product Categories Level3---------------------------------------//
Route::get('/product/categories/level3', App\Http\Livewire\Admin\products\Categories\create\Level3::class)->name('admin.product.categories.level3');
Route::get('/product/categories/level3/{category}/edit', App\Http\Livewire\Admin\products\Categories\edit\Level3::class)->name('admin.product.categories.edit.level3');
//---------------------------------------Product Brands---------------------------------------//
Route::get('/product/brands', App\Http\Livewire\Admin\products\Brands\Index::class)->name('admin.product.brands');
Route::get('/product/brands/{brand}/edit', App\Http\Livewire\Admin\products\Brands\Edit::class)->name('admin.product.brands.edit');
Route::get('/product/brands/trashed', App\Http\Livewire\Admin\products\Brands\Trash::class)->name('admin.product.brands.trash');
//---------------------------------------Product Attributes---------------------------------------//
Route::get('/product/attributes', App\Http\Livewire\Admin\products\Attributes\Index::class)->name('admin.product.attributes');
Route::get('/product/attributes/{attribute}/edit', App\Http\Livewire\Admin\products\Attributes\Edit::class)->name('admin.product.attributes.edit');
Route::get('/product/attributes/trashed', App\Http\Livewire\Admin\products\Attributes\Trash::class)->name('admin.product.attributes.trash');
Route::get('/product/attributes/{attribute}/values/index', App\Http\Livewire\Admin\products\Attributes\values\Index::class)->name('admin.product.attributes.value');
Route::get('/product/attributes/{product}', 'App\Http\Controllers\Admin\ProductController@index')->name('admin.product.attributes.index');
Route::post('/product/attributes/{product}/store', 'App\Http\Controllers\Admin\ProductController@store')->name('admin.product.attributes.create');

//---------------------------------------Product Garanties---------------------------------------//
Route::get('/product/garanties', App\Http\Livewire\Admin\products\Garanties\Index::class)->name('admin.product.garanties');
Route::get('/product/garanties/{garanty}/edit', App\Http\Livewire\Admin\products\Garanties\Edit::class)->name('admin.product.garanties.edit');
Route::get('/product/garanties/trashed', App\Http\Livewire\Admin\products\Garanties\Trash::class)->name('admin.product.garanties.trash');
//---------------------------------------Product Colors---------------------------------------//
Route::get('/product/colors', App\Http\Livewire\Admin\products\Colors\Index::class)->name('admin.product.colors');
Route::get('/product/colors/{color}/edit', App\Http\Livewire\Admin\products\Colors\Edit::class)->name('admin.product.colors.edit');
Route::get('/product/colors/trashed', App\Http\Livewire\Admin\products\Colors\Trash::class)->name('admin.product.colors.trash');
//---------------------------------------Orders---------------------------------------//
Route::get('/orders', App\Http\Livewire\Admin\products\Order::class)->name('admin.orders.index');
Route::get('/carts', App\Http\Livewire\Admin\products\Cart::class)->name('admin.carts.index');
