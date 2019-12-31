<?php

Route::group(['namespace' => 'Siswa'], function() {

    Route::get('/', 'HomeController@index')->name('siswa.dashboard');
    Route::get('/identitas', 'HomeController@identitas')->name('siswa.identitas');

    // Ujian - ujian
    // Route::get('/usk', 'UjianController@showUsk')->name('ujian.usk');

    Route::get('/ups', 'UjianController@showUps')->name('ujian.ups');
    Route::get('/ukk2', 'UjianController@showUkk2')->name('ujian.ukk2');
    Route::get('/tpp', 'UjianController@showTpp')->name('ujian.tpp');
    Route::get('/ukknas', 'UjianController@showUkknas')->name('ujian.ukknas');
    Route::get('/tryout1', 'UjianController@showTryout1')->name('ujian.tryout1');
    Route::get('/tryout2', 'UjianController@showTryout2')->name('ujian.tryout2');
    Route::get('/tryout3', 'UjianController@showTryout3')->name('ujian.tryout3');
    Route::get('/gladi', 'UjianController@showGladi')->name('ujian.gladi');
    Route::get('/unbk', 'UjianController@showUnbk')->name('ujian.unbk');
    Route::get('/usbn', 'UjianController@showUsbn')->name('ujian.usbn');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('siswa.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('siswa.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('siswa.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('siswa.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('siswa.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('siswa.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('siswa.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('siswa.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('siswa.verification.verify');


});
