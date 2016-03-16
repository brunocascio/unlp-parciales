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

// Route patterns
Route::pattern('id', '[0-9]+');
Route::pattern('career_slug', '[a-z\-]+');
Route::pattern('course_slug', '[0-9a-z\-]+');
Route::pattern('type_slug', '[a-z\-]+');

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
    Route::get(
      '/careers/{career_slug}/courses',
      'Api\CourseController@coursesOfCarrer'
    );

    Route::get(
      '/careers/{career_slug}/courses/{course_slug}/types',
      'Api\TypeController@typesOfCourse'
    );
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

      /*
      |------------------------------------------------------------------------
      | Only Admins|Moderators Section
      |------------------------------------------------------------------------
      |
      */
      Route::group(['middleware' => 'role:moderator,admin'], function()
      {
        /*
        * Dashboard
        *
        */
        Route::get('/', [
          'as' => 'admin.dashboard',
          'uses' => 'AdminController@index'
        ]);

        /*
        * Resources
        *
        */
        Route::group(['prefix' => 'resources'], function()
        {
          Route::get('/', [
            'uses' => 'AdminResourceController@index',
            'as' => 'admin.resources.index'
          ]);

          Route::get('/unpublisheds', [
            'uses' => 'AdminResourceController@unpublisheds',
            'as' => 'admin.resources.unpublisheds'
          ]);

          Route::put('/{id}/publish', [
            'uses' => 'AdminResourceController@publish',
            'as' => 'admin.resources.publish'
          ]);

          Route::put('/{id}/unpublish', [
            'uses' => 'AdminResourceController@unpublish',
            'as' => 'admin.resources.unpublish'
          ]);

          Route::get('{id}/edit', [
            'uses' => 'AdminResourceController@edit',
            'as' => 'admin.resources.edit'
          ]);

          Route::patch('{id}', [
            'uses' => 'AdminResourceController@update',
            'as' => 'admin.resources.update'
          ]);
        });
      });

      /*
      |------------------------------------------------------------------------
      | Only Admins Section
      |------------------------------------------------------------------------
      |
      */
      Route::group(['middleware' => 'role:admin'], function()
      {
        /*
        * Configs
        *
        */
        Route::resource('configs', 'AdminConfigController', [
          'only' => ['index', 'edit', 'update']
        ]);

        /*
        * Users
        *
        */
        Route::resource('users', 'AdminUserController', [
          'except' => 'destroy'
        ]);

        /*
        * Careers
        *
        */
        Route::resource('careers', 'AdminCareerController', [
          'except' => 'show'
        ]);

        /*
        * Courses
        *
        */
        Route::resource('courses', 'AdminCourseController', [
          'except' => 'show'
        ]);

        /*
        * Teachers
        *
        */
        Route::resource('teachers', 'AdminTeacherController', [
          'except' => 'show'
        ]);

        /*
        * Types
        *
        */
        Route::resource('types', 'AdminTypeController', [
          'except' => 'show'
        ]);

        /*
        * Resources
        *
        */
        Route::resource('resources', 'AdminResourceController', [
          'only' => ['destroy']
        ]);
      });
    });

    /*
    |--------------------------------------------------------------------------
    | Guest Routes
    |--------------------------------------------------------------------------
    |
    */

    /*
    * Home (Root)
    *
    */
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    /*
    * Results of search
    *
    */
    Route::get(
      '/courses/{course_slug}/resources/{type_slug?}',
      'CourseResourceController@index'
    );

    /*
    * Resources
    *
    */
    Route::resource('resources', 'ResourceController', [
      'only' => ['create', 'store']
    ]);

    /*
    * Files
    *
    */
    Route::controller('files', 'FileController', [
      'getDownloadFile' => 'files.download',
    ]);
});
