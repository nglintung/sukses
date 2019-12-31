<?php

namespace App\Http\Controllers\Uskamikom;

use App\Http\Controllers\Controller;
use App\Ujian1;
use App\Siswa;
use Auth;
use Illuminate\Http\Request;


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

    public function showUsk()
    {
        $idsiswa = Auth::guard('uskamikom')->user()->nis_id;
        $datausk = Ujian1::where('nis_id', 'like', "%" . $idsiswa . "%")->first();
        // return ($idsiswa);
        return view('uskamikom.detailusk')->with(compact('datausk'));
    }

}
