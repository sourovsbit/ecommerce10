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
use App\Http\Controllers\Admin\ProductInformationController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\DivisionSetupController;
use App\Http\Controllers\Admin\DistrictSetupController;
use App\Http\Controllers\Admin\ShippingClassController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\ThanaController;
use App\Http\Controllers\Admin\DeliveryChargeController;

Route::middleware('auth')->group(function () {

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
    'product_information' => ProductInformationController::class,
    'vendor' => VendorController::class,
    'division_setup' => DivisionSetupController::class,
    'district_setup' => DistrictSetupController::class,
    'shipping_class' => ShippingClassController::class,
    'supplier_info' => SupplierController::class,
    'thana_setup' => ThanaController::class,
    'delivary_charge' => DeliveryChargeController::class,
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


//product product info extra routes
Route::post('change_product_information_status',[ProductInformationController::class,'status'])->name('product_information.status');
Route::get('product_information_trash',[ProductInformationController::class,'trash'])->name('product_information.trash_list');
Route::get('product_information_restore/{id}',[ProductInformationController::class,'restore'])->name('product_information.restore');
Route::get('product_information_delete/{id}',[ProductInformationController::class,'delete'])->name('product_information.delete');


//product vendor extra routes
Route::post('change_vendor_status',[VendorController::class,'status'])->name('vendor.status');
Route::get('vendor_trash',[VendorController::class,'trash'])->name('vendor.trash_list');
Route::get('vendor_restore/{id}',[VendorController::class,'restore'])->name('vendor.restore');
Route::get('vendor_delete/{id}',[VendorController::class,'delete'])->name('vendor.delete');


//product division setup extra routes
Route::post('change_division_setup_status',[DivisionSetupController::class,'status'])->name('division_setup.status');
Route::get('division_setup_trash',[DivisionSetupController::class,'trash'])->name('division_setup.trash_list');
Route::get('division_setup_restore/{id}',[DivisionSetupController::class,'restore'])->name('division_setup.restore');
Route::get('division_setup_delete/{id}',[DivisionSetupController::class,'delete'])->name('division_setup.delete');


//product district setup extra routes
Route::post('change_district_setup_status',[DistrictSetupController::class,'status'])->name('district_setup.status');
Route::get('district_setup_trash',[DistrictSetupController::class,'trash'])->name('district_setup.trash_list');
Route::get('district_setup_restore/{id}',[DistrictSetupController::class,'restore'])->name('district_setup.restore');
Route::get('district_setup_delete/{id}',[DistrictSetupController::class,'delete'])->name('district_setup.delete');


//product shipping class extra routes
Route::post('change_shipping_class_status',[ShippingClassController::class,'status'])->name('shipping_class.status');
Route::get('shipping_class_trash',[ShippingClassController::class,'trash'])->name('shipping_class.trash_list');
Route::get('shipping_class_restore/{id}',[ShippingClassController::class,'restore'])->name('shipping_class.restore');
Route::get('shipping_class_delete/{id}',[ShippingClassController::class,'delete'])->name('shipping_class.delete');


//product thana setup extra routes
Route::post('change_thana_setup_status',[ThanaController::class,'status'])->name('thana_setup.status');
Route::get('thana_setup_trash',[ThanaController::class,'trash'])->name('thana_setup.trash_list');
Route::get('thana_setup_restore/{id}',[ThanaController::class,'restore'])->name('thana_setup.restore');
Route::get('thana_setup_delete/{id}',[ThanaController::class,'delete'])->name('thana_setup.delete');


//product thana setup extra routes
Route::post('change_delivary_charge_status',[DeliveryChargeController::class,'status'])->name('delivary_charge.status');
Route::get('delivary_charge_trash',[DeliveryChargeController::class,'trash'])->name('delivary_charge.trash_list');
Route::get('delivary_charge_restore/{id}',[DeliveryChargeController::class,'restore'])->name('delivary_charge.restore');
Route::get('delivary_charge_delete/{id}',[DeliveryChargeController::class,'delete'])->name('delivary_charge.delete');

Route::post('searchSupplier',[SupplierController::class,'searchSupplier']);

});
