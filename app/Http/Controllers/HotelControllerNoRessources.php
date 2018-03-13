<?php

namespace App\Http\Controllers;

use App\Http\Logic\HotelLogic;
use App\Http\Requests\StoreHotelRequest;
use Illuminate\Http\Request;

class HotelControllerNoRessources extends Controller
{

    //store hotel
    public function store(StoreHotelRequest $request)
    {
        dd($request->only('nomAdmin'));
        return HotelLogic::store($request);
    }
}
