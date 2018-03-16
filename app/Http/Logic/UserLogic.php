<?php
/**
 * Created by PhpStorm.
 * User: EDY TCHOKOUANI
 * Date: 15/03/2018
 * Time: 11:29
 */

namespace App\Http\Logic;
use App\AdminHotel;
use Illuminate\Http\Request;
use App\User;

class UserLogic
{
    public static function getAll()
    {
        return User::all();
    }

    public static function create()
    {
        $user = User::create(request()->all());
        $token = JWT::fromUser($user);
        return response()->json(['token' => $token, 'user' =>$user], 200);
    }

    public static function store(Request $request)
    {

    }

    public static function edit($id)
    {

    }

    public static function update(Request $request, $id)
    {
        if($request->ajax()){
            $user = User::find($id)->update($request->all());
            return response()->json($user, 200);
        }



    }

    public static function destroy($id)
    {
        User::find($id)->delete();
        return response()->json([
            'status' => 1,
            'msg' => 'Utilisateur supprimé avec success'
        ]);
    }

    public static function show($id)
    {

    }

    public static function managePermissions($id)
    {
        $adminHotel = AdminHotel::find($id)->update(request()->input());
        return response()->json($adminHotel, 200);
    }

    public static function authentificate()
    {
        $credentials = request()->only("login","passport");
        $user = User::first();

        try{
            $token = JWT::fromUser($user);
            if(!$token){
                return response()->json(['error' => 'invalid credentials']);
            }
        }catch (Exception $e){
            return response()->json(['error' => 'somethis went wrong'], 500);
        }
        return response()->json(['token' => $token, 'user' =>$user], 200);
    }

}