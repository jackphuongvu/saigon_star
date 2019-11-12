<?php

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

//Route::get('/home', function () {
//    return view('pages.home');
//});
//Route::get('/about-us', function () {
//    return view('pages.about-us');
//});
//
//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});

//

// Route::group([
//    'prefix' => 'blog', // Must match its `slug` record in the DB > `data_types`
//    'middleware' => ['web'],
//    'as' => 'voyager-blog.blog.',
//    'namespace' => $namespace,
//], function () {
//    Route::get('/', ['uses' => 'PostController@getPosts', 'as' => 'list']);
//    Route::get('{slug}', ['uses' => 'PostController@getPost', 'as' => 'post']);
//});
//Route::group([
//    'prefix' => 'testimonials',
//], function () {
//    Route::get('/{slug}', 'TestimonialController@index');
//});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/aboutus', function () {
    return view('pages.aboutus.welcome');
});
Route::get('/aboutus/ourmission', function () {
    return view('pages.aboutus.ourmission');
});
Route::get('/aboutus', function () {
    return view('pages.aboutus.ourhistory');
});
Route::get('/aboutus', function () {
    return view('pages.aboutus.aboutus');
});
Route::get('/aboutus', function () {
    return view('pages.aboutus.welcome');
});

Route::get('aboutus/{menu_item}', function ($menu_item) {
    if ($menu_item === 'welcome') {
        return view('pages.aboutus.welcome');
    } else if ($menu_item === 'administractionTeam') {
        return view('pages.aboutus.administractionTeam.blade');
    } else if ($menu_item === 'ourhistory') {
        return view('pages.aboutus.ourhistory.blade');
    }
    else if ($menu_item === 'teacher') {
        return view('pages.aboutus.teacher.blade');
    }
    else if ($menu_item === 'student') {
        return view('pages.aboutus.student.blade');
    }
    else if ($menu_item === 'criticafriends') {
        return view('pages.aboutus.criticafriends.blade');
    }
    else if ($menu_item === 'aboutus') {
        return view('pages.aboutus.aboutus.blade');
    }
    else if ($menu_item === 'ourmission') {
        return view('pages.aboutus.ourmission.blade');
    }
    return view('pages.aboutus.aboutus');
});


// END ROUTE ABOUTE US


// Route::get('projects', function()
// {
//     return View::make('pages.projects');
// });
// Route::get('contact', function()
// {
//     return View::make('pages.contact');
// });
Route::get('schoollife/{menu_item}', function ($menu_item) {
    if ($menu_item === 'sports') {
        return view('pages.schoollife.sports');
    } else if ($menu_item === 'art-design-music') {
        return view('pages.schoollife.art-design-music.blade');
    } else if ($menu_item === 'performing-arts') {
        return view('pages.schoollife.performing-arts.blade');
    }
    else if ($menu_item === 'after-school-activities') {
        return view('pages.schoollife.after-school-activities.blade');
    }
    else if ($menu_item === 'week-without-walls') {
        return view('pages.schoollife.performing-arts.blade');
    }
    // ============== ============== ==============
//    else if ($menu_item === 'performing-arts') {
//        return view('pages.schoollife.performing-arts.blade');
//    }
//    else if ($menu_item === 'performing-arts') {
//        return view('pages.schoollife.performing-arts.blade');
//    }
//    else if ($menu_item === 'performing-arts') {
//        return view('pages.schoollife.performing-arts.blade');
//    }
//    else if ($menu_item === 'performing-arts') {
//        return view('pages.schoollife.performing-arts.blade');
//    }
    return view('pages.schoollife.schoollife');
});
