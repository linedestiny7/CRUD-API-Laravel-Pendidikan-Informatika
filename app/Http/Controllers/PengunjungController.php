<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\pengunjung;
use Exception;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pengunjung::select("*")->orderBy("pengunjung.created_at", "DESC")->get();

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
            $insert = pengunjung::create($request->all());
            $data = pengunjung::where("id_pengunjung", $insert->id_pengunjung)->first();

            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            } else{
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
        $data = pengunjung::orderBy("pengunjung.created_at", "DESC")->where("pengunjung.id_pengunjung", $id)->first();

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
            $update = pengunjung::findOrFail($id)->update($request->all());
            $data = pengunjung::where("id_pengunjung", "=", $id);

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
        $data = pengunjung::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
