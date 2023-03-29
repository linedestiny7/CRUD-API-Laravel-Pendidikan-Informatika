<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\hashtag;
use Exception;
use Illuminate\Http\Request;

class HashtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = hashtag::select("*")->orderBy("hashtag.created_at", "DESC")->get();

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
            $insert = hashtag::create($request->all());
            $data = hashtag::where("id_hashtag", $insert->id_hashtag)->first();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else{
                return ApiFormatter::createApi(400, 'Empty');
            }
        } catch (Exception) {
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
        $data = hashtag::orderBy("hashtag.created_at", "DESC")->where("hashtag.id_hashtag", $id)->first();

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
            $update = hashtag::findOrFail($id)->update($request->all());
            $data = hashtag::where("id_hashtag", "=", $id)->first();

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
        $data = hashtag::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
