<?php

namespace App\Http\Controllers;

use App\Models\LT_INSTITUSI;
use App\Models\LT_JANTINA;
use App\Models\LT_STATUS;
use App\Models\LT_STATUS_WARGANEGARA;
use App\Models\LT_WARGANEGARA;
use App\Models\LT_KUMP_DARAH;
use App\Models\LT_JENIS_GURU;
use App\Models\LT_AGAMA;
use App\Models\LT_GELARAN;
use App\Models\LT_NEGERI;
use App\Models\LT_TARAF_PERKAHWINAN;
use App\Models\LT_KETURUNAN;
use App\Models\LT_KATEGORI_STAF;
use App\Models\TB_INSTITUSI;
use App\Models\TB_STAF;
use App\Models\TB_05_PTM;
use App\Models\TB_05_SIRI_PTM;
use App\Models\TB_05_TEMPAT_PTM;
use App\Models\LT_KEPUTUSAN;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staf = TB_STAF::first();

        // $peserta = TB_05_PTM::get();

        // $all_staf = TB_05_PTM::limit(1000)
        //     ->first();

        // $sql="CREATE SEQUENCE TESTSEQ_ID START WITH 1 INCREMENT BY 1 MAXVALUE 99999999 MINVALUE 1 NOCYCLE";


        dd($staf);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $gelaran = LT_GELARAN::get();
        $jantina = LT_JANTINA::get();
        $negeri = LT_NEGERI::get();
        $agama = LT_AGAMA::get();
        $keturunan = LT_KETURUNAN::get();
        $tarafPerkahwinan = LT_TARAF_PERKAHWINAN::get();
        $warganegara = LT_WARGANEGARA::get();
        $statusWarganegara = LT_STATUS_WARGANEGARA::get();
        $kumpDarah = LT_KUMP_DARAH::get();

        $institusi = DB::table('TB_INSTITUSI')
        ->where('id_institusi',$request->input('IDinstitusi'))
        ->orderBy('nama_institusi', 'ASC')
        ->get();

        $kategoriStaf = LT_KATEGORI_STAF::get();
        $jenisGuru = LT_JENIS_GURU::get();
        $status = LT_STATUS::get();

        return view('staf.daftarbaruptm', compact('gelaran','jantina','negeri','agama',
        'keturunan','tarafPerkahwinan','warganegara','statusWarganegara','kumpDarah','institusi','kategoriStaf','jenisGuru','status'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id_staf = $request->id_staf;
        $kategori_staf = $request->kategori_staf;
        $nama = $request->nama;
        $gelaran = $request->gelaran;
        $jantina = $request->jantina;
        $tarikh_lahir= $request->tarikh_lahir;
        $negeri_lahir = $request->negeri_lahir;
        $nokp = $request->nokp;
        $nokp_lain = $request->nokp_lain;
        $agama = $request->agama;
        $keturunan = $request->keturunan;
        $taraf_perkahwinan = $request->taraf_perkahwinan;
        $status_warganegara = $request->status_warganegara;
        $warganegara = $request->warganegara;
        $kump_darah = $request->kump_darah;
        $no_fail_peribadi = $request->no_fail_peribadi;
        $no_kwsp= $request->no_kwsp;
        $no_cukai = $request->no_cukai;
        $jenis_guru = $request->jenis_guru;
        $status = $request->status;
        $id_institusi = $request->id_institusi;
        $no_daftar_oku = $request->no_daftar_oku;

        $institusi = DB::table('TB_INSTITUSI')
        ->where('id_institusi',$request->input('IDinstitusi'))
        ->orderBy('nama_institusi', 'ASC')
        ->first();

        $daftarpenggunabaruptm = new TB_STAF();
        // $daftarpenggunabaruptm->id_staf = ($request->id_staf);
        $daftarpenggunabaruptm->kategori_staf = ($request->kategori_staf);
        $daftarpenggunabaruptm->nokp = ($request->nokp);
        $daftarpenggunabaruptm->nokp_lain = ($request->nokp_lain);
        $daftarpenggunabaruptm->nama = strtoupper($request->nama);
        $daftarpenggunabaruptm->gelaran = ($request->gelaran);
        $daftarpenggunabaruptm->jantina = ($request->jantina);
        $daftarpenggunabaruptm->tarikh_lahir =  Carbon::createFromFormat('d/m/Y', $tarikh_lahir)->format('Y-m-d');
        $daftarpenggunabaruptm->negeri_lahir = ($request->negeri_lahir);
        $daftarpenggunabaruptm->agama = ($request->agama);
        $daftarpenggunabaruptm->keturunan = ($request->keturunan);
        $daftarpenggunabaruptm->taraf_perkahwinan = ($request->taraf_perkahwinan);
        $daftarpenggunabaruptm->status_warganegara = ($request->status_warganegara);
        $daftarpenggunabaruptm->kump_darah = ($request->kump_darah);
        $daftarpenggunabaruptm->no_fail_peribadi = htmlentities($request->no_fail_peribadi);
        $daftarpenggunabaruptm->no_kwsp = htmlentities($request->no_kwsp);
        $daftarpenggunabaruptm->no_cukai = htmlentities($request->no_cukai);
        $daftarpenggunabaruptm->jenis_guru = ($request->jenis_guru);
        $daftarpenggunabaruptm->status = ($request->status);
        $daftarpenggunabaruptm->warganegara = ($request->warganegara);
        $daftarpenggunabaruptm->id_institusi = ($institusi->id_institusi);
        $daftarpenggunabaruptm->no_daftar_oku = htmlentities($request->no_daftar_oku);
        $daftarpenggunabaruptm->save();

        // dump($daftarpenggunabaruptm->id_institusi);

        return redirect()->route('home')->with('success','Rekod berjaya disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
    }

    public function semaksijilptm(Request $request)
    {
        // $peserta = TB_05_PTM::with('idstaf')->get();

        // dd($peserta->idsiriptm->pengelola->nama_institusi);
        $keputusan = LT_KEPUTUSAN::get();

        $nokp = $request->nokp;
        // $nokp = '951012115408';

            $user = DB::table('TB_05_PTM')
                ->join('TB_STAF', 'TB_STAF.id_staf', '=', 'TB_05_PTM.id_staf')
                ->join('LT_KEPUTUSAN', 'LT_KEPUTUSAN.kod_keputusan', '=', 'TB_05_PTM.keputusan')
                ->join('TB_05_SIRI_PTM', 'TB_05_SIRI_PTM.id', '=', 'TB_05_PTM.id_siri')
                ->join('TB_05_TEMPAT_PTM', 'TB_05_TEMPAT_PTM.id', '=', 'TB_05_PTM.id_tempat')
                ->join('TB_INSTITUSI', 'TB_INSTITUSI.id_institusi', '=', 'TB_05_SIRI_PTM.pengelola')
                ->where('TB_05_PTM.no_kp','=',$request->nokp)
                ->get(['TB_05_PTM.no_kp', 'TB_STAF.nama', 'LT_KEPUTUSAN.keputusan',
                'TB_05_SIRI_PTM.tarikh_mula','TB_05_SIRI_PTM.tarikh_tamat',
                'TB_05_SIRI_PTM.no_siri','TB_05_TEMPAT_PTM.nama_tempat','TB_INSTITUSI.nama_institusi']);

                return view('staf.cetaksijilptm',compact('nokp','keputusan','user'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}