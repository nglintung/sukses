<?php

namespace App\Http\Controllers\Uskamikom;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/uskamikom/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('uskamikom.auth:uskamikom');
    }

    /**
     * Show the Uskamikom dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('uskamikom.home');
    }

}
