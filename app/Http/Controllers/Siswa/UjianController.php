<?php

namespace App\Http\Controllers\Siswa;

use App\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UjianController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUsk()
    {
        return view('siswa.ujian.usk');
    }

    public function showUps()
    {
        return view('siswa.ujian.ups');
    }

    public function showUkk1()
    {
        return view('siswa.ujian.ukk1');
    }

    public function showTpp()
    {
        return view('siswa.ujian.tpp');
    }

    public function showUkknas()
    {
        return view('siswa.ujian.ukknas');
    }

    public function showTryout1()
    {
        return view('siswa.ujian.tryout1');
    }

    public function showTryout2()
    {

        return view('siswa.ujian.tryout2');
    }

    public function showTryout3()
    {
        return view('siswa.ujian.tryout3');
    }

    public function showGladi()
    {
        return view('siswa.ujian.gladi');
    }

    public function showUnbk()
    {
        return view('siswa.ujian.unbk');
    }

    public function showUsbn()
    {
        return view('siswa.ujian.usbn');
    }

}
