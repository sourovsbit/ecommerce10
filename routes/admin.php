<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\MenuLabelController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductItemController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductSubCategoryController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\ProductColorController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\SubUnitController;

Route::get('/',[BackendController::class,'home'])->name('admin.view');
Route::resources([
    'menu_label' => MenuLabelController::class,
    'menu' => MenuController::class,
    'role' => RoleController::class,
    'user' => UserController::class,
    'product_item' => ProductItemController::class,
    'product_category' => ProductCategoryController::class,
    'product_sub_category' => ProductSubCategoryController::class,
    'product_brands' => BrandsController::class,
    'product_size' => ProductSizeController::class,
    'product_color' => ProductColorController::class,
    'unit' => UnitController::class,
    'sub_unit' => SubUnitController::class,
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


//product category extra routes
Route::post('change_category_status',[ProductCategoryController::class,'status'])->name('product_category.status');
Route::get('product_category_trash',[ProductCategoryController::class,'trash_list'])->name('product_category.trash_list');
Route::get('product_category_restore/{id}',[ProductCategoryController::class,'restore'])->name('product_category.restore');
Route::get('product_category_delete/{id}',[ProductCategoryController::class,'delete'])->name('product_category.delete');


//product sub category extra routes
Route::post('change_sub_category_status',[ProductSubCategoryController::class,'status'])->name('product_sub_category.status');
Route::get('product_sub_category_trash',[ProductSubCategoryController::class,'trash_list'])->name('product_sub_category.trash_list');
Route::get('product_sub_category_restore/{id}',[ProductSubCategoryController::class,'restore'])->name('product_sub_category.restore');
Route::get('product_sub_category_delete/{id}',[ProductSubCategoryController::class,'delete'])->name('product_sub_category.delete');


//product brands extra routes
Route::post('change_brands_status',[BrandsController::class,'status'])->name('product_brands.status');
Route::get('product_brands_trash',[BrandsController::class,'trash'])->name('product_brands.trash');
Route::get('product_brands_restore/{id}',[BrandsController::class,'restore'])->name('product_brands.restore');
Route::get('product_brands_delete/{id}',[BrandsController::class,'delete'])->name('product_brands.delete');


//product size extra routes
Route::post('change_size_status',[ProductSizeController::class,'status'])->name('product_size.status');
Route::get('product_size_trash',[ProductSizeController::class,'trash'])->name('product_size.trash');
Route::get('product_size_restore/{id}',[ProductSizeController::class,'restore'])->name('product_size.restore');
Route::get('product_size_delete/{id}',[ProductSizeController::class,'delete'])->name('product_size.delete');


//product color extra routes
Route::post('change_color_status',[ProductColorController::class,'status'])->name('product_color.status');
Route::get('product_color_trash',[ProductColorController::class,'trash'])->name('product_color.trash');
Route::get('product_color_restore/{id}',[ProductColorController::class,'restore'])->name('product_color.restore');
Route::get('product_color_delete/{id}',[ProductColorController::class,'delete'])->name('product_color.delete');


//product unit extra routes
Route::post('change_unit_status',[UnitController::class,'status'])->name('unit.status');
Route::get('unit_trash',[UnitController::class,'trash'])->name('unit.trash');
Route::get('unit_restore/{id}',[UnitController::class,'restore'])->name('unit.restore');
Route::get('unit_delete/{id}',[UnitController::class,'delete'])->name('unit.delete');


//product sub unit extra routes
Route::post('change_sub_unit_status',[SubUnitController::class,'status'])->name('sub_unit.status');
Route::get('sub_unit_trash',[SubUnitController::class,'trash'])->name('sub_unit.trash');
Route::get('sub_unit_restore/{id}',[SubUnitController::class,'restore'])->name('sub_unit.restore');
Route::get('sub_unit_delete/{id}',[SubUnitController::class,'delete'])->name('sub_unit.delete');
