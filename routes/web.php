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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/comment/{id}',[
    'uses'=>'CommentController@CreateComment',
    'as'  => 'create.comment'
]);


//Front-end
Route::get('/about','HomeController@about');
Route::get('/batch_wise/{id}', 'AdminController@batchWise');
Route::get('/','HomeController@index');
Route::get('/committee','HomeController@committee');
Route::get('/alumni_list','HomeController@alumni_list');
Route::get('/public_post', 'JobController@public_post');
Route::get('/post/{id}', 'JobController@getSinglePost');

//Photo-Gallery
Route::get('/photo_gallery', 'UserController@photo_gallery');
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::get('/albums/show_photo/{id}', 'AlbumsController@show_photo');
Route::post('/albums/store', 'AlbumsController@store');
Route::get('/alumni_profile/{id}','UserController@alumni_profile');
Route::get('/photos/create/{id}','PhotoController@create');
Route::post('/photos/store','PhotoController@store');
Route::get('/photos','UserController@photos');


//reset password
Route::get('password',['as'=>'password.resetsss',
'uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email',['as'=>'password.email',
'uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token?}',['as'=>'password.resetform',
'uses'=>'Auth\ResetPasswordController@showResetForm']);
Route::post('password/resetemail',['as'=>'password.nowreset',
'uses'=>'Auth\ResetPasswordController@reset']);

Route::group(['middleware'=>'guest'],function(){
	Route::get('/user_login','HomeController@user_login');
	Route::get('/reset_password','HomeController@reset_password');
	Route::post('/reset_password','UserController@reset_password');
	Route::post('/user_login','UserController@user_login');
	Route::post('/UserRegistration','UserController@user_registration');
	Route::get('/user_registration','HomeController@user_registration');
	Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

});
Route::group(['middleware'=>'auth'],function(){
	Route::get('/user_profile','HomeController@user_profile');
	Route::get('/job_post','HomeController@job_post');
	Route::post('/job_post','UserController@job_post');
	Route::get('/user_logout','UserController@user_logout');
	Route::post('/user_profile','UserController@user_profile')->name('user_profile');
	Route::post('/user_introduction','UserController@user_introduction');
	Route::post('/user_education','EducationController@user_education');
	Route::post('/user_location','LocationController@user_location');
	Route::post('/user_experience','ExperienceController@user_experience');
	Route::post('/user_skills','SkillController@user_skills');


	//job post
	Route::get('/job_post','HomeController@job_post');
	Route::post('/user_job_post','JobController@user_job_post');

	//edit/update
	Route::get('/edit_profile/{id}','HomeController@edit_profile');
	Route::post('/update_user_profile','UserController@update_user_profile');
	Route::post('/update_user_introduction','UserController@update_user_introduction');
	Route::post('/update_user_education','EducationController@update_user_education');
	Route::post('/update_user_experience','ExperienceController@update_user_experience');
	Route::post('/update_user_skills','SkillController@update_user_skills');
	Route::post('/update_user_location','LocationController@update_user_location');

});

Route::auth();

//Admin

Route::get('/admin','AdminController@admin_login');
Route::get('/dashboard','AdminController@index');
Route::post('/dashboard','AdminController@dashboard');
Route::get('/admin_logout', 'AdminController@admin_logout');

Route::get('/admin/alumni', 'AdminController@alumni');
Route::get('/add_slider', 'AdminController@add_slider');
Route::put('/admin/alumni/{id}', 'AdminController@alumniAccept');
Route::get('/delete_alumni/{id}', 'AdminController@delete_alumni');

//slider
Route::post('/sliderAdd','SiteController@add');
Route::post('/add_slider','SiteController@add');
Route::get('/show_slider','SiteController@show_slider');
Route::get('/all_slider','SiteController@all_slider');
Route::get('/delete-slider/{id}','SiteController@delete_slider');

//committee
Route::post('/add_comitee','CommiteeController@add');
Route::get('/add_comitee','CommiteeController@add_comitee');
Route::post('/add_designation','CommiteeController@add_designation');
Route::get('add_designation','CommiteeController@designation');

Route::get('/show_comitee','CommiteeController@show_comitee');

//Constitution
Route::get('/constitution','AdminController@constitution');
Route::post('/add_constitution','AdminController@add_constitution');
Route::post('/show_constitution','AdminController@show_constitution');

//Btach
Route::get('/batch','AdminController@batch');
Route::post('/add_batch','AdminController@add_batch');

//session
Route::get('/session','AdminController@session');
Route::post('/add_session','AdminController@add_session');

//batch wise list



