<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ParticipantController::class, 'index'])->name('participants.index');



route::middleware(['auth'])->group(function(){
Route::resource('participants', ParticipantController::class)->except('index');




Route::get('/dashboard', [ParticipantController::class, 'index'])->name('dashboard');

});



require __DIR__.'/auth.php';
