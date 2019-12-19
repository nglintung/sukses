<?php

namespace App\Http\Controllers\Siswa;

use App\Siswa;
use App\Ujian1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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
        // $idsiswa = Auth::guard('siswa')->user()->nis_id;
        // $datausk = Ujian1::where('nis_id', 'like', "%" . $idsiswa . "%")->first();
        // return view('siswa.ujian.usk')->with(compact('datausk'));
        return view('siswa.ujian.restricted');
    }

    public function showUps()
    {
        $idsiswa = Auth::guard('siswa')->user()->nis_id;
        $dataups = Ujian1::where('nis_id', 'like', "%" . $idsiswa . "%")->first();
        return view('siswa.ujian.ups')->with(compact('dataups'));
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
