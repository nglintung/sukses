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
    Route::get('/setpass/reser', 'PasswordController@resetPasswordAll')->name('admin.resetpass');

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
