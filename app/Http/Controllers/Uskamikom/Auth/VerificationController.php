<?php

namespace App\Http\Controllers\Uskamikom\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/uskamikom';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('uskamikom.auth');
        $this->middleware('signed')->only('uskamikom.verify');
        $this->middleware('throttle:6,1')->only('uskamikom.verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user('uskamikom')->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('uskamikom.auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        if ($request->route('id') != $request->user('uskamikom')->getKey()) {
            throw new AuthorizationException;
        }
        if ($request->user('uskamikom')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }
        if ($request->user('uskamikom')->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect($this->redirectPath())->with('verified', true);
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if ($request->user('uskamikom')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }
        $request->user('uskamikom')->sendEmailVerificationNotification();
        return back()->with('resent', true);
    }

}
