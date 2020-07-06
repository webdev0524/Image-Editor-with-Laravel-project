<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

    Route::get('/', [
        'as' => 'homepage',
        'uses' => 'HomepageController@Homepage',
    ]);
    Route::get('/feature', [
        'as' => 'feature',
        'uses' => 'HomepageController@Feature',
    ]);
    Route::get('/pricing', [
        'as' => 'pricing',
        'uses' => 'HomepageController@Pricing',
    ]);
    Route::post('/proceed-change-password', [
        'as' => 'proceed-change-password',
        'uses' => 'HomepageController@proceedChangePassword',
    ]);

    Route::get('/user/change-password/{token}', [
        'as' => 'user.change-password',
        'uses' => 'HomepageController@userChangePassword',
    ]);

    Route::post('/submit-new-password', [
        'as' => 'submit-new-password',
        'uses' => 'HomepageController@submitNewPassword',
    ]);

    Route::post('/get-in-touch', [
        'as' => 'homepage.get-in-touch',
        'uses' => 'HomepageController@getInTouch',
    ]);
    Route::get('/login', [
        'as' => 'login',
        'uses' => 'HomepageController@Login',
    ]);
    Route::get('/change-password', [
        'as' => 'change-password',
        'uses' => 'HomepageController@changePassword',
    ]);
    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'Actions\UserController@Logout',
    ]);
    Route::post('/user-registration', [
        'as' => 'user-registration',
        'uses' => 'Auth\AuthenticationController@Register',
    ]);
    Route::post('/user-login', [
        'as' => 'user-login',
        'uses' => 'Auth\AuthenticationController@Login',
    ]);
    Route::get('/dashboard', [
        'as' => 'user.dashboard',
        'uses' => 'Actions\UserController@Dashboard',
    ]);
    Route::post('/user/update-profile-details', [
        'as' => 'user.update-profile-details',
        'uses' => 'Actions\UserController@updateProfileDetails',
    ]);
    Route::get('login/{social}', [
        'as' => 'login.social',
        'uses' => 'Auth\AuthenticationController@redirectToProvider',
    ]);
    Route::get('login/{social}/callback', [
        'as' => 'login.social.callback',
        'uses' => 'Auth\AuthenticationController@handleProviderCallback',
    ]);

    Route::GET('home/editor', 'EditorController@index');

    /*Route::get('login/github', 'Auth\LoginController@redirectToProvider');
    Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');*/



