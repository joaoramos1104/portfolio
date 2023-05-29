<?php

use Illuminate\Support\Facades\Route;



//----------------------------------------------------------------------------------------------------------------------

Auth::routes();

//Index Portifólio
Route::get('/', [App\Http\Controllers\Index\IndexController::class, 'index'])->name('index');

//send E-mail
Route::post('/message', [App\Http\Controllers\Index\IndexController::class, 'email'])->name('message');

//Admin create and update
Route::post('/admin/register',[\App\Http\Controllers\Admin\AdminRegisterController::class, 'store'])->name('admin_register');
Route::put('/admin/update/{id}',[\App\Http\Controllers\Admin\AdminRegisterController::class, 'update'])->name('update_password');

//Login admin
Route::post('/admin', [\App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin_login_submit');
Route::get('/admin/login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'index'])->name('admin_login');

//Admin Portifólio
Route::group(['middleware'=>['auth:admin']], function (){
    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::post('/admin/profiles/', [App\Http\Controllers\Admin\AdminController::class, 'storeProfile'])->name('create_profile');
    Route::put('/admin/profiles/{id}',[App\Http\Controllers\Admin\AdminController::class, 'updateProfile'])->name('update_profile');
    Route::delete('/admin/profiles/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroyProfile'])->name('delete_profile');
    Route::post('/admin/education/', [App\Http\Controllers\Admin\AdminController::class, 'storeEducation'])->name('create_education');
    Route::put('/admin/education/{id}', [App\Http\Controllers\Admin\AdminController::class, 'updateEducation'])->name('update_education');
    Route::delete('/admin/education/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroyEducation'])->name('delete_education');
    Route::post('/admin/experiences/', [App\Http\Controllers\Admin\AdminController::class, 'storeExperience'])->name('create_experience');
    Route::put('/admin/experiences/{id}', [App\Http\Controllers\Admin\AdminController::class, 'updateExperience'])->name('update_experience');
    Route::delete('/admin/experiences/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroyExperience'])->name('delete_experience');
    Route::post('/admin/skills/', [App\Http\Controllers\Admin\AdminController::class, 'storeSkill'])->name('create_skill');
    Route::delete('/admin/skills/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroySkill'])->name('delete_skill');
    Route::post('/admin/soft_skills/', [App\Http\Controllers\Admin\AdminController::class, 'storeSoftSkill'])->name('create_soft_skill');
    Route::delete('/admin/soft_skills/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroySoftSkill'])->name('delete_soft_skill');
    Route::post('/admin/awards/', [App\Http\Controllers\Admin\AdminController::class, 'storeAward'])->name('create_award');
    Route::delete('/admin/awards/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroyAward'])->name('delete_award');
    Route::post('/admin/interests/', [App\Http\Controllers\Admin\AdminController::class, 'storeInterest'])->name('create_interest');
    Route::put('/admin/interests/{id}', [App\Http\Controllers\Admin\AdminController::class, 'updateInterest'])->name('update_interest');
    Route::delete('/admin/interests/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroyInterest'])->name('delete_interest');
    Route::post('/admin/projects', [App\Http\Controllers\Admin\AdminController::class, 'storeProject'])->name('create_project');
    Route::delete('/admin/projects/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroyProject'])->name('delete_project');

});



