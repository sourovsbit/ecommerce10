<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreManager;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductItemController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\SubUnitController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\SupplierAreaController;
use App\Http\Controllers\Admin\SupplierController;


Route::get('/dashboard',[StoreManager::class,'dashboard'])->name('store_dashboard.index');


Route::resources([
    'product' => ProductController::class,
    'product_item' => ProductItemController::class,
    'category' => CategoryController::class,
    'brand' => BrandController::class,
    'color' => ColorController::class,
    'size' => SizeController::class,
    'unit' => UnitController::class,
    'sub_unit' => SubUnitController::class,
    'supplier_area' =>SupplierAreaController::class,
    'supplier' => SupplierController::class,
]);

// product item extra routes
Route::get('product_item_trash',[ProductItemController::class,'trash_list'])->name('product_item.trash');
Route::get('product_item_restore/{id}',[ProductItemController::class,'restore'])->name('product_item.restore');
Route::get('product_item_delete/{id}',[ProductItemController::class,'delete'])->name('product_item.delete');
Route::post('product_item_status',[ProductItemController::class,'status'])->name('product_item.status');

// category extra routes

Route::post('change_category_status',[CategoryController::class,'status'])->name('category.status');
Route::get('category_trash',[CategoryController::class,'trash_list'])->name('category.trash');
Route::get('category_restore/{id}',[CategoryController::class,'restore'])->name('category.restore');
Route::get('delete_category/{id}',[CategoryController::class,'delete'])->name('category.delete');

//brand extra routes
Route::get('brand_trash',[BrandController::class,'trash_list'])->name('brand.trash');
Route::post('change_brand_status',[BrandController::class,'status'])->name('brand.status');
Route::get('restore_brand/{id}',[BrandController::class,'restore'])->name('brand.restore');
Route::get('brand_delete/{id}',[BrandController::class,'delete'])->name('brand.delete');

//color extra routes

Route::post('change_color_status',[ColorController::class,'status'])->name('color.status');
Route::get('trashed_colors',[ColorController::class,'trash_list'])->name('color.trash_list');
Route::get('color_restore/{id}',[ColorController::class,'restore'])->name('color.restore');
Route::get('color_delete/{id}',[ColorController::class,'delete'])->name('color.delete');

//size extra routes
Route::post('size_status',[SizeController::class,'status'])->name('size.status');
Route::get('size_trash',[SizeController::class,'trash_list'])->name('size.trash_list');
Route::get('size_restore/{id}',[SizeController::class,'restore'])->name('size.restore');
Route::get('size_delete/{id}',[SizeController::class,'delete'])->name('size.delete');

//unuit extra routes
Route::post('change_unit_status',[UnitController::class,'status'])->name('unit.status');
Route::get('unit_trash',[UnitController::class,'trash_list'])->name('unit.trash_list');
Route::get('unit_restore/{id}',[UnitController::class,'restore'])->name('unit.restore');
Route::get('unit_delete/{id}',[UnitController::class,'delete'])->name('unit.delete');


//sub unit extra routes
Route::post('change_sub_unit_status',[SubUnitController::class,'status'])->name('sub_unit.status');
Route::get('sub_unit_trash',[SubUnitController::class,'trash_list'])->name('sub_unit.trash_list');
Route::get('restore_sub_unit/{id}',[SubUnitController::class,'restore'])->name('sub_unit.restore');
Route::get('delete_sub_unit/{id}',[SubUnitController::class,'delete'])->name('sub_unit.delete');

//product extra routes
Route::post('change_product_status',[ProductController::class,'status'])->name('product.status');
Route::get('product_trash',[ProductController::class,'trash_list'])->name('product.trash_list');
Route::get('product_restore/{id}',[ProductController::class,'restore'])->name('product.restore');
Route::get('delete_product/{id}',[ProductController::class,'delete'])->name('product.delete');


//supplier ara routes

Route::post('supplier_area_status',[SupplierAreaController::class,'status'])->name('supplier_area.status');
Route::get('supplier_area_trashed',[SupplierAreaController::class,'trash_list'])->name('supplier_area.trash_list');
Route::get('supplier_area_restore/{id}',[SupplierAreaController::class,'restore'])->name('supplier_area.restore');
Route::get('supplier_area_delete/{id}',[SupplierAreaController::class,'delete'])->name('supplier_area.delete');

//supplier extra routes
Route::post('supplier_status',[SupplierController::class,'status'])->name('supplier.status');
