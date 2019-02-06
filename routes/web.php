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
Route::get('/set_language/{Lang}', 'Controller@setLanguage')->name('set_language');

Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*servicios*/
Route::get('/servicios','ServiciosController@index')->name('servicios');

/* Blog */
Route::get('/blog','BlogController@index')->name('blog');

/* Trabajo */
Route::get('/trabajo','TrabajoController@index')->name('trabajo');

/* Freelancers */
Route::get('/freelancer','FreelancerController@index')->name('freelancer');

/* Contacto */
Route::get('/contacto','ContactoController@index')->name('contacto');

Route::get('/images/{path}/{attachment}', function($path, $attachment) {
	$file = sprintf('storage/%s/%s', $path, $attachment);
	if(File::exists($file)) {
		return Image::make($file)->response();
	}
});

/**/
Route::group(['middleware' => ['auth']], function(){
    /* rutas para las suscripciones*/
    Route::group(['prefix' => 'subscriptions'], function (){
        Route::get('/plans','SubscriptionController@plans')
        ->name('subscriptions.plans');
        Route::get('/admin','SubscriptionController@admin')
        ->name('subscriptions.admin');
        Route::post('/process_subscription','SubscriptionController@processSubscription')
        ->name('subscriptions.process_subscription');
        Route::post('/resume','SubscriptionController@resume')->name('subscriptions.resume');
        Route::post('/cancel','SubscriptionController@cancel')->name('subscriptions.cancel');
    });

    /* rutas para las facturas */
    Route::group(['prefix' => 'invoices'], function (){
        Route::get('/admin','InvoiceController@admin')->name('invoices.admin');
        Route::get('/{invoice}/download','InvoiceController@download')->name('invoices.download');
    });
});



/* rutas para los post */
Route::group(['prefix' => 'posts'], function () {
    Route::get('/{post}', 'PostController@show')->name('posts.card-posts');
});

