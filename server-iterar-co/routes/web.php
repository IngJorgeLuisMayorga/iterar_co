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

//
Route::redirect('/', '/home');
Route::get('/home','Home\HomeController@view');
Route::get('/shop','ShopController@view');
Route::get('/admin','AdminController@view');

Route::get('/app','AppController@view');
Route::get('/app/{any}','AppController@view');


/*
Route::middleware('auth:api')->get('/app/{any}', function () {

    $metaTitle = 'ITERAR | Emprendimiento y Start Ups';
    $metaDescription = 'ITERAR DESCRIPTION';
    $metaGoogleSiteVerification = '';
    $metaAuthor = '';
    $metaImage = '';
    $metaDescription = '';
    $metaKeywords = '';
    $metaSchemaName = '';
    $metaSchemaImage = '';
    $metaSchemaDescription = '';

    return view('app.index')
                ->with('metaTitle', $metaTitle)
                ->with('metaDescription', $metaDescription)
                ->with('metaGoogleSiteVerification', $metaGoogleSiteVerification)
                ->with('metaAuthor', $metaAuthor)
                ->with('metaImage', $metaImage)
                ->with('metaDescription', $metaDescription)
                ->with('metaKeywords', $metaKeywords)
                ->with('metaSchemaName', $metaSchemaName)
                ->with('metaSchemaImage', $metaSchemaImage)
                ->with('metaSchemaDescription', $metaSchemaDescription);
});
*/


