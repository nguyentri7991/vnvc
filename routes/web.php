<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GroupVNVCController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RegistrationInjectionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Route::get('/admin/login',[AuthController::class,'index'])->name('admin.login');
Route::get('/admin/dashboard',[AuthController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout',[AuthController::class,'authLogout'])->name('admin.logout');
Route::any('/admin/authLogin',[AuthController::class,'authLogin'])->name('admin.auth');

/* ----- Địa Chỉ ----- */
Route::get('/findCity',[LocalController::class,'findCity']);
Route::get('/findDistrict',[LocalController::class,'findDistrict']);
Route::get('/findWard',[LocalController::class,'findWard']);
/* ----- End ----- */

/* ----- Nhân Viên ----- */
Route::get('/admin/employee',[EmployeeController::class,'findAll'])->name('employee.index');
Route::get('/admin/employee/add',[EmployeeController::class,'add'])->name('employee.add');
Route::get('/admin/employee/profile/{id}',[EmployeeController::class,'profile'])->name('employee.profile');
Route::get('/admin/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::get('/admin/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');

Route::any('/admin/employee/handleInsert',[EmployeeController::class,'handleInsert'])->name('employee.handleInsert');
Route::any('/admin/employee/handleUpdate',[EmployeeController::class,'handleUpdate'])->name('employee.handleUpdate');

/* ----- End ----- */

/* ----- Trung Tâm ----- */
Route::get('/admin/group',[GroupVNVCController::class,'findAll'])->name('group.index');
Route::get('/admin/group/add',[GroupVNVCController::class,'add'])->name('group.add');
Route::get('/admin/group/edit/{id}',[GroupVNVCController::class,'edit'])->name('group.edit');
Route::get('/admin/group/delete/{id}',[GroupVNVCController::class,'delete'])->name('group.delete');

Route::any('/admin/group/handleInsert',[GroupVNVCController::class,'handleInsert'])->name('group.handleInsert');
Route::any('/admin/group/handleUpdate',[GroupVNVCController::class,'handleUpdate'])->name('group.handleUpdate');
/* ----- End ----- */

/* Ca Trực */
Route::get('/admin/shift',[ShiftController::class,'findAll'])->name('shift.index');
Route::get('/admin/shift/edit/{id}',[ShiftController::class,'edit'])->name('group.edit');

Route::any('/admin/shift/handleUpdate',[ShiftController::class,'handleUpdate'])->name('shift.handleUpdate');
/* End */


/* ----- Phòng Ban ----- */
Route::get('/admin/room',[RoomController::class,'findAll'])->name('room.index');
Route::get('/admin/room/add',[RoomController::class,'add'])->name('room.add');
Route::get('/admin/room/edit/{id}',[RoomController::class,'edit'])->name('room.edit');
Route::get('/admin/room/detail/{id}',[RoomController::class,'detail'])->name('room.detail');

Route::any('/admin/room/handleInsert',[RoomController::class,'handleInsert'])->name('room.handleInsert');
Route::any('/admin/room/handleUpdate',[RoomController::class,'handleUpdate'])->name('room.handleUpdate');

/* ----- End ----- */

/* ----- Nhà Cung Câp  ----- */
Route::get('/admin/supplier',[SupplierController::class,'findAll'])->name('supplier.index');
Route::get('/admin/supplier/add',[SupplierController::class,'add'])->name('supplier.add');
Route::get('/admin/supplier/edit/{id}',[SupplierController::class,'edit'])->name('supplier.edit');
Route::get('/admin/supplier/delete/{id}',[SupplierController::class,'delete'])->name('supplier.delete');

Route::any('/admin/supplier/handleInsert',[SupplierController::class,'handleInsert'])->name('supplier.handleInsert');
Route::any('/admin/supplier/handleUpdate',[SupplierController::class,'handleUpdate'])->name('supplier.handleUpdate');

/* ----- End ----- */


/* ----- Vaccine ----- */
Route::get('/admin/type-vaccine',[VaccineController::class,'findAllType'])-> name('typevaccine.index');
Route::get('/admin/type-vaccine/add',[VaccineController::class,'addType'])-> name('typevaccine.add');
Route::get('/admin/type-vaccine/edit/{id}',[VaccineController::class,'editType'])->name('typevaccine.edit');
Route::get('/admin/type-vaccine/delete/{id}',[VaccineController::class,'deleteType'])->name('typevaccine.delete');


Route::get('/admin/vaccine',[VaccineController::class,'findAllVaccine'])->name('vaccine.index');
Route::get('/admin/vaccine/add',[VaccineController::class,'addVaccine'])-> name('vaccine.add');
Route::get('/admin/vaccine/edit/{id}',[VaccineController::class,'editVaccine'])-> name('vaccine.edit');
Route::get('/admin/vaccine/delete/{id}',[VaccineController::class,'deleteVaccine'])->name('vaccine.delete');


Route::any('/admin/type-vaccine/handleInsertType',[VaccineController::class,'handleInsertTypeVaccine']) -> name('typevaccine.handleInsert');
Route::any('/admin/type-vaccine/handleUpdateType',[VaccineController::class,'handleUpdateTypeVaccine']) -> name('typevaccine.handleUpdate');

Route::any('/admin/vaccine/handleInsertVaccine',[VaccineController::class,'handleInsertVaccine']) -> name('vaccine.handleInsert');
Route::any('/admin/vaccine/handleUpdateVaccine',[VaccineController::class,'handleUpdateVaccine']) -> name('vaccine.handleUpdate');
/* ----- End ----- */

/* ----- Package ----- */
Route::get('/admin/type-package',[PackageController::class,'findAllType'])-> name('typepackage.index');
Route::get('/admin/type-package/add',[PackageController::class,'addType'])-> name('typepackage.add');
Route::get('/admin/type-package/edit/{id}',[PackageController::class,'editType'])->name('typepackage.edit');
Route::get('/admin/type-package/delete/{id}',[PackageController::class,'deleteType'])->name('typepackage.delete');

Route::any('/admin/type-package/handleInsertType',[PackageController::class,'handleInsertType'])->name('typepackage.handleInsert');
Route::any('/admin/type-package/handleUpdateType',[PackageController::class,'handleUpdateType'])->name('typepackage.handleUpdate');

Route::get('/admin/package',[PackageController::class,'findAllPackage'])->name('package.index');
Route::get('/admin/package/add',[PackageController::class,'addPackage'])-> name('package.add');
Route::get('/admin/package/edit/{id}',[PackageController::class,'editPackage'])-> name('package.edit');
Route::get('/admin/package/delete/{id}',[PackageController::class,'deletePackage'])->name('package.delete');

Route::any('/admin/package/handleInsertPackage',[PackageController::class,'handleInsertPackage']) -> name('package.handleInsert');
Route::any('/admin/package/handleUpdatePackage',[PackageController::class,'handleUpdatePackage']) -> name('package.handleUpdate');

Route::get('/admin/package/detail/{id}',[PackageController::class,'detailPackage'])->name('package.detail');
Route::get('/admin/package/detail/{id}/add',[PackageController::class,'addDetailPackage'])->name('package.detail_add');

Route::any('/admin/package/handleInsertDetailPackage',[PackageController::class,'handleInsertDetailPackage']) -> name('package.handleInsertDetail');

Route::get('/admin/client',[ClientController::class,'findAll'])->name('client.index');
Route::get('/admin/client-treatment/{id}',[ClientController::class,'detailTreatment'])->name('client.treatment');
Route::get('/admin/registration',[RegistrationInjectionController::class,'findAll'])->name('registration.index');

/* ----- End ----- */

/* ----- Client ----- */
Route::get('/trang-chu',[HomeController::class,'indexHome'])-> name('client.home_index');

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'home'])-> name('client.home');

Route::get('/registration-injection',[RegistrationInjectionController::class,'registration_injection'])-> name('client.registration_injection');
Route::any('/handleRegistration',[RegistrationInjectionController::class,'handleRegistration'])->name('client.registration');

Route::get('/goi-vaccine/{id_type}',[PackageController::class,'showPackageHome'])-> name('client.package');
Route::get('/vaccine',[VaccineController::class,'showVaccineHome'])-> name('client.vaccine');

Route::get('/chi-tiet-goi-vaccine/{id}',[PackageController::class,'showPackageById'])-> name('client.package_detail');
Route::get('/chi-tiet-vaccine/{id}',[VaccineController::class,'showVaccineById'])-> name('client.vaccine_detail');

Route::get('/show-cart',[CartController::class,'indexCart'])-> name('client.cart');
Route::get('/delete-cart/{rowId}',[CartController::class,'deleteCart'])-> name('client.delete_cart');
Route::any('/save-cart',[CartController::class,'handleSaveCard'])->name('client.save');
Route::any('/update-quantity',[CartController::class,'handleUpdateQuantity'])->name('client.update_qty');
Route::get('/thanh-toan',[CartController::class,'payment'])-> name('client.payment');

Route::any('/handle-payment',[CartController::class,'handlePayment'])-> name('client.handlePayment');

Route::get('/thanh-toan-don-hang',[RegistrationInjectionController::class,'payRegistration'])-> name('client.pay_regis');
Route::any('/handlePayRegis',[RegistrationInjectionController::class,'handlePayRegisTration'])->name('client.handlePayRegistration');

Route::get('/login-checkout',[ClientController::class,'checkLogin'])-> name('client.login_checkout');
Route::get('/logout-checkout',[ClientController::class,'logoutCheckOut'])-> name('client.logout_checkout');
Route::any('/dang-ky',[ClientController::class,'handleRegisterAccount'])->name('client.register_account');

Route::any('/dang-nhap',[ClientController::class,'handleLoginAccount'])->name('client.login_account');

Route::get('/thanh-toan-don-hang',[ClientController::class,'checkOut'])-> name('client.checkout');
Route::any('/handle-check-out',[ClientController::class,'handleCheckOut'])-> name('client.handleCheckout');

Route::get('/tra-cuu-lich-tiem',[ClientController::class,'searchIndex'])-> name('client.search');
Route::any('/handle-tra-cuu',[ClientController::class,'handleSearchInjectionForClient'])-> name('client.handleSearch');

/* ----- End ----- */
