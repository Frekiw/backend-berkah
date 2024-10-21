<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ElectricController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectricalController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\MechanicalController;
use App\Http\Controllers\ResidentalController;
use App\Http\Controllers\TheprofileController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\Modal_spaceController;
use App\Http\Controllers\ResidentialController;
use App\Http\Controllers\Modal_articleController;
use App\Http\Controllers\Modal_profileController;
use App\Http\Controllers\SpaceplanningController;
use App\Http\Controllers\TheportofolioController;
use App\Http\Controllers\Modal_electricController;
use App\Http\Controllers\Modal_mechanicController;
use App\Http\Controllers\Modal_portofolioController;
use App\Http\Controllers\Modal_residentalController;
use App\Http\Controllers\MaintenanceRepairController;
use App\Http\Controllers\Modal_maintenanceController;

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
Route::prefix('dashboard')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('residentals', ResidentalController::class);
        Route::resource('homepages', HomepageController::class);
        Route::resource('spaces', SpaceController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('electrics', ElectricController::class);
        Route::resource('maintenances', MaintenanceController::class);
        Route::resource('mechanics', MechanicController::class);
        Route::resource('profils', ProfileController::class);
        Route::resource('modal_residentals', Modal_residentalController::class);
        Route::resource('modal_spaces', Modal_spaceController::class);
        Route::resource('modal_electrics', Modal_electricController::class);
        Route::resource('modal_maintenances', Modal_maintenanceController::class);
        Route::resource('modal_mechanics', Modal_mechanicController::class);
        Route::resource('modal_profils', Modal_profileController::class);
        Route::resource('modal_articles', Modal_articleController::class);
        Route::resource('modal_portofolios', Modal_portofolioController::class);
    });

Route::resource('', HomeController::class); 
Route::resource('electricals', ElectricalController::class);   
Route::resource('theprofiles', TheprofileController::class);   
Route::resource('theportofolios', TheportofolioController::class);   
Route::resource('spaceplannings', SpaceplanningController::class);   
Route::resource('residentials', ResidentialController::class);   
Route::resource('mechanicals', MechanicalController::class);   
Route::resource('maintenancerepairs', MaintenanceRepairController::class);   
Route::resource('css', CsController::class);   
Route::resource('konsultasis', KonsultasiController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
