<?php



//login
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.index');

//registation
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@verify')->name('registration.index');

//Home
Route::get('/customer_home', 'customer_homeController@index')->name('website.customer_home');
//Home
Route::post('/customer_home', 'customer_searchController@search')->name('website.customer_home');


//about
Route::get('/about-us', 'customer_homeController@about')->name('website.about-us');


Route::group(['middleware'=>['sess']], function(){



//about
Route::get('/about', 'r_customer_homeController@r_about')->name('website.about');
//r_home
Route::get('/r_customer_home', 'r_customer_homeController@index')->name('website.r_customer_home');
//r_home
Route::post('/r_customer_home', 'r_customer_searchController@search')->name('website.r_customer_home');



//details
//Route::post('/customer_property_details/{id}', 'r_customer_homeController@details');
Route::get('/customer_property_details/{id}', 'r_customer_homeController@details');

//all_property
Route::get('/customer_all_property', 'r_customer_homeController@customer_all_property')->name('website.customer_all_property');
Route::post('/customer_all_property', 'r_customer_searchController@searchall')->name('website.customer_all_property');

//contact_us
Route::get('/customer_contact', 'r_customer_homeController@customer_contact')->name('website.customer_contact');
//contact_us
Route::post('/customer_contact', 'r_customer_homeController@customer_contact_save')->name('website.customer_contact');


//about_me
Route::get('/customer_about_me', 'r_customer_homeController@customer_about_me')->name('website.customer_about_me');
//change_password
Route::get('/customer_change_password', 'r_customer_homeController@customer_change_password')->name('website.customer_change_password');
//change_password_post
Route::post('/customer_change_password', 'r_customer_homeController@customer_change_password_save')->name('website.customer_change_password');
//customer_delete_profile
Route::get('/customer_delete_profile', 'r_customer_homeController@customer_delete_profile')->name('website.customer_delete_profile');
//customer_edit_profile
Route::get('/customer_edit_profile', 'r_customer_homeController@customer_edit_profile')->name('website.customer_edit_profile');
Route::post('/customer_edit_profile', 'r_customer_homeController@customer_edit_profile_save')->name('website.customer_edit_profile');

//customer_edit_property
Route::get('/customer_edit_property', 'r_customer_homeController@customer_edit_property')->name('website.r_customer_edit_property');
Route::get('/customer_edit_property_details/{id}', 'r_customer_homeController@customer_edit_property_details');
Route::post('/customer_edit_property_details/{id}', 'r_customer_homeController@customer_edit_property_details_save');

//customer_delete_property
Route::get('/customer_delete_property', 'r_customer_homeController@customer_delete_property')->name('website.r_customer_delete_property');
Route::get('/customer_delete_property/{id}', 'r_customer_homeController@customer_delete_property_save');

//customer_upload_property
Route::get('/customer_upload_property', 'r_customer_homeController@customer_upload_property')->name('website.customer_upload_property');
Route::post('/customer_upload_property', 'r_customer_homeController@customer_upload_property_verify')->name('website.customer_upload_property');


 });



//logOut

Route::get('/logout', 'logoutController@index');