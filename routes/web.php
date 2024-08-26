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
        return view('index', compact('page', 'works'));
    }
    if ($slug == 'about' || $slug == 'prices') {
        return view('page/about', compact('page', 'works'));
    }
    if ($slug == 'otzyvy') {
        return view('page/otzyvy', compact('page', 'works'));
    }
    if ($slug == 'project') {
        $works = Work::latest()->get();
        return view('page/project', compact('page', 'works'));
    }
    if ($slug == 'dizajn-intererov') {
        return view('page/dizajn-intererov', compact('page', 'works'));
    }
    if ($slug == 'vopros-otvet' || $slug == 'kontakty') {
        return view('page/index', compact('page', 'works'));
    }


    $roomSlugs = [
        'studio_apartment',
        'remont-trehkomnatnoj',
        'studio_apartment1',
        'remont-dvuhkomnatnoj',
        'remont-chetyrehkomnatnoj',
        'remont-v-kottedzhe',
        'remont-doma',
        'remont-kommercheskih-pomeshhenij',
        'remont-ofisov',
        'remont-gostinoj',
        'remont-spalni',
        'remont-detskoj',
        'remont-kuhni',
        'remont-vannoj',
        'remont-tualeta',
        'remont-sanuzla',
    ];

    if (in_array($slug, $roomSlugs)) {
        return view('page/room', compact('page', 'works'));
    }


    return view('page/standart', compact('page', 'works'));
});
