<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Page;
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

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{slug}', function ($slug) {
    // Найдите страницу по ее slug (уникальному URL)
    $page = Page::where('slug', $slug)->firstOrFail();

    // Верните представление и передайте в него данные страницы
    return view('page', compact('page'));
});
