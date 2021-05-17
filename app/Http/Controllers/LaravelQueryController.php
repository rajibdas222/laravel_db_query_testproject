<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelQueryController extends Controller
{
     public  function  laravelQuery(){
//         $result = DB::table('reservations')
//        ->join('rooms','reservations.room_id','=','rooms.id')
//        ->join('users','reservations.room_id','=','users.id')
//        ->select('users.name', 'reservations.room_id')
//        ->get();



         $result = DB::table('rooms')
             ->leftJoin('reservations','rooms.id', '=','reservations.room_id')
             ->selectRaw('room_size , count(reservations.id) as reservations_count')
             ->groupBy('room_size')
             ->orderByRaw('count(reservations.id) DESC')
             ->get();


         echo "<pre>";
         dump($result);
     }
}
