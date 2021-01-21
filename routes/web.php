<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CenterController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\ShiftController;
use App\Http\Controllers\admin\RoomController;
use App\Http\Controllers\admin\SupplierController;
use App\Http\Controllers\admin\VaccineController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\ClientController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocalController;


use App\Http\Controllers\client\RegistrationInjectionController;


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

/* ----- Trung Tâm ----- */
Route::get('/admin/trung-tam',[CenterController::class,'findAllCenterByAdmin'])->name('group.index');
Route::get('/admin/trung-tam/them-moi',[CenterController::class,'add'])->name('group.add');
Route::get('/admin/trung-tam/cap-nhat/{id}',[CenterController::class,'edit'])->name('group.edit');
Route::get('/admin/trung-tam/xoa/{id}',[CenterController::class,'delete'])->name('group.delete');
Route::any('/admin/trung-tam/thuc-hien-them',[CenterController::class,'handleInsert'])->name('group.handleInsert');
Route::any('/admin/trung-tam/thuc-hien-sua',[CenterController::class,'handleUpdate'])->name('group.handleUpdate');
/* ----- End ----- */

/* ----- Nhân Viên ----- */
Route::get('/admin/nhan-vien',[EmployeeController::class,'findAllEmployeeByAdmin'])->name('employee.index');
Route::get('/admin/nhan-vien/them-moi',[EmployeeController::class,'add'])->name('employee.add');
Route::get('/admin/nhan-vien/chi-tiet/{id}',[EmployeeController::class,'profile'])->name('employee.profile');
Route::get('/admin/nhan-vien/cap-nhat/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::get('/admin/nhan-vien/xoa/{id}',[EmployeeController::class,'delete'])->name('employee.delete');
Route::any('/admin/nhan-vien/thuc-hien-them',[EmployeeController::class,'handleInsert'])->name('employee.handleInsert');
Route::any('/admin/nhan-vien/thuc-hien-sua',[EmployeeController::class,'handleUpdate'])->name('employee.handleUpdate');
/* ----- End ----- */

/* Ca Trực */
Route::get('/admin/ca-truc',[ShiftController::class,'findAllShiftByAdmin'])->name('shift.index');
Route::get('/admin/ca-truc/cap-nhat/{id}',[ShiftController::class,'edit'])->name('group.edit');
Route::any('/admin/ca-truc/thuc-hien-sua',[ShiftController::class,'handleUpdate'])->name('shift.handleUpdate');
/* End */

/* ----- Phòng Ban ----- */
Route::get('/admin/phong',[RoomController::class,'findAllRoomByAdmin'])->name('room.index');
Route::get('/admin/phong/them-moi',[RoomController::class,'add'])->name('room.add');
Route::get('/admin/phong/cap-nhat/{id}',[RoomController::class,'edit'])->name('room.edit');
Route::get('/admin/phong/xoa/{id}',[RoomController::class,'detail'])->name('room.detail');
Route::any('/admin/phong/thuc-hien-them',[RoomController::class,'handleInsert'])->name('room.handleInsert');
Route::any('/admin/phong/thuc-hien-sua',[RoomController::class,'handleUpdate'])->name('room.handleUpdate');
/* ----- End ----- */

/* ----- Nhà Cung Câp  ----- */
Route::get('/admin/nha-cung-cap',[SupplierController::class,'findAllSupplierByAdmin'])->name('supplier.index');
Route::get('/admin/nha-cung-cap/them-moi',[SupplierController::class,'add'])->name('supplier.add');
Route::get('/admin/nha-cung-cap/cap-nhat/{id}',[SupplierController::class,'edit'])->name('supplier.edit');
Route::get('/admin/nha-cung-cap/xoa/{id}',[SupplierController::class,'delete'])->name('supplier.delete');
Route::any('/admin/nha-cung-cap/thuc-hien-them',[SupplierController::class,'handleInsert'])->name('supplier.handleInsert');
Route::any('/admin/nha-cung-cap/thuc-hien-sua',[SupplierController::class,'handleUpdate'])->name('supplier.handleUpdate');
/* ----- End ----- */


/* ----- Vaccine ----- */
Route::get('/admin/loai-vaccine',[VaccineController::class,'findAllTypeVaccineByAdmin'])-> name('typevaccine.index');
Route::get('/admin/loai-vaccine/them',[VaccineController::class,'addType'])-> name('typevaccine.add');
Route::get('/admin/loai-vaccine/sua/{id}',[VaccineController::class,'editType'])->name('typevaccine.edit');
Route::get('/admin/loai-vaccine/xoa/{id}',[VaccineController::class,'deleteType'])->name('typevaccine.delete');
Route::get('/admin/vaccine',[VaccineController::class,'findAllVaccineByAdmin'])->name('vaccine.index');
Route::get('/admin/vaccine/them',[VaccineController::class,'addVaccine'])-> name('vaccine.add');
Route::get('/admin/vaccine/sua/{id}',[VaccineController::class,'editVaccine'])-> name('vaccine.edit');
Route::get('/admin/vaccine/xoa/{id}',[VaccineController::class,'deleteVaccine'])->name('vaccine.delete');
Route::any('/admin/loai-vaccine/thuc-hien-them',[VaccineController::class,'handleInsertTypeVaccine']) -> name('typevaccine.handleInsert');
Route::any('/admin/loai-vaccine/thuc-hien-sua',[VaccineController::class,'handleUpdateTypeVaccine']) -> name('typevaccine.handleUpdate');
Route::any('/admin/vaccine/thuc-hien-them',[VaccineController::class,'handleInsertVaccine']) -> name('vaccine.handleInsert');
Route::any('/admin/vaccine/thuc-hien-sua',[VaccineController::class,'handleUpdateVaccine']) -> name('vaccine.handleUpdate');
/* ----- End ----- */

/* ----- Package ----- */
Route::get('/admin/loai-goi',[PackageController::class,'findAllTypePackageByAdmin'])-> name('typepackage.index');
Route::get('/admin/loai-goi/them',[PackageController::class,'addType'])-> name('typepackage.add');
Route::get('/admin/loai-goi/sua/{id}',[PackageController::class,'editType'])->name('typepackage.edit');
Route::get('/admin/loai-goi/xoa/{id}',[PackageController::class,'deleteType'])->name('typepackage.delete');
Route::get('/admin/goi-tiem',[PackageController::class,'findAllPackageByAdmin'])->name('package.index');
Route::get('/admin/goi-tiem/them',[PackageController::class,'addPackage'])-> name('package.add');
Route::get('/admin/goi-tiem/sua/{id}',[PackageController::class,'editPackage'])-> name('package.edit');
Route::get('/admin/goi-tiem/xoa/{id}',[PackageController::class,'deletePackage'])->name('package.delete');
Route::get('/admin/goi-tiem/chi-tiet/{id}',[PackageController::class,'detailPackage'])->name('package.detail');
Route::get('/admin/goi-tiem/chi-tiet/{id}/them',[PackageController::class,'addDetailPackage'])->name('package.detail_add');
Route::any('/admin/loai-goi/thuc-hien-them',[PackageController::class,'handleInsertType'])->name('typepackage.handleInsert');
Route::any('/admin/loai-goi/thuc-hien-sua',[PackageController::class,'handleUpdateType'])->name('typepackage.handleUpdate');
Route::any('/admin/goi-tiem/thuc-hien-them',[PackageController::class,'handleInsertPackage']) -> name('package.handleInsert');
Route::any('/admin/goi-tiem/thuc-hien-sua',[PackageController::class,'handleUpdatePackage']) -> name('package.handleUpdate');
Route::any('/admin/goi-tiem/thuc-hien-them',[PackageController::class,'handleInsertDetailPackage']) -> name('package.handleInsertDetail');

Route::get('/admin/khach-hang',[ClientController::class,'findAllClientByAdmin'])->name('client.index');
Route::get('/admin/khach-hang-kham-benh/{id}',[ClientController::class,'detailTreatment'])->name('client.treatment');
Route::get('/admin/khach-hang-dang-ky-tiem',[RegistrationInjectionController::class,'findAll'])->name('registration.index');
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
