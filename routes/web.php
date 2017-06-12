<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('index',"HomeController@getPosition")->name('getPosition');
Route::get('direct/{position}/{endposition}/{ogrigin}/{destination}',"HomeController@direct")->name('direct');
Route::get('move/{position}',"HomeController@directMove")->name('move');

// ---------------------- Login- Register------------------------------
Route::get('test', 'AuthenController@getTest');
// Quản lý danh sách account
Route::get('list_user', 'AuthenController@getListUser');
// Xử lý thay đổi quyền user
Route::get('change_role/{id}', 'AuthenController@getChangeRole');

// Form đăng ký
Route::get('register_form', 'AuthenController@getRegisterForm');
// Xử lý đăng ký
Route::post('process_register', 'AuthenController@postProcessRegister');
// Form đăng nhập
Route::get('login_form', 'AuthenController@getLoginForm');
// Xử lý đăng nhập
Route::post('process_login', 'AuthenController@postProcessLogin');
// Đăng xuất
Route::get('logout', 'AuthenController@getLogout');
// ---------------------End Login- Register-------------------------
// ----------------------------Begin Post bài----------------------------
// Thêm bài post
Route::get('add_post', 'PostController@getAddPost')->middleware('user_login');
// ----------------------------End Post bài----------------------------