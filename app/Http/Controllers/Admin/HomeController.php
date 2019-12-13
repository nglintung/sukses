<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Siswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{

    protected $redirectTo = '/admin/login';

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
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $siswacount = Siswa::all()->count();
        $listpassword = Siswa::whereNotNull('password')->count();
        return view('admin.home')->with(compact('siswacount'))->with(compact('listpassword'));
    }

    public function daftarSiswa(){

        $siswa = Siswa::latest()->paginate(10);
        $siswacount = Siswa::all()->count();
        return view('admin.daftar_siswa')->with(compact('siswa'))->with(compact('siswacount'));

    }

    public function tambahSiswa(){
        return view('admin.tambahsiswa');
    }

    public function simpanSiswa(Request $request){
        $request->validate([
            'name' => 'required',
            'nis_id' => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'kelas' => 'required',
            'namaortu' => 'required'
        ]);

        $ttl = Carbon::parse($request->get('ttl'))->format('Y-m-d');

        $siswa = new Siswa([
            'name' => $request->get('name'),
            'nis_id' => $request->get('nis_id'),
            'nisn' => $request->get('nisn'),
            'ttl' => $ttl,
            'kelas' => $request->get('kelas'),
            'namaortu' => $request->get('namaortu')
        ]);

        $siswa->save();

        return redirect('admin.daftar_siswa')->with('message', 'Data Siswa telah Tersimpan');
    }

    public function siswaShow($id){
        $datasiswa = Siswa::where('id', 'like', "%" . $id . "%")->first();
        return view('admin.detailsiswa')->with(compact('datasiswa'));
    }

    public function siswaEdit($id){
        $editdata = Siswa::where('id', 'like', "%" . $id . "%")->first();
        return view('admin.editsiswa')->with(compact('editdata'));
    }

    public function siswaUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'nis_id' => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'kelas' => 'required',
            'namaortu' => 'required'
        ]);

        $tanggal = Carbon::parse($request->get('ttl'))->format('Y-m-d');
        $siswa = Siswa::find($id);
        $siswa->name = $request->get('name');
        $siswa->nis_id = $request->get('nis_id');
        $siswa->nisn = $request->get('nisn');
        $siswa->ttl = $tanggal;
        $siswa->kelas = $request->get('kelas');
        $siswa->namaortu = $request->get('namaortu');
        $siswa->save();

        return redirect('admin/daftarsiswa')->with('message', 'Data Siswa telah Tersimpan');
    }

    public function siswaDestroy ($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('admin/daftarsiswa')->with('message', 'Data telah Terhapus');
        // return ($siswa);
    }


}
