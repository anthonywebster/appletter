<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('auth/facebook','Auth\AuthController@redirectToProvider');

    Route::get('auth/facebook/callback','Auth\AuthController@handleProviderCallback');

    Route::get('payment/{id}/comprar','PaymentController@postPayment');
    Route::get('payment',['as' => 'payment','uses' => 'PaymentController@postPayment']);

    Route::get('payment/status',['as' => 'payment.status', 'uses' => 'PaymentController@paymentStatus']);

    Route::get('dashboard/templates/lista','TemplateController@lista');
    Route::get('dashboard/templates/pagos','TemplateController@payments');
    Route::get('dashboard/templates/{id}/imprimir','TemplateController@imprimir');
    
    
    Route::group(['prefix' => 'dashboard','middleware' => ['auth']],function(){
        Route::get('/','DashboardController@index');
        Route::get('templates/all','TemplateController@all');
        Route::get('templates/list','TemplateController@list');
        
        Route::post('templates/{id}/cambiar','TemplateController@templateChange');
        Route::get('templates/{id}/cambiar','TemplateController@change');
        
        Route::get('templates/{id}/enviar','TemplateController@send');
        Route::resource('templates','TemplateController');
        Route::resource('pago','PaymentController');
        Route::resource('profile','ProfileController');
        Route::resource('faq','FaqController');
    });

    Route::get('/home', 'HomeController@home');

    Route::get('/', 'HomeController@index');
});
