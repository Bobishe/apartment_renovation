<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Page;
use App\Models\Work;
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

    // Инициализируем переменную для работ
    $works = null;

    // Проверяем slug
    if ($slug == 'index') {
        // Если slug равен 'home' или 'index', получаем последние три работы
        $works = Work::latest()->take(3)->get();
    }

    // Возвращаем представление и передаем данные страницы и, если есть, работы
    return view('page', compact('page', 'works'));
});
