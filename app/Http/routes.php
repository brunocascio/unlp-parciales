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
| Api Routes
|--------------------------------------------------------------------------
|
| This route group applies the "api" middleware group to every route
| it contains.
|
*/
Route::group(['middleware' => ['api']], function () {

  Route::group(['prefix' => 'api'], function()
  {
    Route::get('/careers/{slug}/courses', 'Api\CourseController@coursesOfCarrer');

    Route::get('/careers/{slug}/courses/{course_slug}/types', 'Api\TypeController@typesOfCourse');
  });
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {

    /*
    |--------------------------------------------------------------------------
    | Auth Routes
    |--------------------------------------------------------------------------
    |
    */
    // Route::auth();
    Route::get('login', 'Auth\AuthMinimalController@showLoginForm');

    Route::post('login', 'Auth\AuthMinimalController@login');

    Route::get('logout', 'Auth\AuthMinimalController@logout');

    /*
    |--------------------------------------------------------------------------
    | Admins Section
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['prefix' => 'admin'], function()
    {
      Route::group(['middleware' => 'role:admin'], function()
      {
        Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);

        Route::get('/configs', ['as' => 'admin.configs', 'uses' => 'AdminConfigController@index']);

        Route::resource('users', 'AdminUserController', ['only' => 'index']);

        Route::resource('careers', 'AdminCareerController', ['except' => 'show']);

        Route::resource('courses', 'AdminCourseController', ['except' => 'show']);

        Route::resource('teachers', 'AdminTeacherController', ['except' => 'show']);

        Route::resource('types', 'AdminTypeController', ['except' => 'show']);

        Route::resource('resources', 'AdminResourceController', ['except' => ['create', 'store', 'show']]);

        Route::controller('resources', 'AdminResourceController', [
          'getUnpublisheds' => 'admin.resources.unpublisheds',
          'putPublish' => 'admin.resources.publish',
          'putUnpublish' => 'admin.resources.unpublish',
        ]);
      });
    });

    /*
    |--------------------------------------------------------------------------
    | Guest Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('/courses/{course}/resources/{type?}', 'CourseResourceController@index');

    Route::resource('resources', 'ResourceController', ['except' => ['index', 'edit', 'update', 'destroy']]);

    Route::controller('files', 'FileController', [
      'getDownloadFile' => 'files.download',
    ]);
});
