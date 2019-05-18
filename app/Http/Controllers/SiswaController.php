<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Siswa;
use App\Smp;
use App\Sma;
use PDF;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
        $this->validate($request, [
            'nik' => 'required | min:16 | max:16',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'telepon' => 'required',
            
        ]);

        $siswa = new Siswa;

        $siswa->user_id = auth()->user()->id;
        $siswa->nisn = auth()->user()->nisn;
        $siswa->nama = auth()->user()->name;
        $siswa->nik = $request->input('nik');
        $siswa->agama = $request->input('agama');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->tanggal_lahir = Carbon::createFromFormat('Y-m-d', $request->input('tanggal_lahir'))->format('Y-m-d');
        $siswa->jeniskelamin = $request->input('jeniskelamin');

        $siswa->alamat = $request->input('alamat');
        $siswa->provinsi = $request->input('provinsi');
        $siswa->kota = $request->input('kota');
        $siswa->kecamatan = $request->input('kecamatan');
        $siswa->kelurahan = $request->input('kelurahan');
        $siswa->telepon = $request->input('telepon');
        
        $siswa->status = 1;

        $siswa->save();

        return view('siswa.show')->with('success', 'Data Siswa Berhasil Ditambahkan')->with('siswa', $siswa);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.show')->with('siswa', $siswa);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.edit')->with('siswa', $siswa);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nik' => 'required | min:16 | max:16',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'telepon' => 'required',
            
        ]);

        $siswa = Siswa::find($id);

        $siswa->nik = $request->input('nik');
        $siswa->nama = $request->input('nama');
        $siswa->agama = $request->input('agama');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->tanggal_lahir = Carbon::createFromFormat('Y-m-d', $request->input('tanggal_lahir'))->format('Y-m-d');
        $siswa->jeniskelamin = $request->input('jeniskelamin');

        $siswa->alamat = $request->input('alamat');
        $siswa->provinsi = $request->input('provinsi');
        $siswa->kota = $request->input('kota');
        $siswa->kecamatan = $request->input('kecamatan');
        $siswa->kelurahan = $request->input('kelurahan');
        $siswa->telepon = $request->input('telepon');
        
        $siswa->status = 1;

        $siswa->save();

        return view('siswa.show')->with('success', 'Data Siswa Berhasil Ditambahkan')->with('siswa', $siswa);
        //
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return back()->with('success', 'Siswa has been deleted');
    }

    public function showsch($id)
    {

        $siswa = Siswa::find($id);
        if(auth()->user()->opsi == 1){
            $sekolah = Smp::all();
        }
        else if(auth()->user()->opsi == 2){
            $sekolah = Sma::all();
        }


        return view('siswa.sch')->with('sekolah', $sekolah)->with('siswa', $siswa);
        //
    }

    public function editsch(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $user = auth()->user();

        $this->validate($request, [
            'sekolah_asal' => 'required',
            'sekolah1' => 'required',
            'sekolah2' => 'required',
            'sekolah3' => 'required',
        ]);


        $siswa->sekolah_asal = $request->input('sekolah_asal');
        $siswa->sekolah1 = $request->input('sekolah1');
        $siswa->sekolah2 = $request->input('sekolah2');
        $siswa->sekolah3 = $request->input('sekolah3');
        $siswa->status = 7;

        $siswa->save();

        return view('siswa.show')->with('success', 'Data Sekolah Siswa Berhasil Ditambahkan')->with('siswa', $siswa);
        //
    }

    public function permanen($id)
    {
        $siswa = Siswa::find($id);

        $siswa->status = 9;

        $siswa->save();

        return view('siswa.show')->with('success', 'Data Siswa Berhasil Dipermanenkan')->with('siswa', $siswa);
        //
    }

    public function pdfDownload($id)
    {
        $siswa = Siswa::find($id);
        $pdf = PDF::loadView('siswa.pdf', compact('siswa'));
        return $pdf->download('Biodata '.$siswa->nama.'.pdf');
    }


    public function admin()
    {
        $siswas = Siswa::all();

        return view('siswa.index')->with('siswas', $siswas);
    }
}
