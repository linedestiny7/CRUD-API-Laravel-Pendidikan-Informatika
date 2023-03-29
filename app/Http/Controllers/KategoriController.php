<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use Exception;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kategori::select("*")->orderBy("kategori.created_at", "DESC")->get();

        if($data){
            return ApiFormatter::createApi(200, 'Success', $data);
        } else{
            return ApiFormatter::createApi(400, 'Failed');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{

            $insert = kategori::create($request->all());
            $data = kategori::select("*")->where("id_kategori","=", $insert->id_kategori)->get();

            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            } else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch(Exception){
            return ApiFormatter::createApi(400, 'Failed');
        }


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = kategori::orderBy("kategori.created_at", "DESC")->where("kategori.id_kategori", $id)->first();

        if($data){
            return ApiFormatter::createApi(200, 'Success', $data);
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
        try{

            $update = kategori::findOrFail($id)->update($request->all());

            $data = kategori::where("id_kategori","=",$id)->first();

            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            } else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch(Exception){
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
        $data = kategori::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
