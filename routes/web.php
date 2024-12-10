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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('admin/pessoa', 'App\\Http\\Controllers\\Admin\PessoaController');
Route::resource('admin/u-f', 'App\\Http\\Controllers\\Admin\UFController');
Route::resource('admin/medico', 'App\\Http\\Controllers\\Admin\MedicoController');
Route::resource('admin/especialidade', 'App\\Http\\Controllers\\Admin\EspecialidadeController');
Route::resource('admin/medico_-especialidade', 'App\\Http\\Controllers\\Admin\Medico_EspecialidadeController');
Route::resource('admin/consulta', 'App\\Http\\Controllers\\Admin\ConsultumController');
Route::resource('admin/patologia', 'App\\Http\\Controllers\\Admin\PatologiumController');
Route::resource('admin/consulta_-patologia', 'App\\Http\\Controllers\\Admin\Consulta_PatologiumController');
Route::resource('admin/medicamento', 'App\\Http\\Controllers\\Admin\MedicamentoController');
Route::resource('admin/tratamento', 'App\\Http\\Controllers\\Admin\TratamentoController');
Route::resource('admin/contato', 'App\\Http\\Controllers\\Admin\ContatoController');