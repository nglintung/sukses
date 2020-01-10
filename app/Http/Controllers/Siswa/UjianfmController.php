<?php

namespace App\Http\Controllers\Siswa;

use App\Siswa;
use App\ukknasfm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UjianfmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUkknfm()
    {
        $idsiswa = Auth::guard('siswa')->user()->nis_id;
        $ukknasfm = ukknasfm::where('nis_id', 'like', "%" . $idsiswa . "%")->first();
        return view('siswa.ujian.ukknasfm')->with(compact('ukknasfm'));

        // return view('siswa.ujian.restricted');
    }

    public function showUkksfm()
    {
        $idsiswa = Auth::guard('siswa')->user()->nis_id;
        $ukknasfm = ukknasfm::where('nis_id', 'like', "%" . $idsiswa . "%")->first();
        return view('siswa.ujian.ukksfm')->with(compact('ukknasfm'));

        // return view('siswa.ujian.restricted');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ukknasfm  $ukknasfm
     * @return \Illuminate\Http\Response
     */
    public function show(ukknasfm $ukknasfm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ukknasfm  $ukknasfm
     * @return \Illuminate\Http\Response
     */
    public function edit(ukknasfm $ukknasfm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ukknasfm  $ukknasfm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ukknasfm $ukknasfm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ukknasfm  $ukknasfm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ukknasfm $ukknasfm)
    {
        //
    }

    public function showTryout1()
    {
        return view('siswa.ujian.fm.tryout1');

    }

    public function showTryout2()
    {

        return view('siswa.ujian.fm.tryout2');
    }

    public function showTryout3()
    {
        return view('siswa.ujian.fm.tryout3');
    }

    public function showGladi()
    {
        return view('siswa.ujian.fm.gladi');
    }

    public function showUnbk()
    {
        return view('siswa.ujian.fm.unbk');
    }

    public function showUsbn()
    {
        return view('siswa.ujian.fm.usbn');
    }
}
