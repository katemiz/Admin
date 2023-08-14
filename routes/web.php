<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Livewire\UsersComponent;



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
    return view('welcome');
});

// Route::get('lang/{lang}', [
//     'as' => 'lang.switch',
//     'uses' => 'App\Http\Controllers\LanguageController@switchLang',
// ]);




Route::middleware('auth')->group(function () {

    Route::get('/admin/users', [UserController::class, 'list']);
    Route::get('/admin/roles', [RoleController::class, 'list']);



    // ADMIN
    // ************************************************************
    Route::get('/admin/users', UsersComponent::class);
    // Route::get('/admin/roles', ListRoles::class);
    // Route::get('/admin/permissions', ListPermissions::class);

    // Route::get('/admin/users/view/{id}', [RolesPermissionsController::class, 'usrview']);
    // Route::get('/admin/roles/view/{id}', [RolesPermissionsController::class, 'roleview']);
    // Route::get('/admin/permissions/view/{id}', [RolesPermissionsController::class, 'permissionview']);

    // Route::get('/admin/users/form/{id?}', [RolesPermissionsController::class, 'usrform']);
    // Route::get('/admin/roles/form/{id?}', [RolesPermissionsController::class, 'roleform']);
    // Route::get('/admin/permissions/form/{id?}', [RolesPermissionsController::class, 'permissionform']);

    // Route::post('/admin/users/store/{id?}', [RolesPermissionsController::class, 'usrstore']);
    // Route::post('/admin/roles/store/{id?}', [RolesPermissionsController::class, 'rolestore']);
    // Route::post('/admin/permissions/store/{id?}', [RolesPermissionsController::class, 'permissionstore']);

    // Route::get('/admin/users/delete/{id}', [UserController::class, 'delete']);
    // ************************************************************


















    // Route::get('/admin/permissions', [PermissionController::class, 'list']);

    // Route::get('/admin/users/view/{id}', [RolesPermissionsController::class, 'usrview']);
    // Route::get('/admin/roles/view/{id}', [RolesPermissionsController::class, 'roleview']);
    // Route::get('/admin/permissions/view/{id}', [RolesPermissionsController::class, 'permissionview']);

    // Route::get('/admin/users/form/{id?}', [RolesPermissionsController::class, 'usrform']);
    // Route::get('/admin/roles/form/{id?}', [RolesPermissionsController::class, 'roleform']);
    // Route::get('/admin/permissions/form/{id?}', [RolesPermissionsController::class, 'permissionform']);

    // Route::post('/admin/users/store/{id?}', [RolesPermissionsController::class, 'usrstore']);
    // Route::post('/admin/roles/store/{id?}', [RolesPermissionsController::class, 'rolestore']);
    // Route::post('/admin/permissions/store/{id?}', [RolesPermissionsController::class, 'permissionstore']);

    // Route::get('/admin/users/delete/{id}', [UserController::class, 'delete']);


});

require __DIR__.'/auth.php';
