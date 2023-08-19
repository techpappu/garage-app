<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard',function(){
   return view('admin.dashboard');
})->name('admin.dashboard');

require __DIR__.'/auth.php';

# Back-end users - only admin role users will be accessing this module in backend to manage users
Route::get('/admin/user', \App\Http\Controllers\Backend\User\Index::class)->name('admin.user');
Route::get('/admin/user/create', \App\Http\Controllers\Backend\User\Create::class)->name('admin.user.create');
Route::post('/admin/user/create', \App\Http\Controllers\Backend\User\Create::class)->name('admin.user.post.create');
Route::get('/admin/user/update/{id}', \App\Http\Controllers\Backend\User\Update::class)->name('admin.user.update');
Route::post('/admin/user/update/{id}', \App\Http\Controllers\Backend\User\Update::class)->name('admin.user.post.update');
Route::post('/admin/user/delete/{id}', \App\Http\Controllers\Backend\User\Delete::class)->name('admin.user.delete');

# Back-end roles - only admin role users will be accessing this module in backend to manage roles
Route::get('/admin/role', \App\Http\Controllers\Backend\Role\Index::class)->name('admin.role');
Route::get('/admin/role/create', \App\Http\Controllers\Backend\Role\Create::class)->name('admin.role.create');
Route::post('/admin/role/create', \App\Http\Controllers\Backend\Role\Create::class)->name('admin.role.post.create');
Route::get('/admin/role/update/{id}', \App\Http\Controllers\Backend\Role\Update::class)->name('admin.role.update');
Route::post('/admin/role/update/{id}', \App\Http\Controllers\Backend\Role\Update::class)->name('admin.role.post.update');
Route::post('/admin/role/delete/{id}', \App\Http\Controllers\Backend\Role\Delete::class)->name('admin.role.delete');
Route::get('/admin/role/permissions/{id}', \App\Http\Controllers\Backend\Role\Permission::class)->name('admin.role.permissions');
Route::post('/admin/role/permissions/{id}', \App\Http\Controllers\Backend\Role\Permission::class)->name('admin.role.permissions.post');

# Back-end permissions - only admin role users will be accessing this module in backend to manage permissions
Route::get('/admin/permission', \App\Http\Controllers\Backend\Permission\Index::class)->name('admin.permission');
Route::get('/admin/permission/create', \App\Http\Controllers\Backend\Permission\Create::class)->name('admin.permission.create');
Route::post('/admin/permission/create', \App\Http\Controllers\Backend\Permission\Create::class)->name('admin.permission.post.create');
Route::get('/admin/permission/update/{id}', \App\Http\Controllers\Backend\Permission\Update::class)->name('admin.permission.update');
Route::post('/admin/permission/update/{id}', \App\Http\Controllers\Backend\Permission\Update::class)->name('admin.permission.post.update');
Route::post('/admin/permission/delete/{id}', \App\Http\Controllers\Backend\Permission\Delete::class)->name('admin.permission.delete');

# Back-end Vehicle - only admin role Vehicle will be accessing this module in backend to manage Vehicle
Route::get('/admin/vehicle', \App\Http\Controllers\Backend\Vehicle\Index::class)->name('admin.vehicle');
Route::get('/admin/vehicle/create', \App\Http\Controllers\Backend\Vehicle\Create::class)->name('admin.vehicle.create');
Route::post('/admin/vehicle/create', \App\Http\Controllers\Backend\Vehicle\Create::class)->name('admin.vehicle.post.create');
Route::get('/admin/vehicle/update/{id}', \App\Http\Controllers\Backend\Vehicle\Update::class)->name('admin.vehicle.update');
Route::post('/admin/vehicle/update/{id}', \App\Http\Controllers\Backend\Vehicle\Update::class)->name('admin.vehicle.post.update');
Route::post('/admin/vehicle/delete/{id}', \App\Http\Controllers\Backend\Vehicle\Delete::class)->name('admin.vehicle.delete');

# Back-end Job - only admin role Job will be accessing this module in backend to manage Job
Route::get('/admin/job', \App\Http\Controllers\Backend\Job\Index::class)->name('admin.job');
Route::get('/admin/job/create', \App\Http\Controllers\Backend\Job\Create::class)->name('admin.job.create');
Route::post('/admin/job/create', \App\Http\Controllers\Backend\Job\Create::class)->name('admin.job.post.create');
Route::get('/admin/job/update/{id}', \App\Http\Controllers\Backend\Job\Update::class)->name('admin.job.update');
Route::post('/admin/job/update/{id}', \App\Http\Controllers\Backend\Job\Update::class)->name('admin.job.post.update');
Route::post('/admin/job/delete/{id}', \App\Http\Controllers\Backend\Job\Delete::class)->name('admin.job.delete');

# Back-end Item Under Job - only admin role Job and Item will be accessing this module in backend to manage Item
Route::get('/admin/job/{id}/items', \App\Http\Controllers\Backend\Item\Index::class)->name('admin.item');
Route::post('/admin/job/{id}/item/create', \App\Http\Controllers\Backend\Item\Create::class)->name('admin.item.post.create');
Route::get('/admin/job/item/update/{id}', \App\Http\Controllers\Backend\Item\Update::class)->name('admin.item.update');
Route::post('/admin/job/item/update/{id}', \App\Http\Controllers\Backend\Item\Update::class)->name('admin.item.post.update');
Route::post('/admin/job/item/delete/{id}', \App\Http\Controllers\Backend\Item\Delete::class)->name('admin.item.delete');
Route::get('/admin/items', \App\Http\Controllers\Backend\Item\AllIndex::class)->name('admin.item.all');

# Back-end Vendor - only admin role Vendor will be accessing this module in backend to manage Vendor
Route::get('/admin/vendor', \App\Http\Controllers\Backend\Vendor\Index::class)->name('admin.vendor');
Route::get('/admin/vendor/create', \App\Http\Controllers\Backend\Vendor\Create::class)->name('admin.vendor.create');
Route::post('/admin/vendor/create', \App\Http\Controllers\Backend\Vendor\Create::class)->name('admin.vendor.post.create');
Route::get('/admin/vendor/update/{id}', \App\Http\Controllers\Backend\Vendor\Update::class)->name('admin.vendor.update');
Route::post('/admin/vendor/update/{id}', \App\Http\Controllers\Backend\Vendor\Update::class)->name('admin.vendor.post.update');
Route::post('/admin/vendor/delete/{id}', \App\Http\Controllers\Backend\Vendor\Delete::class)->name('admin.vendor.delete');
