<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

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

// Route::get('/reboot', [PetController::class, 'displayPets']);
Route::get('/pets', [PetController::class, 'displayPets']);
Route::get('/pets/create', [PetController::class, 'petCreator']);
Route::get('/pets/{id}', [PetController::class, 'showOnePet']);
Route::post('/pets', [PetController::class,'createPet']);
