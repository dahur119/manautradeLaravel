<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;


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





Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/services', [PageController::class, 'services'])->name('services');



// Oil & Gas
Route::get('/oil-gas', [ServiceController::class, 'oilGas'])->name('oil-gas');
Route::get('/base-oil', [ServiceController::class, 'baseOil'])->name('base-oil');
Route::get('/premium-motor-spirit', [ServiceController::class, 'premiumMotorSpirit'])->name('premium-motor-spirit');
Route::get('/automotive-gas-oil', [ServiceController::class, 'automotiveGasOil'])->name('automotive-gas-oil');
Route::get('/high-density-polyethylene', [ServiceController::class, 'highDensityPolyethylene'])->name('high-density-polyethylene');
Route::get('/low-density-polyethylene', [ServiceController::class, 'lowDensityPolyethylene'])->name('low-density-polyethylene');
Route::get('/polypropylene', [ServiceController::class, 'polypropylene'])->name('polypropylene');
Route::get('/polyethylene-terephthalate', [ServiceController::class, 'polyethyleneTerephthalate'])->name('polyethylene-terephthalate');
Route::get('/blow-molding', [ServiceController::class, 'blowMolding'])->name('blow-molding');
Route::get('/low-pour-fuel-oil', [ServiceController::class, 'lowPourFuelOil'])->name('low-pour-fuel-oil');
Route::get('/marine-diesel-oil', [ServiceController::class, 'marineDieselOil'])->name('marine-diesel-oil');
Route::get('/recycling-machine', [ServiceController::class, 'recyclingMachine'])->name('recycling-machine');
Route::get('/used-lubricants', [ServiceController::class, 'usedLubricants'])->name('used-lubricants');



Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');







Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');


Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog-detail');
Route::put('/blogs/{slug}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{slug}', [BlogController::class, 'destroy'])->name('blogs.destroy');


require __DIR__.'/auth.php';
