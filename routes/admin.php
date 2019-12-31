<?php

Route::group(['namespace' => 'Admin'], function() {

    // Daftar Siswa
    Route::get('/', 'HomeController@index')->name('admin.dashboard');
    Route::get('/daftarsiswa','HomeController@daftarSiswa')->name('admin.daftarsiswa');
    Route::get('/daftarsiswa/tambah', 'HomeController@tambahSiswa')->name('admin.tambahsiswa');
    Route::post('/daftarsiswa', 'HomeController@simpanSiswa')->name('admin.simpansiswa');
    Route::get('/daftarsiswa/{id}', 'HomeController@siswaShow')->name('admin.showsiswa');
    Route::get('/daftarsiswa/edit/{id}', 'HomeController@siswaEdit')->name('admin.editsiswa');
    Route::PUT('/daftarsiswa/{id}', 'HomeController@siswaUpdate')->name('admin.updatesiswa');
    Route::DELETE('/daftarsiswa/hapus/{id}', 'HomeController@siswaDestroy')->name('admin.hapussiswa');

    // Set Password User Siswa
    Route::get('/setpass', 'PasswordController@index')->name('admin.indexpass');
    Route::post('/setpass', 'PasswordController@store')->name('admin.storepass');
    Route::get('/setpass/create', 'PasswordController@create')->name('admin.createpass');
    Route::get('/setpass/reset', 'PasswordController@resetPasswordAll')->name('admin.resetpass');
    Route::get('/setpass/edit/{id}', 'PasswordController@edit')->name('admin.editpass');
    Route::PUT('/setpass', 'PasswordController@update')->name('admin.updatepass');
    Route::DELETE('/setpass/delete/{id}', 'PasswordController@destroy')->name('admin.destroypass');

    // Set Password USK
    Route::get('/uskpass', 'UskController@index')->name('admin.indexusk');
    Route::post('/uskpass', 'UskController@store')->name('admin.storeusk');
    Route::DELETE('/uskpass/delete/{id}', 'UskController@destroy')->name('admin.destroyusk');
    Route::get('/uskpass/create', 'UskController@create')->name('admin.createusk');
    Route::get('/uskpass/reset', 'UskController@resetPasswordAll')->name('admin.resetusk');

    Route::get('/uskpass/test', 'UskController@show');


    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('admin.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('admin.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('admin.verification.verify');

    // Kelengkapan Ujian


});
