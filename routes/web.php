<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallbackController;



use App\Models\Page;
use App\Models\Work;
use App\Models\VideoOtchety;
use App\Models\Blog;
use App\Models\blog_about_designs;
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


Route::post('/send-callback', [CallbackController::class, 'send']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{slug}', function ($slug) {
    // Найдите страницу по ее slug (уникальному URL)
    $page = Page::where('slug', $slug)->firstOrFail();

    // Инициализируем переменную для работ
    $works = null;

    // Проверяем slug
    if ($slug == 'index' || $slug == '/') {
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
    if ($slug == 'video-otchety-o-prodelannoj-rabote') {
        $works = VideoOtchety::latest()->get();
        return view('page/video-otchety', compact(
            'page',
            'works'
        ));
    }
    if ($slug == 'blog') {
        $works = Blog::latest()->get();
        return view('page/blog', compact(
            'page',
            'works'
        ));
    }
    if ($slug == 'o-dizajne') {
        $works = blog_about_designs::latest()->get();
        return view('page/o-dizajne', compact(
            'page',
            'works'
        ));
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
        'remont-balkona',
        'dizajnerskij-remont-kvartir',
        'remont-pod-klyuch',
        'kapitalnyj-remont',
        'evroremont',
        'kosmeticheskij-remont-kvartir',
        'remont-v-hrushhyovke',
        'remont-v-novostrojke',
        'chernovaya-otdelka-2',
        'vyravnivanie-sten-shtukaturkoj',
        'shpaklyovka-sten',
        'poklejka-oboev-2',
        'dekorativnaya-shtukaturka',
        'montazh-tyoplogo-pola',
        'styazhka-pola',
        'ustrojstvo-nalivnogo-pola',
        'ukladka-linoleuma',
        'ukladka-laminata-2',

    ];

    if (in_array($slug, $roomSlugs)) {
        return view('page/room', compact('page', 'works'));
    }


    return view('page/standart', compact('page', 'works'));
});
