<?php

namespace App\Http\Logic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Hotel;
use App\User;
use App;
use DB;
use Lcobucci\JWT\Builder;
use Mockery\CountValidator\Exception;

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

            if($request->ajax()){
                $data = $request->only("nom", "nom_proprio","email","tel","place","ville","pays","desc","tel_proprio","email_proprio");
                $hotel = Hotel::create($data);

                $user = self::_generateHotelAccount($request);
                DB::commit();
                return response()->json(['status' => 1, 'msg' => 'Hotel <b>'. $hotel->nom .'</b> a ete cree avec succes'], 200);
            }else{
                return back()->withInput();
            }

        } catch (Exception $e) {
            DB::rollback();

            //die($e->getMessage());
            if($request->ajax()){
                return response()->json(['status' => 0, 'msg' => 'Hotel <b>'. $data['nom'] .'</b> n\'a pas peut etre creer'],500) ;
            }else{
                return back()->withInput();
            }
        }

        return abort('500');
    }

    private static function _generateHotelAccount(Request $request)
    {

        try {
            $email = $request->input("email");
            $clearPassword = str_random(8);
            $nom = $request->input('nom');
            $password = bcrypt($clearPassword);


            $user = App\AdminHotel::create(compact("email", "password", "nom"));

            $password_token = (new Builder())->setIssuer('HotelPro')// Configures the issuer (iss claim)
            ->setAudience('HotelPro')// Configures the audience (aud claim)
            ->setId($user->id, true)// Configures the id (jti claim), replicating as a header item
            ->setIssuedAt(time())// Configures the time that the token was issue (iat claim)
            ->setNotBefore(time() + 0)// Configures the time that the token can be used (nbf claim)
            //->setExpiration(time() + 3600) // Configures the expiration time of the token (exp claim)
            ->set('password', $clearPassword)// Configures a new claim, called "uid"
            ->getToken(); // Retrieves the generated token

            $user->password_token = $password_token;
            $user->save();

//        $user->notify(new App\Notifications\HotelAdminCreatedNotification([
//            "login" => $email,
//            "password" => $clearPassword,
//        ]));

            return $user;
        } catch (Exception $e) {
            abort(500, 'Internal Error');
            //die($e->getMessage());
        }
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
