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

Route::get('/', function () {
    return view('index');
});

Route::prefix('services')->group(function () {

    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
});

Route::prefix('about')->group(function () {

    Route::get('mission', function () {
        return view('about.mission');
    })->name('mission');

    Route::get('talented-minds', function () {
        return view('about.talented-minds');
    })->name('talented-minds');

    Route::get('job-vacancies', function () {
        return view('about.job-vacancies');
    })->name('job-vacancies');
});

Route::prefix('service')->group(function () {

    Route::prefix('training')->group(function () {

        Route::get('digital-literacy', function () {
            return view('service.training.digital-literacy');
        })->name('digital-literacy');
        
        Route::post('digital-literacy', 'TrainingController@register');
        
        Route::get('web-development', function () {
            return view('service.training.web-development');
        })->name('web-development');
        
        Route::post('web-development', 'TrainingController@register');
        
        Route::get('programming', function () {
            return view('service.training.programming');
        })->name('programming');
        
        Route::get('networking', function () {
            return view('service.training.networking');
        })->name('networking');
       
        Route::post('programming', 'TrainingController@register');

    });

    Route::get('networking-services', function () {
        return view('service.networking-services');
    })->name('networking-services');

    
    Route::get('strategic-consulting', function () {
        return view('service.strategic-consulting');
    })->name('strategic-consulting');

    Route::get('app-development', function () {
        return view('service.app-development');
    })->name('app-development');

    Route::get('branding-and-logo', function () {
        return view('service.branding-and-logo');
    })->name('branding-and-logo');
   
    Route::get('digital-marketing', function () {
        return view('service.digital-marketing');
    })->name('digital-marketing');

    Route::get('training-and-development', function () {
        return view('service.training-and-development');
    })->name('training-and-development');

    Route::get('software-development', function () {
        return view('service.software-development');
    })->name('software-development');

    Route::get('website-development', function () {
        return view('service.website-development');
    })->name('website-development');
});

Route::get('clients', function () {
    return view('clients');
})->name('clients');


Route::resource('careers', 'CareerController');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('news-and-events', function () {
    return view('news-and-events');
})->name('news-and-events');


Route::resource('request-for-quote', 'RequestController')->only([
    'index', 'store'
]);

// Route::get('send_test_email', function(){
// 	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
// 	{
// 		$message->subject('Mailgun and Laravel are awesome!');
// 		$message->from('no-reply@altitude-tech.com', 'Website Name');
// 		$message->to('altitudetechnologynig@gmail.com');
// 	});
// });

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('terms-of-use', function () {
    return view('terms-of-use');
})->name('terms-of-use');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');

Route::resource('courseRegistrations', 'CourseRegistrationController');

Route::resource('requestQuotes', 'RequestQuoteController');