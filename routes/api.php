<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'], function () {
					Route::post('login', 'AuthController@login');
					Route::post('signup', 'AuthController@signup');
				});
				
Route::group(['middleware' => 'auth:api'], function() {
		Route::get('logout', 'AuthController@logout');
		Route::get('user', 'AuthController@user');
							
	// Media Routes
	Route::get('media/get-files', 'MediaController@getFiles')->name('get-files');
	Route::post('media/upload', 'MediaController@upload')->name('media-upload');

	// Profile Routes
	Route::get('profile/get-profile', 'ProfileController@getProfile')->name('get-profile');
	Route::post('profile/save', 'ProfileController@save')->name('profile-save');

	// Settings Routes
	Route::get('settings/get-settings', 'SettingsController@getSettings')->name('get-settings');
	Route::post('settings/save', 'SettingsController@save')->name('settings-save');

	// Change Password
	Route::post('change-password/save', 'ChangePasswordController@save')->name('get-users');

	// User Routes
	Route::get('user/get-users', 'UserController@getUsers')->name('get-users');
	Route::get('user/get-single-user', 'UserController@getSingleUser')->name('get-single-user');
	Route::post('user/change-password', 'UserController@changeUserPassword')->name('change-user-password');
	Route::post('user/create', 'UserController@createUser')->name('create-user');
	Route::post('user/update', 'UserController@updateUser')->name('update-user');
	Route::post('user/delete', 'UserController@deleteUser')->name('delete-user');

	// Group Routes
	Route::get('group/get-groups', 'GroupController@getGroups')->name('get-groups');
	Route::get('group/get-all-groups', 'GroupController@getAllGroups')->name('get-all-groups');
	Route::get('group/get-single-group', 'GroupController@getSingleGroup')->name('get-single-group');
	Route::post('group/create', 'GroupController@createGroup')->name('create-group');
	Route::post('group/update', 'GroupController@updateGroup')->name('update-group');
	Route::post('group/delete', 'GroupController@deleteGroup')->name('delete-group');

	// Product Routes
	Route::get('product/get-products', 'ProductController@getProducts')->name('get-products');
	Route::get('product/get-single-product', 'ProductController@getSingleProduct')->name('get-single-product');
	Route::post('product/create', 'ProductController@createProduct')->name('create-product');
	Route::post('product/update', 'ProductController@updateProduct')->name('update-product');
	Route::post('product/delete', 'ProductController@deleteProduct')->name('delete-product');

	// Menu Routes
	Route::get('get-menus', 'MenuController@getMenus')->name('get-menus');
	Route::get('get-user-menus', 'MenuController@getUserMenus')->name('get-user-menus');

	// Privilege Routes
	Route::get('privilege/get-privileges', 'PrivilegeController@getPrivileges')->name('get-privileges');
	Route::post('privilege/save', 'PrivilegeController@savePrivilege')->name('save-privilege');

	// Transaction Routes
	Route::get('transaction/get-transactions', 'TransactionController@getTransactions')->name('get-transactions');
	Route::get('transaction/get-single-transaction', 'TransactionController@getSingleTransaction')->name('get-single-transaction');
					});

// Auth Routes
Route::post('auth/login', 'AuthController@login')->name('auth-login');

