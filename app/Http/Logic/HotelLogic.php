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
     * @author nkaurelien
     * @return \Illuminate\Http\Response
     */
    public static function getPaginate(Request $request)
    {
        $q = $request->input('q');
        $prix_min = $request->input('prixMin');
        $prix_max = $request->input('prixMax');
        $nbre_etoile = $request->input('nbreEtoile');
        $place = $request->input('place');

        /* debut du filtrage */
        $query = Hotel::query();

        if ($q) {
            $query = $query->where(function ($query) {
                        $query->where('nom', 'like', "%$q%")->orWhere('tel', 'like', "%$q%")->orWhere('email', 'like', "%$q%")
                    });
        }

        if ($prix_max) {
            $query = $query->where("prix_max", '<=', $prix_max);
        }
        if ($prix_min) {
            $query = $query->where("prix_min", '>=', $prix_min);
        }

        if ($place) {
             $query = $query->where(function ($query) {
                        $query->where('place', 'like', "%$place%")->orWhere('ville', 'like', "%$place%")->orWhere('pays', 'like', "%$place%")
                    });
        }

        /* resultat de la recherche et pagination */

        return Hotel::paginate();
    }

    /**
     * Display a listing of the resource per page.
     * @author nkaurelien
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
