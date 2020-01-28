<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Auth;
use App\Siswa;

class HomeController extends Controller
{

    protected $redirectTo = '/siswa/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('siswa.auth:siswa');
    }

    /**
     * Show the Siswa dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        // $ceklogin = Auth::guard('siswa')->user()->nis_id;
        // if($ceklogin >= 17210){

        //     return view('siswa.homefarmasi');
        // }
        // else

        return view('siswa.home');
    }

    public function identitas() {
        $datalogin = Auth::guard('siswa')->user()->nis_id;
        $datasiswa = Siswa::where('nis_id', 'like', "%" . $datalogin . "%")->first();
        return view('siswa.identitas')->with(compact('datasiswa'));
    }
    public function identitasfm() {
        $datalogin = Auth::guard('siswa')->user()->nis_id;
        $datasiswa = Siswa::where('nis_id', 'like', "%" . $datalogin . "%")->first();
        return view('siswa.identitasfm')->with(compact('datasiswa'));
    }



}
