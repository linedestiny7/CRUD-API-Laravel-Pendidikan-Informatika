<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\iklan;
use Exception;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = iklan::join("users", "users.id_users", "iklan.id_users")->orderBy("iklan.created_at", "DESC")->get();

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
            $insert = iklan::create($request->all());
            $data = iklan::where("id_iklan", $insert->id_iklan)->first();

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
        $data = iklan::join("users", "users.id_users", "iklan.id_users")->where("iklan.id_iklan", $id)->first();

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
            $update = iklan::findOrFail($id)->update($request->all());


            $data = iklan::where("id_iklan","=",$id)->first();

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
        $data = iklan::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
