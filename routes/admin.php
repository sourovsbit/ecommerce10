<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\MenuLabelController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductItemController;

Route::get('/',[BackendController::class,'home'])->name('admin.view');
Route::resources([
    'menu_label' => MenuLabelController::class,
    'menu' => MenuController::class,
    'role' => RoleController::class,
    'user' => UserController::class,
    'product_item' => ProductItemController::class,
]);

// menu_label_extra_routes
Route::post('changeMenuLabelStatus',[MenuLabelController::class,'status'])->name('menu_label.status');
Route::get('menu_label_trash',[MenuLabelController::class,'trash_list'])->name('menu_label.trash_list');
Route::get('restore_menu_label/{id}',[MenuLabelController::class,'restore'])->name('menu_label.restore');
Route::get('delete_menu_label/{id}',[MenuLabelController::class,'delete'])->name('menu_label.delete');

// menu extra routes;
Route::get('get_menu_labels',[MenuController::class,'get_menu_labels'])->name('menu.get_labels');
Route::get('get_parent',[MenuController::class,'get_parent'])->name('menu.get_parent');
Route::get('menu_trash_list',[MenuController::class,'trash_list'])->name('menu.trash_list');
Route::get('menu_restore/{id}',[MenuController::class,'restore'])->name('menu.restore');
Route::get('menu_delete/{id}',[MenuController::class,'delete'])->name('menu.delete');


// role extra routes;
Route::get('/role_trash_list',[RoleController::class,'trash_list'])->name('role.trash_list');
Route::get('/role_restore/{id}',[RoleController::class,'restore'])->name('role.restore');
Route::get('/role_delete/{id}',[RoleController::class,'delete'])->name('role.delete');
Route::get('/role_permission/{id}',[RoleController::class,'permission'])->name('role.permission');
Route::post('/permission_store/{id}',[RoleController::class,'permission_store'])->name('role.permission_store');

//use extra routes;
Route::get('/user_trash_list',[UserController::class,'trash_list'])->name('user.trash_list');
Route::get('restore_user/{id}',[UserController::class,'restore'])->name('user.restore');
Route::get('delete_user/{id}',[UserController::class,'delete'])->name('user.delete');
Route::get('user_profile/{id}',[UserController::class,'profile'])->name('user.profile');
Route::post('user_profile_update/{id}',[UserController::class,'profile_update'])->name('user.profile_update');


//product item extra routes
Route::post('change_menu_status',[ProductItemController::class,'status'])->name('product_item.status');
Route::get('product_item_trash',[ProductItemController::class,'trash'])->name('product_item.trash');
Route::get('restore_product_item/{id}',[ProductItemController::class,'restore'])->name('product_item.restore');
Route::get('delete_product_item/{id}',[ProductItemController::class,'delete'])->name('product_item.delete');
