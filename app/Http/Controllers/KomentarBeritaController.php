<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\komentarberita;
use Exception;
use Illuminate\Http\Request;

class KomentarBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = komentarberita::join("berita", "berita.id_berita", "komentar_berita.id_berita")->join("pengunjung", "pengunjung.id_pengunjung", "komentar_berita.id_pengunjung")->orderBy("komentar_berita.created_at", "DESC")->get();

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
            $insert = komentarberita::create($request->all());
            $data = komentarberita::where("id_komentar_berita", $insert->id_komentar_berita)->first();

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
        $data = komentarberita::join("berita", "berita.id_berita", "komentar_berita.id_berita")->join("pengunjung", "pengunjung.id_pengunjung", "komentar_berita.id_pengunjung")->orderBy("komentar_berita.created_at", "DESC")->where("komentar_berita.id_komentar_berita", $id)->first();

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
            $update = komentarberita::findOrFail($id)->update($request->all());


            $data = komentarberita::where("id_komentar_berita","=",$id)->first();

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
        $data = komentarberita::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
