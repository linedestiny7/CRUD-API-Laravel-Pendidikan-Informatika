<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\riwayatbaca;
use Exception;
use Illuminate\Http\Request;

class RiwayatBacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = riwayatbaca::join("pengunjung", "pengunjung.id_pengunjung", "riwayat_baca.id_pengunjung")->join("berita", "berita.id_berita", "riwayat_baca.id_berita")->orderBy("riwayat_baca.created_at", "DESC")->get();

        if($data){
            return ApiFormatter::createApi(200,'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Empty');
        }
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
        try{
            $insert = riwayatbaca::create($request->all());
            $data = riwayatbaca::where("id_riwayat_baca", $insert->id_riwayat_baca)->first();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Empty');
            }
        } catch(Exception) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = riwayatbaca::join("pengunjung", "pengunjung.id_pengunjung", "riwayat_baca.id_pengunjung")->join("berita", "berita.id_berita", "riwayat_baca.id_berita")->orderBy("riwayat_baca.created_at", "DESC")->where("riwayat_baca.id_riwayat_baca", $id)->first();

        if($data){
            return ApiFormatter::createApi(200,'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Empty');
        }
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
        try {
            $update = riwayatbaca::findOrFail($id)->update($request->all());


            $data = riwayatbaca::where("id_riwayat_baca","=",$id)->first();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Empty');
            }

        } catch (Exception) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = riwayatbaca::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
