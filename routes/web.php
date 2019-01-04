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
    return view('welcome');
});

Route::resource('zones','ZonesController');
Route::resource('circles','CirclesController');
Route::resource('districts','DistrictsController');
Route::resource('divisions','DivisionsController');
Route::resource('subdivisions','subdivisionsController');
Route::resource('adminapprovals','AdminapprovalsController');
Route::get('adminapprovals/addnew','DatafillController@zones');
Route::get('/json-circles','AdminapprovalsController@circles');

//Route::get('/json-regencies','CountryController@regencies');
  Route::get('/json-circles','AdminapprovalsController@circles');
  Route::get('/json-districts','AdminapprovalsController@districts');
  Route::get('/json-blocks', 'AdminapprovalsController@blocks');
  Route::get('/json-schemes', 'AdminapprovalsController@schemes');

Route::resource('companies','CompaniesController');
Route::resource('projects','ProjectsController');
Route::resource('roles','RolesController');
Route::resource('task','TasksController');
Route::resource('users','UsersController');



Route::post('/form-submit',[
'uses' => 'CirclesController@formSubmit',
 'as' => 'f.submit',
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/adminapprovals/create', ' FillController@');

