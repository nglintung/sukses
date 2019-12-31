<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Siswa;
use App\Uskamikom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UskController extends Controller
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
        $datapass = Uskamikom::whereNotNull('password')->latest()->paginate(8);
        $count = Uskamikom::whereNotNull('password')->count();
        return view('admin.uskpass.index')->with(compact('datapass'))->with(compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapass = Siswa::all();
        return view('admin.uskpass.create', compact('datapass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis_id' => 'required|unique:uskamikoms',
            'password' => 'required',
        ]);

        $cari = $request->get('nis_id');
        $carinama = Siswa::where('nis_id', 'like', "%" . $cari . "%")->first();
        $nama = $carinama->name;

        $uskpass = new Uskamikom([
            'name' => $nama,
            'nis_id' => $request->get('nis_id'),
            'password' => Hash::make($request['password']),
        ]);

        $uskpass->save();

        return redirect('/admin/uskpass/')->with('alert', 'Data telah Terupdate..')->with('error');
    }

    public function resetPasswordAll (){
        $allpassword = DB::table('uskamikoms')
                                    ->whereNotNull('password')
                                    ->delete();
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
        $cari = 17003;
        $carinama = Siswa::where('nis_id', 'like', "%" . $cari . "%")->first();
        $nama = $carinama->name;
        return ($nama);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cariuser = Siswa::find($id);
        return \view('admin.uskpass.edit')->with(compact('cariuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required'
        ]);

        $siswa = Siswa::find($id);
        $siswa->password = $request->get('password');

        $siswa->save();

        return redirect()->route('admin.indexpass');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cariuser = Uskamikom::findOrFail($id)->update(['password'=>null]);
        return redirect()->back();
    }

}
