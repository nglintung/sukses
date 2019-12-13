<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datapass = Siswa::latest()->paginate(8);
        $datapass = Siswa::whereNotNull('password')->latest()->paginate(8);
        $count = Siswa::whereNotNull('password')->count();
        return view('admin.setpass.index')->with(compact('datapass'))->with(compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapass = Siswa::all();
        return view('admin.setpass.create', compact('datapass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cari = $request->nis_id;
        $setpass = Siswa::where('nis_id', 'like', "%" . $cari . "%")->first();
        $setpass->password = Hash::make($request['password']);
        $setpass->save();

        return redirect('/admin/setpass/')->with('alert', 'Data telah Terupdate..');
    }

    public function resetPasswordAll (){
        $allpassword = DB::table('siswas')
                                    ->whereNotNull('password')
                                    ->update(['password'=> null]);
        // return ($allpassword);
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */

}
