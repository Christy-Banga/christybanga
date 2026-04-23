<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/telecharger-cv', function () {
    $filePath = storage_path('app/cv/CV.pdf');  // Le chemin exact du fichier PDF

        return response()->download($filePath, 'Anvoh-Christy-Yannick-Banga__CV.pdf');

})->name('cv.download');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
