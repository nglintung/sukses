<?php

Route::group(['namespace' => 'Uskamikom'], function() {

    Route::get('/', 'HomeController@index')->name('uskamikom.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('uskamikom.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('uskamikom.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('uskamikom.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('uskamikom.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('uskamikom.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('uskamikom.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('uskamikom.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('uskamikom.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('uskamikom.verification.verify');

});