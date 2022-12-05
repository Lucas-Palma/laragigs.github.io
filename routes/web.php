<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
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


// All Listings
Route::get('/', [ListingController::class, 'index']);



// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}',
[ListingController::class, 'update']);

// Delte listing
Route::delete('/listings/{listing}',
[ListingController::class, 'destroy']);

// Single Listing 
// It has to be at the bottom because it shares the same route as create.
// Otherwise it'll cause a 404 error.
Route::get('/listings/{listing}',
[ListingController::class, 'show']);
