<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\subkategori;
use Exception;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = subkategori::join("kategori", "kategori.id_kategori", "sub_kategori.id_kategori")->orderBy("sub_kategori.created_at", "DESC")->get();

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
            $insert = subkategori::create($request->all());
            $data = subkategori::where("id_sub_kategori", $insert->id_sub_kategori)->first();

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
        $data = subkategori::join("kategori", "kategori.id_kategori", "sub_kategori.id_kategori")->where("sub_kategori.id_sub_kategori", $id)->first();

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
            $update = subkategori::findOrFail($id)->update($request->all());


            $data = subkategori::where("id_sub_kategori","=",$id)->first();

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
        $data = subkategori::findOrFail($id)->delete();
        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
