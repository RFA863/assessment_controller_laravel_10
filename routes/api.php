<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('assessment')->group(function () {

    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

    // Route::get('/user_apk', [App\Http\Controllers\Api\Assessment\Opd\UserApkController::class, 'index']);
    // Route::get('/jenis_kegiatan', [App\Http\Controllers\Api\Assessment\Opd\JenisKegiatanController::class, 'index']);
    // Route::get('/status', [App\Http\Controllers\Api\Assessment\Assessor\StatusController::class, 'index']);

    // Route::group(['middleware' => 'auth:sanctum'], function () {

    //     Route::prefix('admin')->group(function () {

    //         Route::apiResource('/user', App\Http\Controllers\Api\Assessment\Admin\UserController::class)->middleware('restrictRole:admin');
    //         Route::apiResource('/opd', App\Http\Controllers\Api\Assessment\Admin\OpdController::class)->middleware('restrictRole:admin');
    //     });

    //     Route::prefix('opd')->group(function () {

    //         Route::apiResource('/developer', App\Http\Controllers\Api\Assessment\Opd\DeveloperController::class)->middleware('restrictRole:opd');

    //         Route::apiResource('/programer', App\Http\Controllers\Api\Assessment\Opd\ProgramerController::class)->middleware('restrictRole:opd');

    //         Route::apiResource('/aplikasi', App\Http\Controllers\Api\Assessment\Opd\ApkController::class)->middleware('restrictRole:opd');
    //         Route::put('/aplikasi/update/{apk}', [App\Http\Controllers\Api\Assessment\Opd\ApkController::class, 'update']);
    //         Route::delete('/aplikasi/delete/{apk}', [App\Http\Controllers\Api\Assessment\Opd\ApkController::class, 'destroy']);

    //         Route::apiResource('/assessment', App\Http\Controllers\Api\Assessment\Opd\AssessmentController::class)->middleware('restrictRole:opd');

    //         Route::apiResource('/hosting_subdomain', App\Http\Controllers\Api\Assessment\Opd\HostingSubDomainController::class,)->middleware('restrictRole:opd');

    //         Route::apiResource('/dokumen', App\Http\Controllers\Api\Assessment\Opd\DokController::class,)->middleware('restrictRole:opd');
    //     });

    //     Route::prefix('assessor')->group(function () {

    //         Route::apiResource('/tata_kelola', App\Http\Controllers\Api\Assessment\Assessor\TataKelolaController::class)->middleware('restrictRole:assessment');

    //         Route::apiResource('/penilaian_tata_kelola', App\Http\Controllers\Api\Assessment\Assessor\PenilaianTataKelolaController::class)->middleware('restrictRole:assessment');

    //         Route::apiResource('/penilaian_ui_ux', App\Http\Controllers\Api\Assessment\Assessor\PenilaianUiUxController::class)->middleware('restrictRole:assessment');

    //         Route::apiResource('/penilaian_otentifikasi', App\Http\Controllers\Api\Assessment\Assessor\PenilaianOtentifikasiController::class)->middleware('restrictRole:assessment');

    //         Route::apiResource('/manajemen_sesi', App\Http\Controllers\Api\Assessment\Assessor\ManajemenSesiController::class)->middleware('restrictRole:assessment');

    //         Route::apiResource('/kontrol_akses', App\Http\Controllers\Api\Assessment\Assessor\KontrolAksesController::class)->middleware('restrictRole:assessment');
    //     });
    // });
});
