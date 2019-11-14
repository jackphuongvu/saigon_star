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

 /**
  * start Route about us
  */
Route::get('/aboutus', function () {
    return view('pages.aboutus.welcome');
});
Route::get('/aboutus/ourmission', function () {
    return view('pages.aboutus.ourmission');
});
Route::get('/aboutus/ourhistory', function () {
    return view('pages.aboutus.ourhistory');
});
Route::get('/aboutus/aboutus', function () {
    return view('pages.aboutus.aboutus');
});
Route::get('/aboutus/leadershipTeam', function () {
    return view('pages.aboutus.leadershipTeam');
});
Route::get('/aboutus/teacher', function () {
    return view('pages.aboutus.teacher');
});
Route::get('/aboutus/student', function () {
    return view('pages.aboutus.student');
});

Route::get('/aboutus/administrationTeam', function () {
    return view('pages.aboutus.administrationTeam');
});
Route::get('/aboutus/criticalfriends', function () {
    return view('pages.aboutus.criticalfriends');
});

/**
  * End Route about us
  */
  /**
  * start Route admissions
  */

Route::get('/ancurriculum/earlyear', function () {
    return view('pages.ancurriculum.earlyear');
});
Route::get('/ancurriculum/primary', function () {
    return view('pages.ancurriculum.primary');
});
Route::get('/ancurriculum/middleyears', function () {
    return view('pages.ancurriculum.middleyears');
});
Route::get('/ancurriculum/assessment', function () {
    return view('pages.ancurriculum.assessment');
});
Route::get('/ancurriculum/pathwaytouniversity', function () {
    return view('pages.ancurriculum.pathwaytouniversity');
});
Route::get('/ancurriculum/teachandlearning', function () {
    return view('pages.ancurriculum.teachandlearning');
});
Route::get('/ancurriculum/curriculumdownloads', function () {
    return view('pages.ancurriculum.curriculumdownloads');
});

  /**
  * End Route admissions
  */


/**
  * End Route about us
  */
  /**
  * start Route admissions
  */

Route::get('/admissions/welcometoadmissions', function () {
    return view('pages.admissions.welcometoadmissions');
});
Route::get('/admissions/feesandtuitions', function () {
    return view('pages.admissions.feesandtuitions');
});
Route::get('/admissions/adprocess', function () {
    return view('pages.admissions.adprocess');
});
Route::get('/admissions/agesayears', function () {
    return view('pages.admissions.agesayears');
});
Route::get('/admissions/bookatrial', function () {
    return view('pages.admissions.bookatrial');
});
Route::get('/admissions/bookaparent', function () {
    return view('pages.admissions.bookaparent');
});

  /**
  * End Route admissions
  */

   /**
  * start Route CONTACT AND SERVICES
  */

  Route::get('/contactandservices/contactinformation', function () {
    return view('pages.contactandservices.contactinformation');
});
Route::get('/contactandservices/Recruitment', function () {
    return view('pages.contactandservices.Recruitment');
});
Route::get('/contactandservices/how-to-find-us', function () {
    return view('pages.contactandservices.howtofindus');
});
Route::get('/contactandservices/schoolbus', function () {
    return view('pages.contactandservices.schoolbus');
});
Route::get('/contactandservices/schoolcanteen', function () {
    return view('pages.contactandservices.schoolcanteen');
});
Route::get('/contactandservices/schooluniform', function () {
    return view('pages.contactandservices.schooluniform');
});
   /**
  * END  Route CONTACT AND SERVICES
  */

  /**
  * End Route Communitry
  */

   /**
  * start Route COMMUNITY
  */

  Route::get('/community/galleries', function () {
    return view('pages.community.galleries');
});
Route::get('/community/schoolcalendar', function () {
    return view('pages.community.schoolcalendar');
});
Route::get('/community/documentdownloads', function () {
    return view('pages.community.documentdownloads');
});
Route::get('/community/FAQ', function () {
    return view('pages.community.FAQ');
});
Route::get('/community/testimonial', function () {
    return view('pages.community.testimonial');
});
Route::get('/community/earlyyears', function () {
    return view('pages.community.earlyyears');
});
Route::get('/community/newsprimary', function () {
    return view('pages.community.newsprimary');
});

Route::get('/community/middleyear', function () {
    return view('pages.community.middleyear');
});

   /**
  * END  Route COMMUNITY
  */
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
