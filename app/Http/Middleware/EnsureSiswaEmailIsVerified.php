<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class EnsureSiswaEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string  $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if (!$request->user('siswa') ||
            ($request->user('siswa') instanceof MustVerifyEmail &&
                !$request->user('siswa')->hasVerifiedEmail())) {
            return $request->expectsJson()
                    ? abort(403, 'Your email address is not verified.')
                    : Redirect::route($redirectToRoute ?: 'siswa.verification.notice');
        }

        return $next($request);
    }
}
