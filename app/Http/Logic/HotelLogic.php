<?php

namespace App\Http\Logic;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Hotel;
use App;
use DB;

class HotelLogic
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getAll()
    {
        return Hotel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {

        DB::beginTransaction();


        try {

            $data = $request->input();
            $hotel = Hotel::create($data);

            if($request->ajax()){
                return response()->json(['status' => 1, 'msg' => 'Hotel <b>'. $data['nom'] .'</b> a ete cree avec succes'], 200);
            }else{
                return back()->withInput();
            }
            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            if($request->ajax()){
                return response()->json(['status' => 0, 'msg' => 'Hotel <b>'. $data['nom'] .'</b> n\'a pas peut etre creer'],500) ;
            }else{
                return back()->withInput();
            }
        }

        return abort('500');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
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
    public static function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function destroy($id)
    {
        //
    }
}
