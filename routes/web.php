<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFPrController;
use App\Http\Controllers\PDFHteController;
use App\Http\Controllers\PDFHtsController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\supprimercontroller;
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
Route::get('/home', [ProduitController::class,'index'])->name('home');

Route::get('/entree/{produit}', [ProduitController::class,'historiqueEntree'])->name('entree');
Route::get('/sortie/{produit}', [ProduitController::class,'historiqueSortie'])->name('sortie'); 

Route::view('/produits/htentree','ajouter');
Route::post('/ajouterEntree', [ProduitController::class,'ajouterEntree'])->name('ajouterEntree');


Route::view('/produits/htsortie','sup');
Route::post('/ajouterSortie', [supprimercontroller::class,'ajouterSortie'])->name('ajouterSortie');

Route::get('/download-pdf-Pr', [PDFPrController::class, 'downloadPDF'])->name('download-pdf-Pr');
Route::get('/download-pdf-Hts', [PDFHtsController::class, 'downloadPDF'])->name('download-pdf-Hts');  
Route::get('/download-pdf-Hte', [PDFHteController::class, 'downloadPDF'])->name('download-pdf-Hte');

Route::post('/produits/recherche',[ProduitController::class,'search']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
