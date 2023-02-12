<?php

use App\Models\Enviament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\enviamentsOberts;
use function Sodium\add;

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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/insert', [App\Http\Controllers\HomeController::class, 'index'])->name('insert');

//rutas de enviaments
Route::get('/enviaments/editarEstat/{id}', [\App\Http\Controllers\enviamentsOberts::class, 'getestatsEdit']);
Route::get('/oferta/enviar/canviEstat/{idEnviament}/{Estat}', [\App\Http\Controllers\enviamentsOberts::class, 'ChangeEstat']);
Route::get('/getEnviaments', [enviamentsOberts::class, 'getAllEnviaments']);
//Route::get('/getEnviaments', 'enviamentsOberts@getAllEnviaments')->name('getEnviaments');

Route::post('/canviEstatEnviament/{id}', [\App\Http\Controllers\enviamentsOberts::class, 'canviEstatEnviament']);

//rutas de empresa

Route::get('/empreses', [\App\Http\Controllers\Empreses::class, 'getAllEmpreses']);
Route::get('/empreses/add/{nom}/{adresa}/{telefon}/{correu}', [\App\Http\Controllers\Empreses::class, 'addEmpresa']);
Route::get('/empresa/edit/{id}/{nom?}/{adresa?}/{telefon?}/{correu?}', [\App\Http\Controllers\Empreses::class, 'editEmpresa']);
Route::get('/empreses/edit/{id}', [\App\Http\Controllers\Empreses::class, 'getDataEdit']);
//Route::get('/empresa/oferta/edit/{id}/{descripcio?}/{NombreVacants?}/{Curs?}/{NomContacte?}/{CognomsContacte?}/{EmailContacte?}',[\App\Http\Controllers\OfertaController::class,'editOferta']);
//Route::get('/empresa/oferta/add/{descripcio}/{NombreVacants}/{Curs}/{NomContacte}/{CognomsContacte}/{EmailContacte}/{$idCicle}/{idEmpresa}',[\App\Http\Controllers\OfertaController::class,'addOferta']);
//Route::get('/empreses/add/{nom}/{adresa}/{telefon}/{correu}', [\App\Http\Controllers\Empreses::class, 'store']);
//Route::get('/empreses/add', [\App\Http\Controllers\Empreses::class, 'addEmpreses']);

Route::view('/addEmpresa','empreses.addEmpresa');

Route::post('/addEmpresaStore', [\App\Http\Controllers\Empreses::class, 'store']);
Route::post('/editEmpresaStore/{id}', [\App\Http\Controllers\Empreses::class, 'editStore']);

//rutas de alumnes

Route::get('/alumnes', [\App\Http\Controllers\alumnecontroler::class, 'getAllAlumnes']);
Route::get('/alumnes/add/{name}/{lastName}/{DNI}/{curs}/{cicle}/{grup?}/{telefon?}/{email?}/{idTutor}/{fent_practiques}/{ruta?}', [\App\Http\Controllers\alumnecontroler::class, 'addAlumne']);
Route::get('/alumnes/edit/{name}/{lastName}/{DNI}/{curs}/{cicle}/{grup?}/{telefon?}/{email?}/{idTutor}/{fent_practiques}/{ruta?}', [\App\Http\Controllers\alumnecontroler::class, 'editAlumne']);
Route::get('/alumnes/edit/{id}', [\App\Http\Controllers\alumnecontroler::class, 'getDataEdit']);
Route::get('/addAlumne', [\App\Http\Controllers\alumnecontroler::class, 'addAlumneView']);

Route::view('/alumne/add','alumnes.addAlumne');

Route::post('/editAlumneStore/{id}', [\App\Http\Controllers\alumnecontroler::class, 'editStore']);
Route::post('/addAlumneStore', [\App\Http\Controllers\alumnecontroler::class, 'store']);

//rutas de oferta

Route::get('/oferta',[\App\Http\Controllers\OfertaController::class, 'getAllOfertas']);;
Route::get('/empresa/ofertes/edit/{id}', [\App\Http\Controllers\OfertaController::class, 'getDataEdit']);
Route::get('/ofertes/restaNumVacants/{id}', [\App\Http\Controllers\OfertaController::class, 'getNumVacantsEdit']);
Route::get('/empresa/tutor/oferta/{idOferta}/{numvacants}', [\App\Http\Controllers\OfertaController::class, 'RestaNumVacants']);
Route::get('/addOferta', [\App\Http\Controllers\OfertaController::class, 'addOfertaView']);

//Route::view('/addOferta','ofertes.addOferta');

Route::post('/addOfertaStore', [\App\Http\Controllers\OfertaController::class, 'store']);
Route::post('/editOfertaStore/{id}', [\App\Http\Controllers\OfertaController::class, 'editStore']);
Route::post('/restaNumVacants/{id}', [\App\Http\Controllers\OfertaController::class, 'restaNumVacantspost']);

//rutas de users

Route::get('/fitxa', [\App\Http\Controllers\userController::class, 'getDataEdit']);

Route::post('/editProfile', [\App\Http\Controllers\userController::class, 'editStore']);
