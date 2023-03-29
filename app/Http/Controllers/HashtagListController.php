<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\hashtaglist;
use Exception;
use Illuminate\Http\Request;

class HashtagListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = hashtaglist::join("berita", "berita.id_berita", "hashtag_list.id_berita")->join("hashtag", "hashtag.id_hashtag", "hashtag_list.id_hashtag")->orderBy("hashtag_list.created_at", "DESC")->get();

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
            $insert = hashtaglist::create($request->all());
            $data = hashtaglist::where("id_hashtag_list", $insert->id_hashtag_list)->first();

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
        $data = hashtaglist::join("berita", "berita.id_berita", "hashtag_list.id_berita")->join("hashtag", "hashtag.id_hashtag", "hashtag_list.id_hashtag")->orderBy("hashtag_list.created_at", "DESC")->where("hashtag_list.id_hashtag_list", $id)->first();

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
            $update = hashtaglist::findOrFail($id)->update($request->all());


            $data = hashtaglist::where("id_hashtag_list","=",$id)->first();

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
        $data = hashtaglist::findOrFail($id)->delete();

        return ApiFormatter::createApi(200, 'Success Delete');
    }
}
